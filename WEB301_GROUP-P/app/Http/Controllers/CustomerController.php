<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $customer = Customer::all();
        return view('customer.index',['customer' => $customer]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('customer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $customer = new Customer();
        $customer->Name = $request->input('Name');
        $customer->Sex = $request->input('Sex');
        $customer->phoneNumber = $request->input('phoneNumber');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $customer = Customer::find($id);
        return view('customer.show', ['customer' => $customer]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $customer = Customer::find($id);
        return view('customer.edit', ['customer' => $customer]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $customer = Customer::find($id);
        $customer->Name = $request->input('Name');
        $customer->Sex = $request->input('Sex');
        $customer->phoneNumber = $request->input('phoneNumber');
        $customer->save();
        return redirect()->route('customer.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $customer = Customer::find($id);
        $customer->delete();
        return redirect()->route('customer.index');
        
    }
}
