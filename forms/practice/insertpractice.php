<?php
$dbname="db3";
$dbuser="root";
$dbpass="";
$dbhost="localhost";

$connect=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if($connect)
{
    echo "Database Connected Successfully";
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $email=$_POST["email"];
    $mobnum=$_POST["mobnum"];
    $password=$_POST["password"];
    $gender=$_POST["gender"];
    $info=$_POST["info"];
    $birthday=$_POST["birthday"];
    $search=$_POST["search"];

    $query="INSERT INTO dbpractice (fname,lname,email,mobnum,password,gender,info,birthday,search) VALUES ('".$fname."', '".$lname."', '".$email."', '".$mobnum."', '".$password."', '".$gender."', '".$info."', '".$birthday."', '".$search."')";

    // echo $query;

    $result=mysqli_query($connect,$query);

    if($result)
    {
        echo "Data Inserted Successfully";
    }
    else 
    {
        echo mysqli_error($connect);
    }

}
else
{
    echo mysqli_error($connect);

}

?>