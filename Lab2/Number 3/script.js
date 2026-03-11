let btn = document.getElementById("sbmtbtn");

btn.addEventListener("click",function(){
    let a = document.getElementById("ma");
    let b = document.getElementById("fe");
    let c = document.getElementById("ot");

    if(!a.checked && !b.checked && !c.checked)
    {
        alert("Please select a gender");
    }
});