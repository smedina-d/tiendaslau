<?php

namespace App\Http\Controllers;

use App\Classes\SkuGenerator;
use App\Models\Categorie;
use App\Models\Imagenes;
use App\Models\Order;
use App\Models\Product;
use App\Models\Sku;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class AdminController extends Controller
{
    public function index() {
        $prod = Product::all();
        $orders = Order::all();
        return view('layouts.admin')
            ->with([
                'prod' => $prod,
                'orders'    => $orders
            ]);
    }

    public function create_products()
    {
        $cat = Categorie::all();
        $prod = Product::all();
        $orders = Order::all();
        return view('admin.create_product')->with(['cat' => $cat,'prod' => $prod,
            'orders'    => $orders]);
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

    public function editProduct() {
        $cat = Categorie::all();
        $prod = Product::with('imagenes')->orderBy('sku','asc')->get();
        $orders = Order::all();
        return view('admin.editProducts')->with(['cat' => $cat,'prod' => $prod,
            'orders'    => $orders]);
    }

    public function editImagenes($prod_id) {
        $cat = Categorie::all();
        $prod = Product::with('imagenes')->orderBy('sku','asc')->get();
        $orders = Order::all();
        $imagenes = Imagenes::where('product_id',$prod_id)->get();
        return view('admin.editImagenes')->with(['cat' => $cat,'prod' => $prod,
            'orders'    => $orders,
            'imagenes' => $imagenes]);
    }

    public function productEndpoint($id){
        $prod = Product::where('id',$id)->first();
        return Response()->json($prod,202);
    }

    public function updateImages(Request $request) {
        $prodId = $request->prod_id;
        $image = $request->file('file');
        foreach ($image as $key => $img2) {
            $input['imagename'] = $prodId.time().'.'.$img2->extension();
            $input['thumbname'] = 'thumb_'.$prodId.time().'.'.$img2->extension();

            $destinationPath = public_path('/productos/thumbnail');
            $img = Image::make($img2->path());
            $img->resize(60, 80, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath.'/'.$input['thumbname']);

            $destinationPath = public_path('/productos');
            $img2->move($destinationPath, $input['imagename']);

            $salvar = Imagenes::where('id',$request->img_id)->update([
                'product_id' => $prodId,
                'image'     => $input['imagename'],
                'thumb1'    => $input['thumbname'],
                'location'  => public_path('productos')
            ]);
        }

        return back();
    }
}
