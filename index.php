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
    <select id=""></select><br>
    movie Title : <br>
    <select id=""></select><br>
    <div id="out"></div>
    <script>
        jsonEc = load_data();

        function load_data() {
            var jsonEx = <?= $jsonfile ?>;
            alert("Load Json Compleated");
            return jSonEx;
        }
    </script>

</body>

</html>