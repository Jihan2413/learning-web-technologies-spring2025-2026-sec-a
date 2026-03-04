let btn = document.getElementById("sbmtbtn");

btn.addEventListener("click",function(){

let field = document.getElementById("emfield").value;

if(field==="")
{
    alert("Please Enter your Email");
}

});