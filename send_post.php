<?php
//Connecting to sql db.
$connect = pg_connect("host=localhost port=5432 dbname=jake password=Jake09!");
//Sending form data to sql db.
pg_query($connect,"INSERT INTO jake (one, two)
VALUES (1, 2)";
?>
