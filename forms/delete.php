<?php 
$id = $_GET["id"];
echo $id;
$dbname= "db1";
$dbuser="root";
$dbpass="";
$dbhost = "localhost";
$connect= mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if($connect)
{
    //'quotes'
    $query = "DELETE FROM register WHERE id={$id}";
    // echo $query;
    $result = mysqli_query($connect,$query);
    if($result)
    {
        header("location:fetch.php?message=data deleted successfully");
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