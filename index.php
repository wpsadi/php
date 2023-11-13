<?php
    if(isset($_POST['school-name'])){
            // require 'mysqli.php';my
    $server = "sql12.freesqldatabase.com";
    $dbName = "sql12661686";
    $username = $dbName;
    $pass = "TGMy2aMwZm";
    $port = "3306";

    $con = mysqli_connect($server,$username,$pass,$dbName);

    if (!$con){
        die("connection failed." . "..sedlyf");
    }

    $sch_name = $_POST['school-name'];
    $sem = $_POST['sem'];
    $fName = $_POST['faculty-name'];
    $SubName = $_POST['subj'];
    $SubCode = $_POST['code'];
    $Ph = $_POST['ph'];


    $command = "INSERT INTO 'IPU_FACULTY' VALUES('$sch_name','$sem','$fName','$SubName','$SubCode','$Ph')";
    // echo $command;
    if($con -> query($command) == True){
        echo("Successfully Saved Data");
    }
    else{
        echo ("ERROR While Saving DATA. Maybe this Project is no longer maintained by the Creator");
    }

    $con -> close();
    }

    
?>
