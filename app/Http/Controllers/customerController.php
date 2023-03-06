<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ImportCustomer;
use App\Exports\ExportCustomer;
use App\Models\Customer;
use Session;

class customerController extends Controller
{
    public function import(Request $request){
        Excel::import(new ImportCustomer, $request->file('file')->store('files'));
        return redirect()->back();
    }

    public function exportUsers(Request $request){
        return Excel::download(new ExportCustomer, 'users.xlsx');
    }

    public function add(){
        return view('admin.add');
    }

    public function store(Request $request){

        // dd($request);
        Customer::create($request->all());
        return redirect('adminDashBoard');
    }

    public function edit($jid){
        // dd($jid);
        // $data=Customer::where('Jid',$jid)->get();

        $data=Customer::find($jid);       
        return view('admin.edit',compact('data'));
    }

    public function update(Request $request, $jid){

        $data = Customer::find($jid);
        $input = $request->all();
        $data->update($input);
        Session::flash('msg', 'Your Data Updated Successfully');
        return redirect('adminDashBoard')->with('flash_message', 'Contact Updated!'); 
    }

    public function registeredList(){
        $data=Customer::get();
        return view('admin.registerdList',compact('data'));
    }

    public function alumniMember(){
        $data=Customer::get();
        return view('admin.registerdList',compact('data'));
    }
}
