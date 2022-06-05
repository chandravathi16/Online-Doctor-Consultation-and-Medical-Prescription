function validate() {
    var reg1 = /^[6-9]\d{9}$/;
    var emailid = document.serviceform.emailid.value;
    var problem = document.serviceform.problem.value;
    var mobileno = document.serviceform.mobileno.value;
    var x=0;
    if (emailid == "" && problem == "" && mobileno == "") {
        alert("Please fill the details");
        x = 1;
    } else if (emailid == null || emailid == "") {
        alert("Please enter email");
        x = 1;
    } else if (problem == null || problem == ""){
        alert("Describe your health problem");
        x=1;
    } 
    /*
    else if (problem.length>=3 || problem.length<=200){
        alert("Describe your health problem minimum of 200 characters or more");
        x=1;
    }
    */
    else if (mobileno == null || mobileno == "") {
        alert("please enter mobile number");
        return false;
    } else if(!reg1.test(mobileno) || mobileno.length>10 || mobileno.length<10){
        alert("Mobile number starts with either 6/7/8/9 and must be 10 digits only");
        x=1;
    } 
    /*
    else if(mobileno.value.length<10 || mobileno.value.length>10){
        alert("Mobile number should be 10 digits only");
        x=1;
    }
    */
    if (x == 1) return false;
    else {
        alert("Submitted successfully!");
        return true; 
    }
}