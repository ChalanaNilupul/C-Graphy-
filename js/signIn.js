function valid() {
    var user = document.getElementById("txtmail").value;
    var pass = document.getElementById("txtPassword").value;

   
    if ((user == "") || (user == null)) {
        document.getElementById("alert1").innerHTML = "Empty";

    }

    if ((pass == "") || (pass == null)) {
        document.getElementById("alert2").innerHTML = "Empty";

    }
    Event.preventDefault();
}

