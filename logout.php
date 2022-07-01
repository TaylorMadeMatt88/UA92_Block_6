<?php
    session_start();
    session_destroy();
    header('Location: index.html');
    // Logs out of session and redirects back to login page - MR
