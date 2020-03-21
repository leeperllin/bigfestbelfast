<?php
        $host = "plee07.web.eeecs.qub.ac.uk";
        $user = "plee07";
        $pw = "Fylt3JZwTSJDnRqB";
        $db = "plee07";
 
        $conn = new mysqli($host, $user, $pw, $db);
 
        if($conn->connect_error) {
          echo $conn->connect_error;
        }
 