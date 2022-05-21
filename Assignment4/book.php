<!DOCTYPE html>

<html>

<body>

<h2>List of Book Authors Name</h2>

<button type="button" onclick="booksnames()">

Click Here to List Books Authors Name</button>

<p id="p1"></p>

<script>

function booksnames() {

var obj = new XMLHttpRequest();

obj.open("GET", "books.xml", true);

obj.send();

obj.onreadystatechange = function() {

if (this.readyState == 4 && this.status == 200) {

callxmlfile(this);

}

};

}

function callxmlfile(xml) {

var k,z,xmlcontent, result;

xmlcontent = xml.responseXML;

result = "";

z = xmlcontent.getElementsByTagName("AUTHOR");

for (k = 0; k< z.length; k++) {

result += z[k].childNodes[0].nodeValue + "<br>";

}

document.getElementById("p1").innerHTML = result;

}

</script>

</body>

</html>
