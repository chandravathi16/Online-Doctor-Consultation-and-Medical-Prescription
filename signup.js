function validate() {
    var username = document.signupform.username.value;
    var reg1 = /[a-zA-Z]+[a-zA-Z]/;
    //var reg2 = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
    var reg2 = /^[6-9]\d{9}$/;
    var password = document.signupform.password.value;
    var InputEmail1 = document.signupform.InputEmail1.value;
    var mobileno = document.signupform.mobileno.value;
    var x = 0;
    if(username=="" && password=="" && InputEmail1=="" && mobileno==""){
        alert("Please fill the details");
        x=1;
    } else if (username == null || username == "") {
        alert("Please enter username");
        x = 1;
    } else if (!reg1.test(username)) {
        alert("Name should contain only alphabets");
        x = 1;
    } else if (password == null || password == "") {
        alert("Please enter password");
        x = 1;
    } else if (InputEmail1 == null || InputEmail1 == "") {
        alert("Please enter email");
        x = 1;
    } else if (password.length < 8) {
        alert("Password must be contains atleast 8 characters");
        x = 1;
    } else if (mobileno == null || mobileno == "") {
        alert("please enter mobile number");
        return false;
    } else if(!reg2.test(mobileno)){
        alert("Mobile number starts with either 6/7/8/9");
        x=1;
    } 
    /*
    else if(mobileno.length<10 || mobileno.length>10){
        alert("Mobile number should be 10 digits only");
        x=1;
    }
    */
    if (x == 1) return false;
    else {
        alert("You registered successfully! please login to your account");
        return true;
    }
}