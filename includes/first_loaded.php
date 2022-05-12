<?php
@session_start(); // Pour stocker des variables
if (isset($_GET['gclid'])) $_SESSION['origine_referer']='Adwords';
?>