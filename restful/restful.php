<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body onload="loadContent()">
    <div id="out">


    </div>
    <script>
        function loadContent() {
            let xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                console.log(this.readyState+", ", this.status);
                if(this.readyState == 4 && this.status == 200){
                    console.log(this.responseText);
                    data = JSON.parse(this.responseText);
                    out = document.getElementById("out");
                    console.log(data.length);
                    text = "";
                    text+="<table border='1'>";
                    for(i=0;i<data.length;i++){
                        text += "<tr>";
                        for(info in data[i]){ 
                           text += "<td>"+data[i][info]+"</td>";
                        }
                        text+="</tr>\n";
                    }   
                    out.innerHTML = text+"</table>";
                }
            }
            xhttp.open("POST", "rest.php", true);
            xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhttp.send();
        }

    </script>
</body>

</html>