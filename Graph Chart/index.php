<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE-edge" />
        <meta name="viewport" content="width=device.width, initial-scale=1.0" />
        <title>Chart Using Html Css Javascript</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>

        <label for="theme" class="theme">
            <span>Light</span>
            <span class="theme__togle-wrap">
                <input id="theme" class="theme__toggle" type="checkbox" role="switch" name="theme" value="dark">
                <span class="theme__fill"></span>
                <span class="theme__icon">
                <span class="theme__icon-part"></span>
                <span class="theme__icon-part"></span>
                <span class="theme__icon-part"></span>
                <span class="theme__icon-part"></span>
                <span class="theme__icon-part"></span>
                <span class="theme__icon-part"></span>
                <span class="theme__icon-part"></span>
                <span class="theme__icon-part"></span>
                <span class="theme__icon-part"></span>
            </span>
            </span>
            <span>Dark</span>
        </label>

        <div id="chart"></div>
        <!-- javascript-->
        <script
            src="https://cdn.jsdelivr.net/npm/apexcharts">
        </script>
        <script src="app.js"></script>
    </body>

</html>