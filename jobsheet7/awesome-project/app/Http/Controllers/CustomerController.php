<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CustomerController extends Controller
{
    public function index(){
        $customer = Customer::with('officer')->get();
        return view('customer.home',['customer'=>$customer]);
    }
    public function create(Request $request){
       $action =  Customer::create([
        'customer_name' => $request->customer_name,
        'officer_id' => $request->officer_id
    ]);
    if($action){
        return redirect()->route('customer.index');
    }

        
    }
    public function show($id)
{
    $customer = Customer::with(['officer'])->findOrFail($id);

    return view('customer.show', ['customer' => $customer]);
}
    public function edit( $id){
        $customer = Customer::findOrFail($id);
        return view('customer.edit',['customer'=>$customer]);
    }
    public function update(Request $request, $id)
{
    $customer = Customer::findOrFail($id);

    $actions = $customer->update([
        'customer_name' => $request->input('customer_name'),
        // Update properti lainnya sesuai kebutuhan
    ]);
    if($actions){
        Session::flash(
            'update','upadate sucess'
        );
        return redirect()->route('customer.index')->with('success', 'Customer updated successfully');
    }

}

public function destroy($id)
{
    $customer = Customer::find($id);

    if (!$customer) {
        return redirect()->route('customer.index')->with('error', 'Customer not found.');
    }

    $customer->delete();

    return redirect()->route('customer.index')->with('success', 'Customer deleted successfully.');
}
}
