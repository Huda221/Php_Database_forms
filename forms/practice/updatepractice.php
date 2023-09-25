<?php 
$dbname= "db3";
$dbuser="root";
$dbpass="";
$dbhost = "localhost";
$connect= mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if($connect)
{
    echo "database connected successfully";
    $id = $_POST["id"];
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $mobnum = $_POST["mobnum"];
    $password = $_POST["password"];
    $gender = $_POST["gender"];
    $info = $_POST["info"];
    $birthday = $_POST["birthday"];
    $query = "UPDATE dbpractice SET fname='".$fname."', lname='".$lname."', email= '".$email."', mobnum= '".$mobnum."', password= '".$password."', gender='".$gender."', info='".$info."' , birthday= '".$birthday."'  WHERE id={$id}";
    echo $query;
    $result = mysqli_query($connect,$query);
    if($result)
    {
        echo "Data Updated Successfully";
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