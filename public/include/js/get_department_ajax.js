let department=document.getElementById("product_department");
let size1=document.getElementById("size1");
if(department!=null){
department.onchange=function(){
document.getElementById("pills-size-tab").classList.remove("disabled")
let request=new XMLHttpRequest();
request.open("get", location.protocol+"//"+location.host+"/department_id?id="+department.value);
request.onreadystatechange=function(){
if(this.status==200&&this.readyState==4){
let div=request.responseText;
console.log(div)
size1.innerHTML=div
}
}
request.send();
}
}