function validateForm(){

 var addElem = new Array();
 var x=document.getElementById("forms");
 var boolean = true;
 var count= 0;

 //var para= document.createElement("p");

 for(var i = 0; i < x.length; i++){

   if(x.elements[i].value.length == 0){
    addElem[count]=x.elements[i].name;
    count++;
     x.elements[i].style.backgroundColor='red';
   }else{
     boolean = true;
   }
   boolean = false;
 }

if (boolean == false){

 for(var y = 0; y < addElem.length; y++){
    
   var txt = document.createTextNode(" Please enter " + addElem[y] + "." );
    
    x.parentNode.insertBefore(txt,x);
    
  } 

return false;

}else if (boolean ==true){

return true;
}



}
</script>