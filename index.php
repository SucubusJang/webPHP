<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        $jsonfile = file_get_contents("movies.json");
    ?>

    <button onclick="load_data()">Load Data</button>
    year : <br>
    <select id="sel_year"></select><br>
    movie Title : <br>
    <select id="Movie_Title"></select><br>
    <div id="out"></div>

    <script>
        let jsonEx;
        jsonEx = load_data();
        function load_data() {
            jsonEx = <?= file_get_contents("movies.json") ?>;
            doc = document.getElementById("Movie_Title");
            var option = document.createElement("option");
            option.text = "N/A";
            doc.add(option);
            console.log(jsonEx);
            for(i = 0 ; i< jsonEx.length ;i++){
                opttion.text = movie_info["title"];
                doc.add(option);
            }
            //alert("Load Json Compleated");
            return jsonEx;
        }
    </script>

</body>

</html>