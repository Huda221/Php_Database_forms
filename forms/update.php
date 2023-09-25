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
    $id = $_POST["id"];
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $query = "UPDATE register SET fname='".$fname."', lname='".$lname."', email='".$email."' WHERE id={$id}";
    echo $query;
    //echo $query;
    $result = mysqli_query($connect,$query);
    if($result)
    {
        echo "data updated successfully";

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