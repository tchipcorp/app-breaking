<?php

$pageTitle = "Edit Game Details";
require_once('header.php');

# Get db connection
connect();

$sql = file_get_contents(__DIR__."/videogame_db.sql");
$query = runQuery($sql);
?>

<div>Database refreshed</div>


<?php
disconnect();
require_once 'footer.php';