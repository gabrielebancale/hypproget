//file JS
    
function showContent(str) {
	"use strict";
    if (str.length === 0) {
        document.getElementById("content").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
                document.getElementById("content").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET", "chiamateDB.php?q=" + str, true);
        xmlhttp.send();
    }
}

