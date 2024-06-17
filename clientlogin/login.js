var erorUser = document.getElementById("erorUser");
erorUser.style.display ="none";
var urlParams= new URLSearchParams(window.location.search)
var receivedMessage=urlParams.get('message');
erorUser.value = receivedMessage;
if(erorUser.value != ""){
erorUser.style.display ="block";
setTimeout(function(){
erorUser.style.display ="none";

},5000)

}



document.querySelector(".create").addEventListener("click",function(){
    document.querySelector(".signuptab").style.display = "block";
    document.querySelector("#blur").style.filter ="blur(30px)";
    document.querySelector("#blur").style.pointerEvents ="none";
})
document.querySelector("#closeTab").addEventListener("click",function(){
window.location.reload();
});

var error = 0;
var fullName =  document.querySelector("#fullname");
var userName =  document.querySelector("#userName");
var passWord =  document.querySelector("#password");
var genderButton =  document.querySelectorAll(".genderButton");

var userpattern=/^[A-Z][a-z]+(?:\s[A-Za-z]+)+$/
fullName.addEventListener("blur",function(e){
    if(fullName.value === "" ){
        document.getElementById("fname").innerHTML="Name is Required! <br>";
           error++;
    }else if(fullName.value.length > 20)
        {
            document.getElementById("fname").innerHTML="Can't accept more than 20 character <br>";
            error++;
        }else if(!userpattern.test(fullName.value)){
        document.getElementById("fname").innerHTML="Numbers,Symbol are Prohibited!<br>";
        error++;
    }else{
        document.getElementById("fname").innerHTML="";
        error = 0;
    }
})

// Email-Validation
var mailformat=/^([a-z0-9]){8,}@([A-Za-z-]+).([A-Za-z]){2,4}$/;
userName.addEventListener("blur",function(e){
if(userName.value == "")
{
    document.getElementById("uname").innerHTML="Email is Required! <br>";
    error++;
}
// else if(userName.value.length  < 15)
//     {
//         document.getElementById("uname").innerHTML="Can't accept more than 8 character <br>";
//         error++;
//     }

else  if(!mailformat.test(userName.value))
    {
        document.getElementById("uname").innerHTML="Please! Enter valid email<br>";
        error++;
    }
    else{
        document.getElementById("uname").innerHTML="";
       error = 0;
    }
});

// Password Validation
var passw = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;
passWord.addEventListener("blur",function(e){
if(passWord.value == "")
{
    document.getElementById("pname").innerHTML="Password is Required! <br>";
    error++;
}else if(passWord.value.length < 8){
    document.getElementById("pname").innerHTML="Required! Atleast eight Character <br>";
    error++;
}
else if(!passw.test(passWord.value))
    {
        document.getElementById("pname").innerHTML="Required! Uppercase & Alphanumeric with Symbol <br>";
        error++;
    }
    else
    {
        document.getElementById("pname").innerHTML="";
        error = 0;
    }
})


// gender Button
othersInside = document.querySelector(".othersInside");
selectedGender = document.getElementById("selectedGender");
genderButton.forEach(function(val,idx){
    
    val.addEventListener("click",function(){
        selectedGender.value = genderButton[idx].value;
        console.log("Clicked");
        if(idx === 0){
            genderButton[0].style.color ="white";
            genderButton[0].style.backgroundColor ="rgb(100, 100, 206)";
            genderButton[1].style.color ="";
            genderButton[1].style.backgroundColor ="";
            genderButton[2].style.color ="";
            genderButton[2].style.backgroundColor ="";
            othersInside.style.display="none";
        }else if(idx === 1){
            genderButton[0].style.color ="";
            genderButton[0].style.backgroundColor ="";
            genderButton[1].style.color ="white";
            genderButton[1].style.backgroundColor ="rgb(100, 100, 206)";
            genderButton[2].style.color ="";
            genderButton[2].style.backgroundColor ="";
             othersInside.style.display="none";
        }else{
            genderButton[0].style.color ="";
            genderButton[0].style.backgroundColor ="";
            genderButton[1].style.color ="";
            genderButton[1].style.backgroundColor ="";
            genderButton[2].style.color ="white";
            genderButton[2].style.backgroundColor ="rgb(100, 100, 206)";
            othersInside.style.display="block"
        }
    })

})

// checked Button
var checkButton = document.getElementById("check");



var submitBtn = document.getElementById("submitBtn");
submitBtn.addEventListener("click",function(e){
    if(fullName.value != "" && userName.value != "" && passWord.value != "" && selectedGender.value!= "" &&
    checkButton.checked == true && error === 0){
        window.location.href = "http://localhost/imagephp/clientlogin/login.php"
    //  console.log("sumit_clicked");
    }else{
        e.preventDefault();
    
    }

})
