<?php
    function sanitize($data){
    global $connection;
    $data = trim($data);
    $data = mysqli_real_escape_string($connection,$data);
    $data = strip_tags($data);
    return $data;
}

?>