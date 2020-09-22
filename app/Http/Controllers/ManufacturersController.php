<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Manufacturer;

class ManufacturersController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $manufacturers=Manufacturer::paginate(10);
        return view('admin.table.manufacturer')->with('manufacturers',$manufacturers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.form.manufacturerCreate');
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
            $path= $request->file('image')->storeAs('public/manufacturers',$fileNameToStore);
        }
        else{
            $fileNameToStore='noimage.png';
        }
        $manufacturer=new manufacturer;
        $manufacturer->name=$request->name;
        $manufacturer->category_id=$request->category;
        $manufacturer->image=$fileNameToStore;
        $manufacturer->save();
        return redirect('manufacturers')->with('status','Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $manufacturer=Manufacturer::find($id);
        $productsManu=Product::where('manufacturer_id',$manufacturer->id)->paginate(20);
        return view('pages.category')->with('productsCate',$productsManu);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $manufacturer=manufacturer::find($id);
        $default=$manufacturer->category;      
        return view('admin.form.manufacturerEdit',compact('manufacturer','default'));
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
            $path= $request->file('image')->storeAs('public/manufacturers',$fileNameToStore);
        }
        $manufacturer=Manufacturer::find($id);
        $manufacturer->name=$request->name;
        $manufacturer->category_id=$request->category;
        if($request->hasFile('image')){
             $manufacturer->image=$fileNameToStore;
        }
        $manufacturer->save();
        return redirect('manufacturers')->with('status','Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $manufacturer=Manufacturer::find($id);
        $manufacturer->delete();
        return redirect('manufacturers')->with('status','DELETED');
    }
    public function showProductsWithManu($id){
        $products=Product::where('manufacturer_id',$id)->paginate(20);
        return view('admin.table.product')->with('products',$products);
    }
}



