<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    //Auth
    public function __construct()
    {
        $this->middleware('auth');
    }


    //Index
    public function index()
    {
        
        $products=Product::latest()->paginate(3);
        return view('product.index' , compact('products'));
    }

    //Add
    public function create()
    {
        
        return view('product.create');
    
    }

   
    //Store
    public function store(Request $request)
    {
        
        $request->validate([
            'name'=>'required',
            'price'=>'required'

        ]);
        $product=Product::create($request->all());
        return redirect()->route('product.index')
        ->with('success' , 'success added succseefuly');

    }

    //Show
    public function show(Product $product)
    {
        
        return view ('product.show' , compact('product'));
    }

     //Edit
    public function edit(Product $product)
    {
        
        return view ('product.edit' , compact('product'));
    }

   
    //Update
    public function update(Request $request, Product $product)
    {
        
        $request->validate([
            'name'=>'required',
            'price'=>'required'

        ]);
        $product->update($request->all());
        return redirect()->route('product.index')->with('success' , 'success update succseefuly');
    }

    //Delete
    public function destroy(Product $product)
    {
        
        $product->delete();
        return redirect()->route('product.index')->with('success' , 'success delete succseefuly');

    }

    //SoftDelete
    public function softdelete($id)
    {
        
        $product = Product::find($id)->delete();
        return redirect()->route('product.index')->with('success' , 'success delete succseefuly');

    }
}
