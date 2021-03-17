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
    <select id="sel_year" onchange="load_title()">
        <option value="">N/A</option>
    </select><br>
    movie Title : <br>
    <select id="Movie_Title">
        <option value="">N/A</option>
    </select><br>
    Movie
    <div id="out"></div>

    <script>
        let jsonEx;

        function load_data() {
            jsonEx = <?= file_get_contents("movies.json") ?>;
            var movie_year = new Set();
            var doc = document.getElementById("sel_year");
            for (i = 0; i < jsonEx.length; i++) {
                console.log(jsonEx);
                movie_year.add(jsonEx[i].year);
            }
            //alert("Total Year "+ movie_year.size);
            const ref_year = movie_year.values();
            for (y = 0; y < movie_year.size; y++) {
                var option = document.createElement("option");
                option.text = ref_year.next().value;
                doc.add(option);
            }
            // doc = document.getElementById("Movie_Title");
            // var option = document.createElement("option");
            // option.text = "N/A";
            // doc.add(option);
            // console.log(jsonEx);
            // for(i = 0 ; i< jsonEx.length ;i++){
            //     var option = document.createElement("option");
            //     option.text = jsonEx[i].title;
            //     doc.add(option);
            // }
            //alert("Load Json Compleated");
            return jsonEx;
        }

        function load_title() {
            var doc = document.getElementById("Movie_Title");
            var y = document.getElementById("sel_year"); // แสดงปีที่เลือก
           // alert(y.value);
            doc.innerHTML = " ";
            for (i = 0; i < jsonEx.length; i++) {
                if (jsonEx[i].year == y.value) {
                    var option = document.createElement("option");
                    option.text = jsonEx[i].title;
                    doc.add(option);
                }
            }
        }
    </script>

</body>

</html>