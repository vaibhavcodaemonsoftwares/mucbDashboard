<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Models\Package;

class ProductaddController extends Controller
{
    //Package list
    function packageList()
    {
        $data = Package::all();
        return view('package-list',['packages'=>$data]);
    }

    //Add package
    function addPackageView()
    {
        return view('add-product');
    }
    function addPackage(Request $req)
    {
        $package = new Package;
        $package->package_name = $req->input('package_name');
        $package->package_price = $req->input('package_price');
        if($req->hasfile('package_img'))
        {
            $file = $req->file('package_img');
            $extn = $file->getClientOriginalExtension();
            $filenm = $req->input('package_name').'.'.$extn;
            $file->move('img/', $filenm);
            $package->package_img = $filenm;
        }
        $package->package_desc = $req->input('package_desc');
        $package->save();
        return redirect()->back()->with('result','Product Added Successfully');
    }

    //edit package
    function editPackage($id)
    {
        $package = DB::select('select * from packages where package_id = ?', [$id]);
        return view('package-edit', compact('package'));
    }

    //update data in database
    function updatePackage(Request $req , $id)
    {
        $package = DB::select('select * from packages where package_id = ?', [$id]);
        $package_nm = $req->input('package_name');
        $package_price = $req->input('package_price');

        if($req->hasfile('package_img'))
        {
            $dest = 'img/'.$package[0]->package_img;
            if(File::exists($dest))
            {
                File::delete($dest);
            }
            $file = $req->file('package_img');
            $extn = $file->getClientOriginalExtension();
            $filenm = $req->input('package_name').'.'.$extn;
            $file->move('img/', $filenm);
            //$package[0]->package_img = $filenm;
        }
        $package_desc = $req->input('package_desc');
        DB::update('update packages set package_name= ?,package_price=?,package_img=?,package_desc=? where package_id = ?',[$package_nm,$package_price,$filenm,$package_desc,$id]);
        return redirect()->back()->with('result','Product Updated Successfully');
    }

    //Delete Package
    function deletePackage($id)
    {
        $data = DB::select('select * from packages where package_id = ?', [$id]);
        $dest = 'img/'.$data[0]->package_img;
        if(File::exists($dest))
        {
            File::delete($dest);
        }
        DB::delete('delete from packages where package_id = ?',[$id]);
        return redirect()->back()->with('result','Product deleted Successfully');
    }
}
