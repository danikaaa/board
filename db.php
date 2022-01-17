<?php
    session_start();

    $db = new mysqli('localhost', 'root', '','db');
    $db->set_charset("utf8");

    function query($query)
    {
        global $db;
        return $db->query($query);
    
    }

    ?>