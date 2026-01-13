<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Fetch data from XML file.</h1>
        <button onclick="loadXMLDoc()">Click</button>
        <ul id="list">

        </ul>
    </div>
    <script>
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