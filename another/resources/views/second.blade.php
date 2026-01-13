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
        <button onclick="loadXMLDoc()">Click</button>
        <ul id="list">

        </ul>
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
            xhttp.open("POST",path,true);
            xhttp.send();
        }

        //Load an xml file
        function loadXMLDoc(){
            var xhttp=new XMLHttpRequest();
            xhttp.onreadystatechange=funtion(){
                if(this.readyState==4 && this.status==200){
                    var xmlContent=this.responseXML;
                    var books=xmlDoc.getElementByTagName("book");
                    document.getElementById("list").innerHTML="";

                    var li=document.createElement("li");
                    li.innerHTML="Title"+title+"Author"+author;

                    document.getElementById("list").appendChild(li);
                }
            };
        }
    </script>
</body>

</html>