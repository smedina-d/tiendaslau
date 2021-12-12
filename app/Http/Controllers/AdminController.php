<?php

namespace App\Http\Controllers;

use App\Classes\SkuGenerator;
use App\Models\Categorie;
use App\Models\Imagenes;
use App\Models\Product;
use App\Models\Sku;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class AdminController extends Controller
{
    public function index() {
        return view('admin.admin');
    }

    public function create_products()
    {
        $cat = Categorie::all();
        return view('admin.create_product')->with(['cat' => $cat]);
    }

    public function saveProduct(Request $request)
    {
        $sku = new SkuGenerator();
        try {
            $producto = Product::create([
                'sku'   => $sku->getSku(),
                'name'  => $request->name,
                'category'  => $request->category,
                'price' => $request->price,
                'taxes' => 16,
                'discount' => 0,
                'minimal_description' => null,
                'description' => $request->description,
                'additional_info' => null,
                'brand' => null,
                'stars' => 0,
                'quantity' => $request->quantity
            ]);

            $image = $request->file('file');
            foreach ($image as $key => $img2) {
                $input['imagename'] = $producto->id.$key.'.'.$img2->extension();
                $input['thumbname'] = 'thumb_'.$producto->id.$key.'.'.$img2->extension();

                $destinationPath = public_path('/productos/thumbnail');
                $img = Image::make($img2->path());
                $img->resize(60, 80, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($destinationPath.'/'.$input['thumbname']);

                $destinationPath = public_path('/productos');
                $img2->move($destinationPath, $input['imagename']);

                $salvar = Imagenes::create([
                    'product_id' => $producto->id,
                    'image'     => $input['imagename'],
                    'thumb1'    => $input['thumbname'],
                    'location'  => public_path('productos')
                ]);
            }

        } catch (\Exception $e) {
            return $e->getMessage();
        }

        return back()->with(['message' => "Insertado con exito"]);

    }
}
