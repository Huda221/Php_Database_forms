<?php
$id = $_GET["id"];
echo $id;
$dbname= "db3";
$dbuser="root";
$dbpass="";
$dbhost="localhost";

$connect=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if($connect)
{
    $query="DELETE FROM dbpractice WHERE id={$id}";
    echo $query;
    $result=mysqli_query($connect,$query);
    if($result)
    {
        header("location:fetchpractice.php?message=data deleted successfully");
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