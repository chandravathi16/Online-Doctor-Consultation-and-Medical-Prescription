function validate() {
    var reg1 = /^[6-9]\d{9}$/;
    var emailid = document.prescription.emailid.value;
    var mobileno = document.prescription.mobileno.value;
    var image = document.prescription.image.value;
    var x=0;
    if (emailid == "" && image == "" && mobileno == "") {
        alert("Please fill the details");
        x = 1;
    } else if (emailid == null || emailid == "") {
        alert("Please enter email");
        x = 1;
    } else if (mobileno == null || mobileno == "") {
        alert("please enter mobile number");
        return false;
    } else if (image == null || image == "") {
        alert("please provide prescription");
        return false;
    } else if(!reg1.test(mobileno) || mobileno.length>10 || mobileno.length<10){
        alert("Mobile number starts with either 6/7/8/9 and must be 10 digits only");
        x=1;
    } 
    if (x == 1) return false;
    else {
        alert("Prescription submitted successfully through email!");
        return true;
    }
}