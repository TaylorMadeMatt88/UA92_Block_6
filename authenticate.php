<?php
    session_start();

    $host = "localhost"; 
    $username = "root";    
    $password = ""; 
    $database_name = "esa"; 
    // The above defines the variables for the host, username, password & database - MR

    $link = mysqli_connect($host, $username, $password, $database_name);
    // Link to host, username, password & database - MR

    if($link === false) {
         die("Error: Could Not Connect");
    }
    
    if ( !isset($_POST['username'], $_POST['password']) ) {
	    exit('Please fill both the username and password fields!');
    // IF statement to check the database for infomation entered into the fields. Displays error message if infomation hasn't been entered in either field - MR    
    }

    if ($stmt = $link->prepare('SELECT login_id, password FROM login WHERE username = ?')) {
        $stmt->bind_param('s', $_POST['username']);
        $stmt->execute();
        $stmt->store_result();
        // Three statements to bind, execute & store the result from username. 's' is for string, the type of data used in the username column - MR
        
        if ($stmt->num_rows > 0) {
            $stmt->bind_result($$login_id, $password);
            $stmt->fetch();
            // If the account exists, the statement will bind the a login id with a password - MR

            if (password_verify($_POST['password'], $password)) {
                // Password verification - MR
                
                session_regenerate_id();
                $_SESSION['loggedin'] = TRUE;
                $_SESSION['name'] = $_POST['username'];
                $_SESSION['login_id'] = $login_id;
                // Sessions store the infomation remebering the user is logged in white storing the data on the server - MR
                header('Location: home.php');
                // Header directs the user to the home page - MR
            } else {
                echo 'Incorrect password!';
                // An echo if the password is incorrect - MR
            }
        } else {
            echo 'Incorrect username!';
            // An echo if the username is incorrect - MR
        }

        $stmt->close();
        // Statement to close the session - MR 
    }
         
?>

