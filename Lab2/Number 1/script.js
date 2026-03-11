let btn = document.getElementById("submitbtn");

btn.addEventListener("click", function(){
    let field = document.getElementById("nmfield").value.trim();
    let words = field.split(" ");
    let regex = /^[A-Za-z][A-Za-z.-]*\s[A-Za-z][A-Za-z.-]*$/;


    if(field===""|| field===null)
    {
        alert("Please enter your name");
        
    }

    else if(words.length !== 2 || words[0] === "" || words[1] === "")
    {
        alert("Please enter your full name (2 words only)");
    }

    else if(!regex.test(field))
    {
        alert("Enter a valid full name (2 words,start with letter, letters/dot/dash only)");
    }

});