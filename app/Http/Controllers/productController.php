<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\catagory;
use App\product;
use Illuminate\support\Str;
use Image;
use DB;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $catagory=catagory::all();
           
           return view('product.add',compact('catagory'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           if($request->hasFile('p_image')){
        $get_image = $request->file('p_image');
        $image = time().Str::random(10).'.'.$get_image->getClientOriginalExtension();
        Image::make($get_image)->resize(500,300)->save(public_path('image/product/'.$image));
    }

     else{
            $image = "default.png";
        }

        product::insert([
            'p_name'=>$request->p_name,
            'c_id'=>$request->c_id,
            'm_name'=>$request->m_name,
            'p_price'=>$request->p_price,
            's_price'=>$request->s_price,
            'w_price'=>$request->w_price,
            'd_price'=>$request->d_price,
            'p_quan'=>$request->p_quan,
            'p_image'=>'image/product/'.$image,
         
             ]);
        return back();
    }
    public function user(){

         $product=DB::table('catagories')
            ->join('products', 'catagories.id', '=', 'products.c_id')
            ->select('products.*','catagories.c_name')
            ->get();
            
            return view('product.manageuser',compact('product'));

    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

         $product=DB::table('catagories')
            ->join('products', 'catagories.id', '=', 'products.c_id')
            ->select('products.*','catagories.c_name')
            ->get();
            
            return view('product.Manage',compact('product'));
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


        public function delete($id){
             product::findOrFail($id)->delete();
         return back();
        
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
         
    }
}
