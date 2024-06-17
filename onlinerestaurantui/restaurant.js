let add=document.querySelectorAll(".add");
let sub=document.querySelectorAll(".sub");
let price=document.querySelectorAll('#price');
var displayquantity=document.querySelectorAll(".displayQuantity");
var displayprice=document.querySelectorAll(".displayPrice");
let  preidx = null;
// let  count = 1;

let displayaction=document.querySelectorAll(".displayAction");
// displayaction.style.display= "none";

add.forEach(function(plus,idx){
    // console.log(idx);
    // console.log (displayquantity[idx].innerHTML);
    
    plus.addEventListener("click",function(){
        displayaction[idx].style.display= "block";
        var pricenum = Number(price[idx].innerHTML);
        if( idx !== preidx){
            if( displayquantity[idx].innerHTML == ' ' ){
                Qty =1;       
                Pri = Qty * pricenum;
                
            }else{
                
                Qty = Number(displayquantity[idx].innerHTML) + 1; 
                Pri = Qty * pricenum;
                
            }
        }
        else{
            var  Qty =Number(displayquantity[idx].innerHTML) +1;
            var  Pri = Qty * pricenum;
        }
        
        displayquantity[idx].innerHTML = Qty;         
        displayprice[idx].innerHTML = Pri;
        preidx = idx;
        
    });
    
    
});

// Sub button
sub.forEach(function (minus,idx){
    minus.addEventListener("click",function(){
        // var pricenum = Number(price[idx].innerHTML);
        
        if( displayquantity[idx].innerHTML == 1 ){
            displayaction[idx].style.display= "none";
            
        }else{
           if(displayaction[idx].style.display === ""){
            displayquantity[idx].innerHTML == 1
        
           } else{
               
               displayquantity[idx].innerHTML = displayquantity[idx].innerHTML -1;         
            displayprice[idx].innerHTML = displayprice[idx].innerHTML - Number(price[idx].innerHTML);
            
           }
            
        }
        
    });
    
});


let subbtn=document.querySelectorAll('#sub');
var quantitybtn=document.querySelector("#quantity-btn");
var pricbtn=document.querySelector("#price-btn");


let newOrderNumber;
async function generateUniqueOrderNumber() {
    try {
        let usedOrderNumbers = [];
        
        function isOrderNumberUsed(orderNumber) {
            return usedOrderNumbers.includes(orderNumber);
        }
        
        function generateOrderNumber() {
            return (Math.floor(Math.random() * 10000));
        }
        
        do {
            newOrderNumber = generateOrderNumber();
        } while (isOrderNumberUsed(newOrderNumber));
        
        usedOrderNumbers.push(newOrderNumber);
        
    } catch (error) {
        console.error("Error:", error);
    }
}
generateUniqueOrderNumber();


// Passing value to the form

document.addEventListener('DOMContentLoaded',function(){
    const buttons=document.querySelectorAll('#confirmsall');
    const items = document.querySelectorAll("#items");
    
    buttons.forEach(function (button,index){
        button.addEventListener("click",()=>{
            console.log(button);
            
            if( index === 0){
                var numbertosend = Number(displayquantity[index].innerHTML);
                var numbertosend2 = Number(displayprice[index].innerHTML);
                var numbertosend3= newOrderNumber;
                var item = items[index].innerHTML;
                // console.log(item);
            }else if (index === 1){
                var numbertosend2 = Number(displayquantity[index].innerHTML);
                var numbertosend = Number(displayprice[index].innerHTML);
                var numbertosend3= newOrderNumber;
                var item = items[index].innerHTML;

            }else if (index === 2){
                var numbertosend2 = Number(displayquantity[index].innerHTML);
                var numbertosend = Number(displayprice[index].innerHTML);
                var numbertosend3= newOrderNumber;
                var item = items[index].innerHTML;
            
            }
                else if (index === 3){
                    
                    var numbertosend2 = Number(displayquantity[index].innerHTML);
                    var numbertosend = Number(displayprice[index].innerHTML);
                    var numbertosend3= newOrderNumber;
                   var item = items[index].innerHTML;

                }else if (index === 4){
                    
                    var numbertosend2 = Number(displayquantity[index].innerHTML);
                    var numbertosend = Number(displayprice[index].innerHTML);
                    var numbertosend3= newOrderNumber;
                    var item = items[index].innerHTML;
                }else if (index === 5){
                    
                    var numbertosend2 = Number(displayquantity[index].innerHTML);
                    var numbertosend = Number(displayprice[index].innerHTML);
                    var numbertosend3= newOrderNumber;
                    var item = items[index].innerHTML;
                }
                
                
                
                
                
                
                window.location.href='http://localhost/imagephp/onlinerestaurant/formrecord/form.php?number=' + encodeURIComponent(numbertosend2) + '&number2='+
                
                 encodeURIComponent(numbertosend) +'&number3=' + encodeURIComponent( numbertosend3) + '&item=' + encodeURIComponent(item) ;
                
            })
        })
        
    })
    


    // Client gmail
   var clientFullname = document.querySelector("#clientFullname");
   clientFullname.style.display = "none";
   var accountInfo = document.querySelector("#accountInfo")
   console.log(clientFullname.innerHTML);

    if(!clientFullname.innerHTML == ""){
        accountInfo.innerHTML = clientFullname.innerHTML;
    };
   var displayAccountInfo = document.querySelector(".displayAccountInfo");
   displayAccountInfo.style.display = "none";
    accountInfo.addEventListener("click",function (){
        displayAccountInfo.style.display == "none"? displayAccountInfo.style.display = "block" :displayAccountInfo.style.display = "none"; 
    });

// lastLogin
var lastLogin = document.querySelector("#lastLogin");
 lastLogin.innerHTML = new Date().toLocaleString();


// Logout Work
 letuserLogoutBtn = document.querySelector("#userLogoutBtn");
 userLogoutBtn.addEventListener("click",function(){
    window.location.href='./logout.php';
    // console.log("Logout Button Clicked");
});


    
    //offer
    let offerdetails = document.querySelector('.offerDetailsContainer');
    let addbtn = document.querySelector('.addBtn');
    let su = document.querySelector('.subBtn');
    let wholeBody=document.querySelector('.allbody');
    let offerbutton= document.querySelector(".buynow");
    offerbutton.addEventListener("click",()=>{
        //  wholeBody.classList.add("hideBody");
        
        window.location.href = "http://localhost/imagephp/onlinerestaurant/offer/offer.html"
        //  offerdetails.style.display = "block";
        
        //  addbtn.style.display = "block";
        //  su.style.display = "block";
        
        // console.log(wholeBody);
        
    }); 
var copyright = document.querySelector('.copyRight');
copyright.style.display='flex';
copyright.style.marginTop='15px';
copyright.style.justifyContent='center';
