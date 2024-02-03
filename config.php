<?php
    $conn = mysqli_connect("localhost","root","","uptownfresh");

    if(!$conn){
        echo "Connection error";
    }