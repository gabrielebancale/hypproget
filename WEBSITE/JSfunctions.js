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
		
		
		
        xmlhttp.open("GET", "http://hypprojectbancalecassani.altervista.org/WEBSITE/devices.php?cat=" + request[0] + "&id=" + request[1], true);
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
		
		
		
        xmlhttp.open("GET", "http://hypprojectbancalecassani.altervista.org/WEBSITE/smartlife.php?cat=" + request[0] + "&id=" + request[1], true);
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
        xmlhttp.open("GET", "http://hypprojectbancalecassani.altervista.org/WEBSITE/promotions.php?promo=default", true);
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
        xmlhttp.open("GET", "http://hypprojectbancalecassani.altervista.org/WEBSITE/highlights.php?highlights=default", true);
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
		
		
		
        xmlhttp.open("GET", "http://hypprojectbancalecassani.altervista.org/WEBSITE/availableSL.php?cat=" + request[0] + "&id=" + request[1], true);
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
		
		
		
        xmlhttp.open("GET", "http://hypprojectbancalecassani.altervista.org/WEBSITE/assistance.php?cat=" + request[0] + "&id=" + request[1], true);
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
		
		
		
        xmlhttp.open("GET", "http://hypprojectbancalecassani.altervista.org/WEBSITE/FAQ.php?cat=" + request[0] + "&id=" + request[1], true);
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
		
		
		
        xmlhttp.open("GET", "http://hypprojectbancalecassani.altervista.org/WEBSITE/activationRules.php?cat=" + request[0] + "&id=" + request[1], true);
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
		
		
		
        xmlhttp.open("GET", "http://hypprojectbancalecassani.altervista.org/WEBSITE/needed_devices.php?cat=" + request[0] + "&id=" + request[1], true);
        xmlhttp.send();
    }
}