<?php

namespace App\Http\Controllers;

use App\Models\Brands;
use App\Models\Categorie;
use App\Models\Image as Imagenes;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Image;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands  = Brands::where('estatus',1)->get();
        $categories = Categorie::where('estatus',1)->get();
        return view('shop')->with([
            'brands'    => $brands,
            'categories'    => $categories
        ]);
    }

    public function cart(Request $request)
    {
        return view('cart');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showSingleProduct($cat_id,$prod_id)
    {
        $categories = Categorie::orderBy('name','ASC')->get();
        $brands  = Brands::where('estatus',1)->get();
        return view('single_view')->with([
            'categories' => $categories,
            'brands'    => $brands
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function createProducts(Request $request)
    {
        return view('prod_admin');
    }

    public function saveProduct(Request $request)
    {
        $request->validate([
           'file'   => 'required|image'
        ]);

        try {
            $producto = Product::create([
                'sku'   => (string)Str::uuid(),
                'name'  =>'dummy Prod',
                'category'  => 1,
                'price' => 10,
                'taxes' => 16,
                'discount' => 0,
                'minimal_description' => "LOREM IPSUM DOLER SIT AMET",
                'description' => "LO MISMO PERo MAS LARGO",
                'additional_info' => null,
                'brand' => null,
                'stars' => 0,
                'quantity' => 100
            ]);

            $imageName = $producto->id.'.'.$request->file('file')->extension();
            $imageThumbName = 'thumb_'.$producto->id.'.'.$request->file('file')->extension();
            $location = $request->file('file')->move(public_path('productos'),$imageName);

            $thubDestPath = storage_path('/productos/thumbs/'.$imageThumbName);
            $imgFile = (new \Intervention\Image\Image)->make($imageThumbName)->resize(60,80,function ($constraint){
                $constraint->aspectRatio();
            });
            $imgFile->save($thubDestPath);

            $salvar = Imagenes::create([
               'product_id' => $producto->id,
                'image'     => $imageName,
                'thumb1'    => 'thumb'.$imageName,
                'location'  => public_path('productos')
            ]);

        } catch (\Exception $e) {
            return $e->getMessage();
        }

        return 'ok';

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    private function cwUpload($field_name = '', $target_folder = '', $file_name = '', $thumb = FALSE, $thumb_folder = '', $thumb_width = '', $thumb_height = ''){

        //folder path setup
        $target_path = $target_folder;
        $thumb_path = $thumb_folder;

        //file name setup
        $filename_err = explode(".",$_FILES[$field_name]['name']);
        $filename_err_count = count($filename_err);
        $file_ext = $filename_err[$filename_err_count-1];
        if($file_name != ''){
            $fileName = $file_name.'.'.$file_ext;
        }else{
            $fileName = $_FILES[$field_name]['name'];
        }

        //upload image path
        $upload_image = $target_path.basename($fileName);

        //upload image
        if(move_uploaded_file($_FILES[$field_name]['tmp_name'],$upload_image))
        {
            //thumbnail creation
            if($thumb == TRUE)
            {
                $thumbnail = $thumb_path.$fileName;
                list($width,$height) = getimagesize($upload_image);
                $thumb_create = imagecreatetruecolor($thumb_width,$thumb_height);
                switch($file_ext){
                    case 'jpg':
                        $source = imagecreatefromjpeg($upload_image);
                        break;
                    case 'jpeg':
                        $source = imagecreatefromjpeg($upload_image);
                        break;

                    case 'png':
                        $source = imagecreatefrompng($upload_image);
                        break;
                    case 'gif':
                        $source = imagecreatefromgif($upload_image);
                        break;
                    default:
                        $source = imagecreatefromjpeg($upload_image);
                }

                imagecopyresized($thumb_create,$source,0,0,0,0,$thumb_width,$thumb_height,$width,$height);
                switch($file_ext){
                    case 'jpg' || 'jpeg':
                        imagejpeg($thumb_create,$thumbnail,100);
                        break;
                    case 'png':
                        imagepng($thumb_create,$thumbnail,100);
                        break;

                    case 'gif':
                        imagegif($thumb_create,$thumbnail,100);
                        break;
                    default:
                        imagejpeg($thumb_create,$thumbnail,100);
                }

            }

            return $fileName;
        }
        else
        {
            return false;
        }
    }
}
