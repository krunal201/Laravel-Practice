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

    <script>
        function loadDoc() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("demo").innerHTML = this.responseText;
                }
            };
            var path = '../resources/views/n.txt';
            xhttp.open("GET", path, true);
            xhttp.send();
        }
    </script>
</body>

</html>