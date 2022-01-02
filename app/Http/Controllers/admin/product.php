<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\product as ModelsProduct;
use Illuminate\Http\Request;
use App\Http\Requests\product_request;
class product extends Controller
{

    public function show_product(){

        return view("admin.product.show_product");
    }

    public function add_product(){

        return view("admin.product.add_product");
    }
    public function save_product(product_request $request){

        try{
            $img2=save_img($request->photo,public_path("img/upload/product/"));

            ModelsProduct::create([

                "title"=>$request->title,
                "content"=>$request->content,
                "department_id"=>$request->department,
                "photo"=>$img2,
                "price"=>$request->price,
                "numbers"=>$request->numbers,
                "start_at"=>$request->start_at,
                "end_at"=>$request->end_at,
                "price_offer"=>$request->price_offer,
                "start_offer_at"=>$request->start_offer_at,
                "end_offer_at"=>$request->end_offer_at,
                "status"=>$request->status,
                "size_id"=>$request->size_id,
                "size"=>$request->size,
                "weight"=>$request->weight,
                "color_id"=>$request->color_id,
                "factory_id"=>$request->factory_id



            ]);

            return redirect()->route("show_product")->with(["success"=>"the product was Created"]);

        }catch(\Exception $ex){

            return redirect()->route("show_product")->with(["error"=>$ex]);

        }


    }
    public function delete_product($id){

        try{

            $product=ModelsProduct::find($id);
            $product->delete();
            return redirect()->back()->with(["success"=>"the product was Deleted"]);
        }catch(\Exception){

            return redirect()->back()->with(["error"=>"we Have An error"]);

        }


    }


    public function edit_product($id){

        $product=ModelsProduct::find($id);
       
        return view("admin.product.edit",compact("product"));

}


public function save_product1(Request $request){

    try{
        $product1=ModelsProduct::find($request->id);
        
        if(!isset($request->photo)){
            $img1=$product1->photo;
        }else{
            $img1=save_img($request->photo,public_path("img/upload/product/"));
            unlink(public_path("img/upload/product/".$product1->photo));
        }

        $product1->update([
    
            "title"=>$request->title,
                "content"=>$request->content,
                "department_id"=>$request->department,
                "photo"=>$img1,
                "price"=>$request->price,
                "numbers"=>$request->numbers,
                "start_at"=>$request->start_at,
                "end_at"=>$request->end_at,
                "price_offer"=>$request->price_offer,
                "start_offer_at"=>$request->start_offer_at,
                "end_offer_at"=>$request->end_offer_at,
                "status"=>$request->status,
                "size_id"=>$request->size_id,
                "size"=>$request->size,
                "weight"=>$request->weight,
                "color_id"=>$request->color_id,
                "factory_id"=>$request->factory_id

        ]);
        return redirect()->route("show_product")->with(["success"=>"the Product was Updated"]);
    }catch(\Exception $ex){

        return redirect()->route("show_product")->with(["error"=>"$ex"]);

    }

}


public function show_department_product($id){

    $product12=ModelsProduct::where("department_id",$id)->get();

    return view("admin.product.show_department_product",compact("product12"));

}





}
