<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
use App\Models\Owner;


use Illuminate\Http\Request;

class ProductController extends Controller
{
     public function all()
    {
        $products=Product::all();
        return view('show_products')->with('products',$products);

    }
    
    
    public function createData()
    {
        $categories=Category::where("parent_id", "!=", null)->get(); 
        $owners=Owner::all();
        return view('createData')->with('categories',$categories)->with('owners',$owners);

    }
    public function store(Request $request)
    {
        $name=$request->input('name');
        $price=$request->input('price');
        $category_id=$request->input('category');
        $owner_id=$request->input('owner');
        $product=Product::create(["name"=>$name,"price"=>$price,"category_id"=>$category_id]);
        $product->owners()->attach($owner_id);
        return redirect('/');
        
    }
}
