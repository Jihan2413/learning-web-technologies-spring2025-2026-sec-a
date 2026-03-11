let btn = document.getElementById("btn");
btn.addEventListener("click", function(){
    let uid = document.getElementById("uid").value;
    let pic = document.getElementById("pic").files;


    if(uid<0 || uid==="")
    {
        alert("Please enter a correct id");
    }

    if(pic.length===0)
    {
        alert("Please upload a picture");
    }
});