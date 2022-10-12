<?php

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];

    //store data into userdata.csv
    $csv = "./userdata.csv";
    $formdata = array($name,$email,$dob,$gender,$country);
    $file = fopen("$csv", "a");
    fputcsv($file, $formdata);
    fclose($file);

    //print data inside userdata.csv
    $open = fopen($csv, "r");
    $read = fread($open, filesize($csv));
    print_r($read);
    fclose($open);

}
?>