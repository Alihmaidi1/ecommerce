<?php

use App\Models\category;

function save_img($img,$path){
$name_img=time().".".$img->getClientOriginalExtension();
$img->move($path,$name_img);
return $name_img;


}

function treejson(){
$arr1=[];
$arr2=[];

foreach(category::get() as $department){

    $arr2['id']=$department->id;
    $arr2["text"]=$department->name;
    $arr2['parent']=$department->parent==0?"#":$department->parent;
    array_push($arr1,$arr2);
}
return json_encode($arr1);

}

