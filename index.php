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
    <button onclick="load_data()">Load Data</button><br>
    year : <br>
    <select id="sel_year" onchange="load_title()">
        <option value="">N/A</option>
    </select><br>
    movie Title : <br>
    <select id="Movie_Title" onchange="load_movie_content()">
        <option value="">N/A</option>
    </select><br>
    <div id="out"></div>
    <script>
        let jsonEx;
        let txt = "";

        function load_data() {
            jsonEx = <?= file_get_contents("movies.json") ?>;
            console.log(jsonEx);
            var movie_year = new Set();
            var doc = document.getElementById("sel_year");
            for (i = 0; i < jsonEx.length; i++) {
                movie_year.add(jsonEx[i].year);
            }
            //alert("Total Year "+ movie_year.size);
            const ref_year = movie_year.values();
            for (y = 0; y < movie_year.size; y++) {
                var option = document.createElement("option");
                option.text = ref_year.next().value;
                doc.add(option);
            }
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
                    option.text = jsonEx[i].year + ":" + jsonEx[i].title;
                    doc.add(option);
                }
            }
        }

        function load_movie_content() {
            var doc = document.getElementById("out");
            var str = document.getElementById("Movie_Title").value;
            var year = str.substring(0, 4);
            var movie = str.substring(5);
            var input1 = document.createElement("input");
            var input2 = document.createElement("input");
            var area = document.createElement("textarea");
            //  doc.innerHTML = "<input type='text' name='' id='' value=$year>";
            input1.value = year;
            input2.value = movie;
            txt += movie;
            txt += "\n";
            area.value = txt;
            // alert(area.value);
            doc.appendChild(input1);
            doc.appendChild(input2);
            doc.appendChild(area);
            // var txt = document.createElement("input");
            // txt.value = movie.value;
            // doc.appendCild(txt);
            //document.getElementById("name").value = movie;
            // vdocument.getElementById("year");
            // name.value = n.value;
            // year.value = y.value; 
            // var doc = document.getElementById("out");
            // var txt = document.createElement("input");
            // var year = document.getElementById("sel_year");
            // var name = document.getElementById("Movie_Title");
            // txt.innerHTML = " ";
            // txt.value = name.value;
            // doc.appendChild(txt);
            // var txt = document.createElement("TextArea");
            // txt.value += name.value;
            // doc.appendChild(txt);

        }
    </script>

</body>

</html>