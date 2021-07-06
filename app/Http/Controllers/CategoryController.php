<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Session\Session;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('admin.post.category.index') ;
    }

    public function showAll()
    {
        $data = json_encode(Category::latest()->get());
        return $data;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
       
       
     }


     /**
      * Add category 
      */
      public function addCategory()
      {
        $name = $_POST['name'];
        
       


        // $this -> validate($name, [
        //     'name'  => "unique:categories"
        // ]);

       Category::create([
           'name' => $name,
           'slug' => Str::slug($name),
       ]);

 
      }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $this->validate($request, [
            'name'  => 'unique:categories'
        ]);

       
      
            Category::create([
                'name'     =>  $request -> name,
                'slug'     =>  Str::slug($request -> name)
            ]);
         
         
         
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return $id;
    }

    /**
     * Delete category
     */
    public function delete()
    {

        $id = $_GET['id'];
        $delete = Category::find($id);
        $delete -> delete();
    }

    /**
     * Category Edit
     */
    public function categoryEdit()
    {
        $id = $_GET['id'];
   
        return Category::find($id);
    }

    /**
     * Update category
     */
    public function categoryUpdate()
    {
       
        $name = $_POST['name'];

        $category = Category::find($_POST['id']);
        $category -> name = $name;
        $category -> UPDATE();

    }

    /**
     * Category status functions
     */
    public function categoryStatus()
    {
        $category = Category::find($_POST['id']);
        if($category->status){
            $category -> status = 0;
            $category -> update();
            return 0;
        }else {
            $category -> status = 1;
            $category -> update();
            return 1;
        }

    }

    /**
     * Check category
     */
    public function categoryCheck(Request $request)
    {
         $key = $_POST['key'];

     
        $cats  = Category::where('name', $key )->get();
        return json_encode($cats);

        // foreach($cats as $cat){
        //     $name = $cat -> name;
        // }

        // if($name){
        //     return 1;
        // }else{
        //     return 0;
        // }
    }


}
