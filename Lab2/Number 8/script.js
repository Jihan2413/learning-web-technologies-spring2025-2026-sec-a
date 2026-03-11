let submitBtn = document.getElementById("submitbtn");

submitBtn.addEventListener("click", function() {
 


    let field = document.getElementById("name").value.trim();
    let words = field.split(" ");
    let regex = /^[A-Za-z][A-Za-z.-]*\s[A-Za-z][A-Za-z.-]*$/;

    if(field === "" || field === null){
        alert("Please enter your name");
        return;
    }


    else if(words.length !== 2 || words[0] === "" || words[1] === ""){
        alert("Please enter your full name (2 words only)");
        return;
    }
    
    else if(!regex.test(field)){
        alert("Enter a valid full name (2 words, start with letter, letters/dot/dash only)");
        return;
    }


    let emailField = document.getElementById("email").value.trim();
    if(emailField === ""){
        alert("Please Enter your Email");
        return;
    }



    let male = document.getElementById("male");
    let female = document.getElementById("female");
    let other = document.getElementById("other");

    if(!male.checked && !female.checked && !other.checked){
        alert("Please select a gender");
        return;
    }

    let day = document.getElementById("day").value.trim();
    let month = document.getElementById("month").value.trim();
    let year = document.getElementById("year").value.trim();

    if(day === "" || month === "" || year === ""){
        alert("Please enter your DOB");
        return;
    }

    day = Number(day);
    month = Number(month);
    year = Number(year);

    if(day > 31 || month > 12 || year < 1900 || year > 2016){
        alert("Please maintain the syntax");
        return;
    }

    let ssc = document.getElementById("ssc");
    let hsc = document.getElementById("hsc");
    let bsc = document.getElementById("bsc");
    let msc = document.getElementById("msc");

    if(!ssc.checked && !hsc.checked && !bsc.checked && !msc.checked){
        alert("Please Select your Degree");
        return;
    }

    let blood = document.getElementById("blood").value;
    if(blood === ""){
        alert("Please Select Your Blood Group");
        return;
    }

    let pic = document.getElementById("pic").files;
    if(pic.length === 0){
        alert("Please upload a picture");
        return;
    }


});