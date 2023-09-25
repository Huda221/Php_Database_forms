<?php 
$dbname= "db1";
$dbuser="root";
$dbpass="";
$dbhost = "localhost";
$connect= mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if($connect)
{
    //'quotes'
    echo "database connected successfully";
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $query = "INSERT INTO register (fname,lname,email) VALUES ('".$fname."','".$lname."','".$email."')";
    //echo $query;
    $result = mysqli_query($connect,$query);
    if($result)
    {
        echo "data inserted successfully";

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