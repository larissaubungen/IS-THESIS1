<?php

// Inialize session
session_start();

// Delete certain session
unset($_SESSION['ID_No']);
// Delete all session variables
// session_destroy();

// Jump to login page
header('Location: LogInPage.php');

?>