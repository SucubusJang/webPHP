<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body onload="loadContent()">
    <div id="out"></div>
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
                    text="";
                    for(i=0;i<data.length;i++){
                        // text += data[i];
                        for(info in data[i]){
                           text += data[i][info]+" ";
                        }
                        text+="\n";
                    }   
                    alert(text);
                }
            }
            xhttp.open("GET", "rest.php", true);
            xhttp.send();
        }
    </script>
</body>

</html>