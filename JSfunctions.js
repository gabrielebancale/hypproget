//file JS
    
function showDevices(str) {
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
		
		var request = str.split("/");
		
		
		
        xmlhttp.open("GET", "devices.php?cat=" + request[0] + "&id=" + request[1], true);
        xmlhttp.send();
    }
}

function showSmartlife(str) {
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
		
		var request = str.split("/");
		
		
		
        xmlhttp.open("GET", "smartlife.php?cat=" + request[0] + "&id=" + request[1], true);
        xmlhttp.send();
    }
}

function showPromo() {
	"use strict";

        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
                document.getElementById("content").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET", "promotions.php?promo=default", true);
        xmlhttp.send();
		
    
}

function showHighlights() {
	"use strict";

        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
                document.getElementById("content").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET", "highlights.php?highlights=default", true);
        xmlhttp.send();
		
    
}

function showAvailableSL(str) {
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
		
		var request = str.split("/");
		
		
		
        xmlhttp.open("GET", "availableSL.php?cat=" + request[0] + "&id=" + request[1], true);
        xmlhttp.send();
    }
}
function showAssistanceService(str) {
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
		
		var request = str.split("/");
		
		
		
        xmlhttp.open("GET", "assistance.php?cat=" + request[0] + "&id=" + request[1], true);
        xmlhttp.send();
    }
}	
	
function showFAQ(str) {
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
		
		var request = str.split("/");
		
		
		
        xmlhttp.open("GET", "FAQ.php?cat=" + request[0] + "&id=" + request[1], true);
        xmlhttp.send();
    }
}

function showActivationRules(str) {
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
		
		var request = str.split("/");
		
		
		
        xmlhttp.open("GET", "activationRules.php?cat=" + request[0] + "&id=" + request[1], true);
        xmlhttp.send();
    }
}

function showNeededDevices(str) {
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
		
		var request = str.split("/");
		
		
		
        xmlhttp.open("GET", "needed_devices.php?cat=" + request[0] + "&id=" + request[1], true);
        xmlhttp.send();
    }
}