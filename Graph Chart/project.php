<?php

    session_start();
    if(isset($_SESSION["numlogin"])) {
        $n1=$_GET["num"];
        $n2=$_SESSION["numlogin"];
        $Dados=$_SESSION["dados"];
        if($n1!=$n2) {
            echo "<p>You do not have access to this page! Incomplete Login.</p>";
            exit;
        }
    } else {
        echo "<p>You do not have access to this page! Incomplete Login.</p>";
        exit;  
    }

    echo "________________________________________DADOS: ".$Dados."<br>";


?>

<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE-edge" />
        <meta name="viewport" content="width=device.width, initial-scale=1.0" />
        <title>Chart Using Html Css Javascript</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>

        <div class="sidenav">
            <a href="#" id="link1">Link</a>
            <a href="#" id="link2">Link</a>
            <a href="#" id="link3">Link</a>
        </div>

        <div class="content">
            <h2 id="h2Tittle">Project Analytics - Your Project Name</h2>
            <p id="tittle">Your Project Tittle Here</p>
        </div>

        <div id="chart"></div>
        <!-- javascript-->
        <script
            src="https://cdn.jsdelivr.net/npm/apexcharts">
        </script>
        <script>

            var info = "<?php echo"$Dados"?>";
            var datavar = [12,0,99,77,89,100,200,300,400,320,12,15];
            var tittle = "titulo"

            document.write(info);

            var options = {
            chart: { height: 500, type: "area", width: 1200,},
            dataLabels: { enable:true },
            series: [{
                name: tittle,
                data: datavar
            }],
            fill: {
                type: "gradient",
                gradient: {
                    shadeIntensity: 4,
                    opacityFrom: 0.7,
                    opacityTo: 0.9,
                    stops: [0, 90, 100],
                },
            },

            xaxis: {
                categories: [
                    "01 Jan",
                    "02 Feb",
                    "03 March",
                    "04 April",
                    "05 May",
                    "06 June",
                    "07 July",
                    "08 Aug",
                    "09 Sept",
                    "10 Oct",
                    "11 Nov",
                    "12 Dec",
                ],
            },
            };

            var chart = new ApexCharts(document.querySelector("#chart"),options);
            chart.render();

        </script>
    </body>

</html>