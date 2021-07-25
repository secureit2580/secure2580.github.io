function check() {
    var x = document.getElementById("Passwd");
    if (x.type === "password") {
        x.type = "text"
    }
    else {
        x.type = "password"
    }
}