<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body onload="loadContent()">
    <label>ID:</label>
    <input type="text" name="" id="u_id">
    <label>Name:</label>
    <input type="text" name="" id="u_name">
    <button onclick="add_new()">Click</button><br>
    <div id="out"></div>
    <script>
        function loadContent() {
            let xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                console.log(this.readyState + ", ", this.status);
                if (this.readyState == 4 && this.status == 200) {
                    console.log(this.responseText);
                    data = JSON.parse(this.responseText);
                    create_table(data);

                }
            }
            xhttp.open("GET", "rest.php", true);
            xhttp.send();
            // xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            // xhttp.send("a=12&b=15");
        }

        function add_new() {
            let xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    //   console.log(this.responseText);
                    data = JSON.parse(this.responseText);
                    create_table(data);
                }
            }
            //-------------------------------------------------------------------------------
            xhttp.open("POST", "rest.php", true); // การส่งค่าไปหน้า rest.php
            xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            u_id = document.getElementById("u_id"); // นำค่ามาใส่ให้ตัวแปร u_id
            u_name = document.getElementById("u_name"); // นำค่ามาใส่ให้ตัวแปร u_name
            xhttp.send("u_id=" + u_id.value + "&u_name=" + u_name.value); // ส่งค่า u_id และ u_name โดยถ้าส่งมากกว่า 1 ค่า ให้เชื่อมด้วย &
        }

        function create_table(data) {
            out = document.getElementById("out");
            console.log(data.length);
            text = "";
            text += "<table border='1'>";
            for (i = 0; i < data.length; i++) {
                text += "<tr>";
                for (info in data[i]) {
                    text += "<td>" + data[i][info] + "</td>";
                }
                text += "</tr>\n";
            }
            out.innerHTML = text + "</table>";
        }
    </script>
</body>

</html>