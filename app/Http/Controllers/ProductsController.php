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
    public function store()
    {
        request()->validate([
            'price' => 'required',
            'name' => 'required',
            'description' => 'required',
            'photos' => 'required',
        ]);

        return Products::create([
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
        //
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
    public function update(Products $products)
    {
        request()->validate([
            'price' => 'required',
            'name' => 'required',
            'description' => 'required',
            'photos' => 'required',
        ]);

        $success = $products->update([
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
}
