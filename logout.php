<?php
// logout.php
session_start();
session_unset();
session_destroy();
header("Location: /Brgy San Vicente II/index.php");
exit;
