<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Products::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            // 'agency_id'=> 'required',
            'categorie_id'=> 'required',
            'brand_id' => 'required',
            'price' => 'required',
            'name' => 'required',
            'description' => 'required',
            'photos' => 'required',
        ]);

        return Products::create([
            // 'agency_id' => request('agency_id'),
            'categorie_id' => request('categorie_id'),
            'brand_id' => request('brand_id'),
            'price' => request('price'),
            'name' => request('name'),
            'description' => request('description'),
            'photos' => request('photos'),
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Products::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Products $products)
    {
        request()->validate([
            // 'agency_id'=> 'required',
            'categorie_id'=> 'required',
            'brand_id' => 'required',
            'price' => 'required',
            'name' => 'required',
            'description' => 'required',
            'photos' => 'required',
        ]);

        $success = $products->update([
            // 'agency_id' => request('agency_id'),
            'categorie_id' => request('categorie_id'),
            'brand_id' => request('brand_id'),
            'price' => request('price'),
            'name' => request('name'),
            'description' => request('description'),
            'photos' => request('photos'),
        ]);

        return [
            'success' => $success
        ];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Products $products)
    {
        $success = $products->delete();

        return [
            'success' => $success
        ];
    }

    public function search($name)
    {
        return Products::where('name', 'like', '%'.$name.'%')->get();
    }
}
