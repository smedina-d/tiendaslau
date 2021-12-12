<?php

namespace App\Http\Controllers;

use App\Models\Brands;
use App\Models\Categorie;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;

class MainController extends Controller
{
    public function quickView($param) {
        $productos = Product::with('imagenes')->where('refundable',0)
            ->where('id',$param)->first();

        return view('quick-view')->with('prod',$productos);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Categorie::where('estatus',1)->get();
        $productos = Product::with('imagenes')->where('refundable',0)
            ->where('quantity','>',0 )->limit(6)->get();
        return view('shop')->with([
            'categories'    => $categories,
            'prod'      => $productos
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function showSingleProduct($cat_id,$prod_id)
    {
        $categories = Categorie::orderBy('name','ASC')->get();
        $productos = Product::with('imagenes')->where('refundable',0)
            ->where('id',$prod_id)->first();
        $related = Product::with('imagenes')->where('category',$cat_id)->limit(6)->get();

        return view('single_view')->with(['categories' => $categories, 'prod' => $productos,'related' => $related]);
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

    public function resize(Request $request)
    {
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $image = $request->file('image');
        $input['imagename'] = time().'.'.$image->extension();

        $destinationPath = public_path('/productos/thumbnail');
        $img = Image::make($image->path());
        $img->resize(60, 80, function ($constraint) {
            $constraint->aspectRatio();
        })->save($destinationPath.'/'.$input['imagename']);

        $destinationPath = public_path('/productos');
        $image->move($destinationPath, $input['imagename']);

        return back()
            ->with('success','Image Upload successful')
            ->with('imageName',$input['imagename']);
    }

    public function showAll(Request $request, $catId=''){
        $categories = Categorie::where('estatus',1)->get();
        $productos = Product::with('imagenes')->where('refundable',0)
            ->where('quantity','>',0 )
            ->orWhere(function($qry) use ($catId) {
                if(!empty($catId)){
                    $qry->where('category',$catId);
                }
        })->get();
        return view('all_store_items')->with([
            'categories'    => $categories,
            'prod'      => $productos
        ]);
    }
}
