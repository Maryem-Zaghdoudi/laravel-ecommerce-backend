<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Cviebrock\EloquentSluggable\Services\SlugService;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::with('categories')->get();

        return response()->json(
             $products 
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $product = Product::create(
            [
                "title"=> $request->title,
                "slug" => SlugService::createSlug(Product::class, 'slug', $request->title),
                "subTitle"=> $request->subTitle,
                "price"=> $request->price,
                "demoLink"=> $request->demoLink,
                "description"=> $request->description,
                "imageSrc"=> $request->imageSrc,
                "imageAlt"=> $request->imageAlt,
                "promotion"=> $request->promotion,
                
                ]
        );
        $category = Category::find($request->category_id);
        $product->categories()->attach($category);


        return response()->json($product);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product=Product::find($id);
        return response()->json([
            'product' => $product
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Category::whereId($id)->update(
            [
                "title"=> $request->title,
                "slug"=> $request->slug,
                "subTitle"=> $request->subTitle,
                "price"=> $request->price,
                "demoLink"=> $request->demoLink,
                "description"=> $request->description,
                "imageSrc"=> $request->imageSrc,
                "imageAlt"=> $request->imageAlt,
                "promotion"=> $request->promotion
                    
                ]
        );
        return response()->json("product updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::findOrFail($id)->delete();
        return response()->json('product deleted!');
    }

    public function products_by_category($id){
        $category=Category::find($id);
        $products = array();
        $children_categories_ids=$this->Get_category_children($id);
        foreach ($children_categories_ids as $category_id ) {
            $category=Category::find($category_id);
            array_push($products , $category->products);
        }
        return response()->json(
            $products
            // $products[0]
       );
    }

    function Get_category_children($id){
        $category = Category::find($id);
        $category_ids[0]= intval($id);
        $category_ids = array_merge($category_ids , $category->allChildren()->pluck('id')->all());
        
        return ($category_ids);
    }

    public function Search(Request $request){
        // $products=Product::all();
        // $products= Product::where('title' , 'LIKE' , '%'.$request->word .'%')->get();
        $products=array();
        // foreach($request->category as $category){
            $category = Category::find($request->category['id']);          
            $category_ids[0]= intval($category['id']);
            $this_category = array_merge($category_ids , $category->allChildren()->pluck('id')->all());
            $id_categories= array_unique(array_merge($products , $this_category));
         
            foreach ($id_categories as $category_id ) {
                $category=Category::find($category_id);
                array_push($products , $category->products);
            }
            return response()->json(
                $products
           );
        

    }

    /*public function Search(Request $request){
        switch($request->tri){
            case('price_croissant'){

                $products = $products->sortByDesc('price');
                break;
            }
            case('price_decroissant'){

                $product s= $products->sortBy('price');
                break;
            }
            case('promotion'){

                $products= $products->sortByDesc('promotion');
                break;
            }
            case('title_a_z'){

                $products= $products->sortByDesc('title');
                break;
            }
            case('title_z_a'){

                $products= $products->sortByDesc('title');
                break;
            }
        }
    }*/
}
