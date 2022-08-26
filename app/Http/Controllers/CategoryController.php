<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Foreach_;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function get_subcategories($id){
        $categories= Category::find($id)->allChildren();

       foreach ($categories as $category) {
            $category->setAttribute("count" , $category->products->count());
            
       }
        return response()->json(
           $categories
        );
    }
    public function get_subcategories_position0($id){
        $categories=Category::where('position' , 1)->where('parent_id' , $id )->get();
        foreach ($categories as $category) {
            $category->setAttribute("children" , $category->allChildren());
       }
    //    dd($categories);
        return response()->json(
            $categories
        );
    }

    

    public function index()
    {
        $Allcategories=Category::all();
        $categories=Category::where('position' , 0)->get();
       
        return response()->json([
                'Allcategories' => $Allcategories ,
                'Parentcategories' => $categories,
            ]);
     
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
        if ($request->parent_id==0){
            $position = 0;
        }
        else{
            $position = Category::find($request->parent_id)->position + 1;
        }
        $category = Category::create(
            [
                "name"=> $request->name,
                "slug"=> $request->slug,
                "description"=> $request->description,
                "icon"=> $request->icon,
                "parent_id"=> $request->parent_id,
                "position"=> $position
                    
                ]
        );
        return response()->json($category);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        if ($request->parent_id==0){
            $position = 0;
        }
        else{
            $position = Category::find($request->parent_id)->position + 1;
        }
       Category::whereId($id)->update(
            [
                "name"=> $request->name,
                "slug"=> $request->slug,
                "description"=> $request->description,
                "icon"=> $request->icon,
                "parent_id"=> $request->parent_id,
                "position"=> $position
                    
                ]
        );
        return response()->json("category updated");

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */


    public function destroy($id)
    {
        Category::findOrFail($id)->delete();
        return response()->json('category deleted!');
    }
   
}
