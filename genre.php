<?php

if (isset($_GET['id'])) {
    if ($_GET['id'] == 1) {
        header( "Location: hommes.php" );
    } elseif ($_GET['id'] == 2) {
        header("Location: femmes.php");
    } elseif ($_GET['id'] == 3) {
        header("location: enfants.php");
    }
} else {
    header("location: index.php");
}
