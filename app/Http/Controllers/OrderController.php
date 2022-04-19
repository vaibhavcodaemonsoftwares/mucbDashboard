<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\assignedordermail;


class OrderController extends Controller
{
    function OrderList()
    {
        $data = Order::join('packages','packages.package_id','=','orders.package_id')
                        ->join('users','users.id','=','orders.user_id')
                        ->get(['orders.orders_id','users.name','packages.package_name','orders.assigned_inspector','orders.order_status']);
        return view('order-list',['orders'=>$data]);
    }

    function editOrder($id)
    {
        $order = DB::select('select orders.orders_id,orders.assigned_inspector, orders.order_status, users.name, packages.package_name from orders inner join users on users.id = orders.user_id inner join packages on packages.package_id = orders.package_id where orders_id = ?', [$id]);
        $data =  DB::select('select * from users where user_status = "Free"');
        // $order = DB::select('select * from orders where orders_id = ?', [$id]);
        return view('order-edit', compact('order'),['inspectors'=>$data]);
    }
    // function inspectorList()
    // {
    //     $data =  DB::select("select users.name from orders inner join users on users.id = orders.user_id where user_status = 'Free'");
    //     return view('order-edit',['inspectors'=>$data]);
    // }

    function updateorder(Request $reqest , $id)
    {
        $order = DB::select('select * from orders where orders_id = ?', [$id]);
        $order_status = $reqest->input('order_status');
        $inspector = $reqest->input('inspector');
        if($inspector == "None")
        {
            DB::update('update orders set order_status= "Unassiged",assigned_inspector= ? where orders_id = ?',[$inspector,$id]);
        }
        elseif($order_status== "Complete")
        {
            DB::update('update orders set order_status= "Complete", assigned_inspector= ? where orders_id = ?',[$inspector,$id]);
            DB::update('update users set user_status= "Free" where name = ?',[$inspector]);
        }
        else
        {
            DB::update('update orders set order_status= "Assigned", assigned_inspector= ? where orders_id = ?',[$inspector,$id]);
            DB::update('update users set user_status= "Assigned" where name = ?',[$inspector]);

            $details = [

                'user_name' => $reqest->input('user_name'),
                'package_name' => $reqest->input('package_name')

            ];

            $address=DB::table('users')->select('email')->where('name',$inspector)->value('email');
            Mail::to($address)->send(new assignedordermail($details));
        }


        return redirect()->back()->with('result','Order Status Updated Successfully');
    }
    function AssignOrder()
    {

    }
}
