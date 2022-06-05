function validate() {
    var InputDoctorId = document.adminform.InputDoctorId.value;
    var InputDoctorName = document.adminform.InputDoctorName.value;
    var reg1 = /[a-zA-Z]+[a-zA-Z]/;
    var reg2 = /^[6-9]\d{9}$/;
    var DoctorQualification = document.adminform.DoctorQualification.value;
    var DoctorMobilenumber = document.adminform.DoctorMobilenumber.value;
    var InputEmail1 = document.adminform.InputEmail1.value;
    var x = 0;
    if(InputDoctorId=="" && InputDoctorName=="" && DoctorQualification=="" && DoctorQualification==""){
        alert("Please fill the details");
        x=1;
    } else if (InputDoctorId == null || InputDoctorId == "") {
        alert("Please fill the doctor ID");
        x = 1;
    } else if (isNaN(InputDoctorId)) {
        alert("Doctor ID sholud not contains aplhabets & contains only numbers");
        x = 1;
    } else if (InputDoctorName == null || InputDoctorName == "") {
        alert("Please fill the name");
        x = 1;
    } else if (!reg1.test(InputDoctorName)) {
        alert("Name should contain only alphabets");
        x = 1;
    } else if (DoctorQualification == null || DoctorQualification == "") {
        alert("Please fill doctor qualification");
        x = 1;
    } else if (DoctorMobilenumber == null || DoctorMobilenumber == "") {
        alert("Please fill mobile number");
        x = 1;
    } else if(!reg2.test(mobileno)){
        alert("Mobile number starts with either 6/7/8/9");
        x=1;
    } else if (InputEmail1 == null || InputEmail1 == "") {
        alert("Please enter email");
        x = 1;
    }
    if (x == 1) return false;
    else {
        alert("Doctor added successfully!");
        return true;
    }
}