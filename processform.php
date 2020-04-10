<?php

if(isset($_POST['submit'])){

    $firstName = $_POST['first_name'];

    $lastName = $_POST['last_name'];

    $email = $_POST['email'];

    $gender= $_POST['gender'];

    $message = $_POST['message'];



    $file = fopen("$firstName.txt" , "a");

    fwrite($file, $firstName);

    fwrite($file, $lastName);

    fwrite($file, $email);

    fwrite($file, $gender);

    fwrite($file, $message);
}