<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax Practice</title>
</head>

<body>
    <!-- Smile, breathe, and go slowly. - Thich Nhat Hanh -->
    <div>
        <h1>XMLHttpRequest</h1>
        <button onclick="loadDoc()">Click</button>
        <p id="demo"></p>
    </div>

    <div>
        <h1>Fetch data from XML file.</h1>
        <button onclick="loadXMLDoc()">XML Load</button>
        <ul id="list">

        </ul>
    </div>

    <div>
        <h1>Ajax with PHP</h1>
        <button onclick="loadPHP()">Load PHP</button>
        <p id="resp"></p>
    </div>
    <script>
        //Load a normal text file
        function loadDoc() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("demo").innerHTML = this.responseText;
                }
            };
            var path = '../resources/views/n.txt';
            // xhttp.open("GET", path, true);
            xhttp.open("POST", path, true);
            xhttp.send();
            console.log(this.responseText);
        }

        //Load an xml file
        function loadXMLDoc() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    var xmlContent = this.responseXML;
                    var books = xmlDoc.getElementsByTagName("book");
                    document.getElementById("list").innerHTML = "";
                    for (var i = 0; i < books.length; i++) {
                        var title = books[i].getElementsByTagName("title")[0].childNodes[0].nodeValue;
                        var author = books[i].getElementsByTagName("author")[0].childNodes[0].nodeValue;

                        var li = document.createElement("li");
                        li.innerHTML = "Title" + title + "Author" + author;

                        document.getElementById("list").appendChild(li);
                    }
                }
            };
            xhttp.open("GET", "../resources/views/test.xml", true);
            xhttp.send();
            console.log(this.responseXML);  
        }

        function loadPHP(){
            var xhttp=new XMLHttpRequest();
            xhttp.onreadystatechange=function(){
                if(this.readyState==4 && this.status==200){
                    document.getElementById("resp").innerHTML=this.responseText;
                }
            };
            xhttp.open("get","resources/views/mess.php",true);
            xhttp.send();
        }
    </script>
</body>

</html>