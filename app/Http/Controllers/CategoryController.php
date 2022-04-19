<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use App\Models\Category;

class CategoryController extends Controller
{
    function categoryList()
    {
        $data = Category::all();
        return view('category-list',['categories'=>$data]);
    }

    function addCategoryView()
    {
        return view('add-category');
    }

    function addCategory(Request $req)
    {
        $category = new Category;
        $category->Name = $req->input('category_name');
        $category->save();
        return redirect()->back()->with('result','Category Added Successfully');
    }

    function editCategory($id)
    {
        $category = DB::select('select * from category where id = ?', [$id]);
        return view('category-edit', compact('category'));
    }

    function updateCategory(Request $req , $id)
    {
        $category = DB::select('select * from category where id = ?', [$id]);
        $category_nm = $req->input('category_name');
        DB::update('update category set Name= ? where id = ?',[$category_nm,$id]);
        return redirect()->back()->with('result','Category Updated Successfully');
    }

    function deleteCategory($id)
    {
        // $data = DB::select('select * from category where id = ?', [$id]);
        DB::delete('delete from category where id = ?',[$id]);
        return redirect()->back()->with('result','Category deleted Successfully');
    }
}
