function validate() {
    var date = document.userform.date.value;
    var InputEmail1 = document.userform.InputEmail1.value;
    var password = document.userform.password.value;
    var x = 0;
    if (date == "" && InputEmail1 == "" && password == "") {
        alert("Please fill the details");
        x = 1;
    } else if (date == null || date == "") {
        alert("Please select date to consult the doctor");
        x = 1;
    } else if (InputEmail1 == null || InputEmail1 == "") {
        alert("Please enter email");
        x = 1;
    } else if (password == null || password == "") {
        alert("Plese enter password");
        x = 1;
    } else if (password.length < 8) {
        alert("Password must be contains atleast 8 characters");
        x = 1;
    }
    if (x == 1) return false;
    else {
        alert("You signed in successfully!contact the doctor through service form");
        return true;
    }
}