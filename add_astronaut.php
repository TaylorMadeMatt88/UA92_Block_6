<html>
    <head>
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <!--Meta Tags -MR-->

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- Bootstrap CSS - MR-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
		<!-- Google Fonts for the whole page = MR-->

        <title>Add Astronauts</title>

        <style>
            * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            } 
            /* Universal reset to eliminate default margin/padding on my web page - MR */

            body {
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
            color: white;
            }

            input[type="text"], input[type="number"], input[type="date"] {
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
    </div>

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

        <div class="row-sm">
			<div class="col">
				<div class="form-title">
				<p style="font-size:4vw;">ADD ASTRONAUT</p>
				</div>
			</div>
		</div>
	    <!--Div for Add Astronaut header text featuring a header tag with a viewpoint width unit - MR-->	
		
		<div class="row-sm">
			<div class="col">
				<div class="form-layout">     
                    <form method="post" action="add_astronaut.php">
                    <label style="font-size:2vw;">Astronaut Name</label>  
                        <input type="text" name="name" required />
                        <br>
                        <label style="font-size:2vw;">Number Of Missions</label>
                        <input type="number" name="no_of_missions" required />
                        <br> 
                        <br>
                        <p></p>  
                        <input type="submit" name="submit">
                    </form>
                    <!--Form with required inputs for both Astronaunt Name & Number Of Missions - MR -->
                </div>
            </div>    
        </div>

        <?php
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $no_of_missions = $_POST['no_of_missions'];

            $sql = "INSERT INTO astronaut (name, no_of_missions) VALUES ('$name', '$no_of_missions')";
            // The above line determines what database and values the form submission are stored in - MR

            if (mysqli_query($link, $sql)) {
                echo "Entry Submitted";
                // An echo of confirmation if the query is submitted into the database - MR
            } else {
                echo "Error: Problem Adding Astronaut";
            }
            // An error is echoed if the query doesn't get submitted into the database - MR 
        }    

        mysqli_close($link);
        // Closes the link to the database - MR  

        ?>
        </div>
    </body>
</html>