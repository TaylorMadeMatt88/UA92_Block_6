<html>
    <head>
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <!--Meta Tags - MR-->

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- Bootstrap CSS - MR-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
		<!-- Google Fonts - MR-->
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <!-- Chart.JS Script - MR-->

        <title>See Missions</title>
        
        <style>
            * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            }
            /* Universal reset to eliminate default margin/padding on my web page - MR */ 

            body {
            color: #C0C5CE;
            background-color: #343D46;
            background-repeat: no-repeat;
	        background-attachment: fixed;
	        background-size: cover;
            }
            
            h1 {
            display: block;
	        margin-left: auto;
	        margin-right: auto;
	        margin-bottom: 10px;
            text-align: center;
            font-family: 'Montserrat', sans-serif;
            font-family: 'Montserrat Subrayada', sans-serif;
            }

            h2 {
            display: block;
	        margin-left: auto;
	        margin-right: auto;
	        margin-bottom: 10px;
            text-align: center;
            font-family: 'Montserrat', sans-serif;
            }

            ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #4F5B66;
            }

            li {
            float: left;
            }

            li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            }

            li a:hover:not(.active) {
            background-color: #343D46;
            }

            a, a:hover, a:focus, a:active {
            text-decoration: none;
            color: #C0C5CE;
            }

            .text {
            color: white;
            font-size:2em;   
            }

            p {
            color: #C0C5CE;
            }

            label {
            display: block;
            letter-spacing: 4px;
            padding-top: 30px;
            text-align: center;
            }

            .form-title {
            margin: 20px;
            padding: 20px;
            position: center;
            text-align: center;
            font-family: 'Montserrat', sans-serif;
            }

            .form-layout {
            margin: 20px auto;
            padding: 20px;
            background-color: #4F5B66;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            display: table;
            position: center;
            text-align: center;
            font-family: 'Montserrat', sans-serif;
            color: #C0C5CE;
            }

            input[type="text"], input[type="number"], input[type="date"], select {
	        background-color: #4F5B66;
            color: white;
            font-size:2em;
            }

            button, input[type="submit"] { 
            border:1px solid #343D46; 
            color:#C0C5CE; 
            background: #343D46; 
            padding:0.6em 1em;
            font-family: 'Montserrat', sans-serif;
            font-family: 'Montserrat Subrayada', sans-serif;
            font-size:1em; 
            line-height:1; 
            border-radius: 1.2em;
            transition: color 0.2s ease-in-out, background 0.2s ease-in-out, border-color 0.2s ease-in-out;
            }

            button:hover, button:focus, button:active, input[type="submit"]:hover, input[type="submit"]:focus, input[type="submit"]:active {
            background: #A7ADBA;
            border-color:#A7ADBA;
            font-family: 'Montserrat', sans-serif;
            font-family: 'Montserrat Subrayada', sans-serif;
            color:#343D46;
            cursor: pointer;
            }

            #table {
            margin: 20px auto;
            padding: 20px;
            background-color: #4F5B66;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            display: table;
            position: center;
            text-align: center;
            font-family: 'Montserrat', sans-serif;
            color: #65737E;
            }

            #table td, #table th {
            border: 1px solid white;
            padding: 8px;
            }

            #table th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #65737E;
            color: white;
            }
            /* I opted to use a style tag on the HTML & PHP pages to implement the CSS, reducing the amount of files in the folder - MR */

        </style>

    </head>
    <body>

        <div class="container">
            <div class="row-sm">
                <div class="col">
                    <h1><a href="home.php" style="font-size:6vw;">ESA</a></h1>
                    <h2><a href="home.php" style="font-size:3vw;">European Space Agency</a></h2>
                </div>
            </div>
            <!--Container for the sites logo/header created with text. I chose to make it with h1 tags instead of using a image/png so the quality is maintained regardless of sizing of the page - MR-->

            <ul>
                <li><a href="home.php">Homepage</a></li> 
                <li><a href="add_astronaut.php">Add Astronaut</a></li>
                <li><a href="add_targets.php">Add Targets</a></li>  
                <li><a href="add_missions.php">Add Missions</a></li> 
                <li><a href="see_astronaut.php">See Astronaut</a></li>
                <li><a href="see_targets.php">See Targets</a></li>  
                <li><a href="see_missions.php">See Missions</a></li>
                <li style="float:right"><a href="logout.php">Logout</a></li>
            </ul> 
            <br>
            <!-- The site's navigation bar made using an unordered list - MR-->
            
        

        <?php
            $host = "localhost"; //DB Host Name Here - MR
            $username = "root"; //Username Here - MR     
            $password = ""; //Password Here - MR
            $database_name = "esa"; //Database Name Here - MR

            $link = mysqli_connect($host, $username, $password, $database_name);
            // A hard link grouping together all of the database connection infomation - MR

            if($link === false) {
                    die("Error: Could Not Connect");
            }
            // If a connection isn't made die prints the error message and exits - MR 
        ?>
        
        <table id="table">
            <tr>
                <th width="100px">Mission ID</th>
                <th width="300px">Mission Name</th>
                <th width="300px">Destination</th>
                <th width="150px">Launch Date</th>
                <th width="300px">Mission Type</th>
                <th width="100px">Crew Size</th>
                <th width="150px">Astronaunt ID</th>
                <th width="100px">Target ID</th>
            </tr>
            <!-- A simple table with the column headers inserted and spaced accordingly - MR -->

            <?php
            $sql = mysqli_query($link, "SELECT mission_id, name, destination, launch_date, mission_type, crew_size, astronaut_id, target_id FROM mission");
            while ($row = $sql->fetch_assoc()) {
            // The above fetches the data to populate the table with the infomation stored on the database, entered via the forms on the site - MR
                echo "
                <tr>
                    <th>{$row['mission_id']}</th>
                    <th>{$row['name']}</th>
                    <th>{$row['destination']}</th>
                    <th>{$row['launch_date']}</th>
                    <th>{$row['mission_type']}</th>
                    <th>{$row['crew_size']}</th>
                    <th>{$row['astronaut_id']}</th>
                    <th>{$row['target_id']}</th>
                </tr>
                ";
            // The data is then echoed and inserted it into the correct columns with $row - MR 
            }
            ?>

        </table>

        <div class="row">
        <div class="col">    
        <div class="form-layout">
                <h3>Crew Size Per Mission</h3>
                
                <?php 
                echo "
                    <div>
                        <canvas id='myChart' width='1000px' height='400px'>
                            <script>
                                Chart.defaults.font.size = 16;
                                Chart.defaults.color = '#FFFFFF';
                                Chart.defaults.font.family = 'Montserrat';
                                Chart.defaults.font.weight = 100;
                                const labels = [ 
                    ";
                /* Inside the script tag is the JavaScript for drawing our chart. The size of the canvas is drawn and font size, family, etc is set to be used on the legend or when hovering over a value.
                It is then wrapped it in a PHP tag and echoed it to display it on a php page - MR */
                ?>

                <?php
                    $sql = mysqli_query($link, "SELECT mission_id, name, destination, launch_date, mission_type, crew_size FROM mission");
                    while ($row = $sql->fetch_assoc()){
                    echo "
                    '{$row['name']}',
                    ";
                    }
                // The above fetches the data for name & number of missions to populate the labels on the chart. As before, the infomation has been entered via the forms on the site - MR
                ?>
            
                <?php 
                    echo "
                        ];

                    const data = {
                    labels: labels,
                    datasets: [{
                    label: 'Crew Size',
                    backgroundColor: [
                        '#C16540',
                        '#DA6F65',
                        '#EDA29C',
                        '#414149',
                        '#575958',
                        '#A4A6B2',
                        '#FFFFFF'
                    ],
                    borderColor: 'transparent',
                    data: [
                    ";
                    /* The chart JS styling continues as we set the doughnut chart's segment colour and make the border transparent 
                    As before, it is then wrapped it in a PHP tag and echoed it to display it on a php page - MR */
                ?>

                <?php
                $sql = mysqli_query($link, "SELECT mission_id, name, destination, launch_date, mission_type, crew_size FROM mission");
                while ($row = $sql->fetch_assoc()){
                echo "
                {$row['crew_size']},
                ";
                }
                // The above fetches the data for name & number of missions to populate the data on the chart. As before, the infomation has been entered via the forms on the site - MR
                ?>

                <?php 
                echo "
                    ],
                    hoverOffset: 6
                    }]
                    };

                    const config = {
                        type: 'doughnut',
                        data: data,
                        options: {responsive: false}
                        };
                    </script>
                    
                    </canvas>
                    <script>
                    const myChart = new Chart(
                        document.getElementById('myChart'),
                        config
                    );
                    </script>
                </div>
                ";
                /* When hovering over a segment of the chart, it will lift it away from the chart and display a legend. hoverOffset determines the distance of the hover.
                The const config states the type of chart while the const myChart makes sure the chart is rendered inside the canvas div - MR */
                ?>
                            
                
                <?php    
                    mysqli_close($link);
                    // Closes the link to the database - MR  
                ?>
            </div>
        </div>   
    </div>        

    </body>
</html>