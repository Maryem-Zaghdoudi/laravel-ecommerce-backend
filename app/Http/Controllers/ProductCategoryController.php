<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\PseudoTypes\True_;

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function Get_category_children($id){
        $category = Category::find($id);
        $category_ids[0]= intval($id);
        $category_ids = array_merge($category_ids , $category->allChildren()->pluck('id')->all());
        
        return ($category_ids);
    }

     public function search(Request $request) {
       
        
        //     $category=Category::find($request->category_id);
        // $productcat=ProductCategory::where('category_id' , $request->category_id)->get();
        // $product_id= array();
        // foreach($productcat as $prodcat){
        //      array_push($product_id , $prodcat->product_id);
        // }

        // $products= Product::whereIn('id' , $product_id)
        
        // ->get();
        
          

        $category=Category::find($request->category);
        $productcat=ProductCategory::where('category_id' , $request->category)->get();
        $product_id= array();
        foreach($productcat as $prodcat){
             array_push($product_id , $prodcat->product_id);
        }

        $products= Product::whereIn('id' , $product_id)
        
        ->where('title' , 'LIKE' , '%'.$request->word .'%')
        ->get();

        $word=$request->word;
        $category= $request->category_id;
        $category_search=$request->category;
        $products=Product::when($request->word,function($query,$word){
            $query->where('title' , 'LIKE' , '%'.$word .'%');
            
        })->when($request->category,function($query,$category){
            $productcat=ProductCategory::where('category_id' , $category)->get();
            $product_id= array();
            foreach($productcat as $prodcat){
                 array_push($product_id , $prodcat->product_id);
            };
            $query->whereIn('id' , $product_id);
            
        })
        ->when($request->category_id, function ($query , $category_search){
            $productcat=ProductCategory::where('category_id' , $category_search)->get();
        $product_id= array();
        foreach($productcat as $prodcat){
             array_push($product_id , $prodcat->product_id);
        };

        $query->whereIn('id' , $product_id);
       
        })
        ->get();

        //les 5dernier projet
        // if ($request->recent ==True){
            // $products= Product::orderBy('created_at' , 'desc')->take(5)->get();
            // $count= count($products);
            
        // }
        // if ($request->promo ==True){
            // $products= Product::where('promotion' , '>' , 0)->get();
            // $count = count($products);
        // }
        // $products= Product::whereBetween('price' , [(float)$request->min , (float)$request->max])->get();
        return response()->json(
            $products
       );
     }

    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function show(ProductCategory $productCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductCategory $productCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductCategory $productCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductCategory $productCategory)
    {
        //
    }
}
