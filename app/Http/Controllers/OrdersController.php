<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Orders::all();
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
            //'customer_id'=> 'required',
            'date' => 'required',
            'status' => 'required',
            'amount' => 'required',
        ]);

        return Orders::create([
            //'customer_id' => request('customer_id'),
            'date' => request('date'),
            'status' => request('status'),
            'amount' => request('amount'),
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
        return Orders::find($id);
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
    public function update(Request $request, Orders $orders)
    {
        request()->validate([
            //'customer_id'=> 'required',
            'date' => 'required',
            'status' => 'required',
            'amount' => 'required',
        ]);

        $success = $orders->update([
            //'customer_id' => request('customer_id'),
            'date' => request('date'),
            'status' => request('status'),
            'amount' => request('amount'),
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
    public function destroy(Orders $orders)
    {
        $success = $orders->delete();

        return [
            'success' => $success
        ];
    }


}
