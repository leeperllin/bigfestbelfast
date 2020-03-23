<?php
// $host = "plee07.web.eeecs.qub.ac.uk";
// $user = "plee07";
// $pw = "Fylt3JZwTSJDnRqB";
// $db = "plee07";

$host = "localhost";
$user = "root";
$pw = "";
$db = "perllin";


$conn = new mysqli($host, $user, $pw, $db);

// if ($conn) {
//   echo "Connected la";
// }

if ($conn->connect_error) {
  echo $conn->connect_error;
}
