let btn = document.getElementById("btn");
btn.addEventListener("click", function(){
    let ssc = document.getElementById("ssc");
    let hsc = document.getElementById("hsc");
    let bsc = document.getElementById("bsc");

    if(!ssc.checked && !hsc.checked && !bsc.checked)
    {
        alert("Please Select your Degree");
    }
});