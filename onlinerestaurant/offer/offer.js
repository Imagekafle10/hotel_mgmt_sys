let ordernumber=document.querySelector("#ordernumber");
let addbtn=document.querySelector("#add");
let subbtn=document.querySelector("#sub");
let quantity=document.querySelector("#quantity");
let price=document.querySelector("#price");
let discountamount=document.querySelector("#discountAmount");
let finalprice=document.querySelector("#finalPrice");

addbtn.addEventListener('click',function(){

if(quantity.value  == "" ){
    quantity.value = 1;
    price.value = quantity.value * 300;
}else{
    quantity.value = Number(quantity.value) +1;
    price.value = Number (quantity.value) * 300;

}
   ordernumber.value = Number(newOrderNumber);
discountamount.value = Number(price.value) * (50/100);
finalprice.value = Number(price.value) - Number(discountamount.value); 

});
 
subbtn.addEventListener("click",function(){
if ( quantity.value == "1" ){

}else{
    if(quantity.value == ""){

    }else{
        quantity.value = Number(quantity.value) - 1;
        price.value = Number (price.value) - 300;

    }
}
discountamount.value = Number(price.value) * (50/100);
finalprice.value = Number(price.value) - Number(discountamount.value); 

});


let newOrderNumber;
 async function generateUniqueOrderNumber(){
try{
   let usedOrderNumbers = [];

   function  isOrderNumberUsed(OrderNumber){
   return usedOrderNumbers.includes(OrderNumber) ;
   }

   function  generateOrderNumber() {
    return   (Math.floor(Math.random() * 10000)) ;
   }

   do{
    newOrderNumber = generateOrderNumber();
   }  while(isOrderNumberUsed(newOrderNumber));

   usedOrderNumbers.push(newOrderNumber);



}catch(eror)
{
  console.log("Eror",+eror);
}



}
generateUniqueOrderNumber()