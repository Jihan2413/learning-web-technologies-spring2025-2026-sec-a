let btn = document.getElementById("btn");

btn.addEventListener("click", function(){

    let d = document.getElementById("day").value;
    let m = document.getElementById("month").value;
    let y = document.getElementById("year").value;

    if(d==="" || m==="" || y==="")
    {
        alert("Please enter your dob");
    }

    let day = Number(d);
    let month = Number(m);
    let year = Number(y);

    if(day>31 || month>12 || year<1900 || year>2016)
    {
        alert("Please maintain the syntax");
    }
});