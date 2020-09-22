<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductsController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Product::paginate(10);
        return view('admin.table.product')->with('products',$products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.form.productCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'image' => 'image||nullable'
        ]);
        if($request->hasFile('image')){
            //get full name
            $fileNameWithExt=$request->file('image')->getClientOriginalName();
            //get just file name
            $filename= pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //get just ext
            $extension=$request->file('image')->getClientOriginalExtension();
            $fileNameToStore=$filename.".".$extension;
            $path= $request->file('image')->storeAs('public/products',$fileNameToStore);
        }
        else{
            $fileNameToStore='noimage.png';
        }
        $product=new Product;
        $product->name=$request->name;
        $product->price=$request->price;
        $product->category_id=$request->category;
        $product->manufacturer_id=$request->manufacturer;
        $product->image=$fileNameToStore;
        $product->save();
        return redirect('products')->with('status','Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product=Product::find($id);
        return view('pages.product')->with('product',$product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product=Product::find($id);
        $defaultCate=$product->category;
        $defaultManu=$product->manufacturer;
        return view('admin.form.productEdit',compact('product','defaultCate','defaultManu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'image' => 'image||nullable'
        ]);
        if($request->hasFile('image')){
            //get full name
            $fileNameWithExt=$request->file('image')->getClientOriginalName();
            //get just file name
            $filename= pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //get just ext
            $extension=$request->file('image')->getClientOriginalExtension();
            $fileNameToStore=$filename.".".$extension;
            $path= $request->file('image')->storeAs('public/products',$fileNameToStore);
        }
        $product=Product::find($id);
        $product->name=$request->name;
        $product->price=$request->price;
        $product->category_id=$request->category;
        $product->manufacturer_id=$request->manufacturer;
        if($request->hasFile('image')){
             $product->image=$fileNameToStore;
        }
        $product->save();
        return redirect('products')->with('status','Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product=Product::find($id);
        $product->delete();
        return redirect('products')->with('status','DELETED');
    }
    public function addToCart($id)
    {
        $product=Product::find($id);
        $cart= session()->get('cart');
        if(isset($cart[$id])){
            $cart[$id]['quantity']=$cart[$id]['quantity']+1;

        }
        else
        {
            $cart[$id]= [
                'id' => $product->id,
                'name'=> $product->name,
                'quantity'=> 1,
                'price'=> $product->price,
                'image'=> $product->image
            ];
        }
        session()->put('cart',$cart);
    }
}
