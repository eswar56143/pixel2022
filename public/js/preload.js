document.onreadystatechange = function() {
    if (document.readyState !== "complete") {
        document.getElementById("body").style.visibility = "hidden";
        document.getElementById("bitcoin").style.display = "block";
    } else {
        document.getElementById("bitcoin").style.display = "none";
        document.getElementById("body").style.visibility = "visible";
    }
};