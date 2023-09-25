<?php 
if(isset($_GET["message"]))
{
echo $_GET["message"];
}
else
{
echo "";
}
$dbname= "db1";
$dbuser="root";
$dbpass="";
$dbhost = "localhost";
$connect= mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if($connect)
{
    //'quotes'
    echo "database connected successfully";
    $query = "SELECT * FROM register";
    $result = mysqli_query($connect,$query);
    
    if(mysqli_num_rows($result)>0)
    {
        ?>
        <table>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>last name</th>
                <th>email</th>
                <th>edit</th>
                <th>delete</th>
            </tr>
        <?php
        while($data = mysqli_fetch_assoc($result))
        {
            $id = $data["id"];
            ?>
            <tr>
                <td><?php echo $data["id"];?></td>
                <td><?php echo $data["fname"];?></td>
                <td><?php echo $data["lname"];?></td>
                <td><?php echo $data["email"];?></td>
                <td><a href="edit.php?id=<?php echo $id?>">Edit</a></td>
                <td><a href="delete.php?id=<?php echo $id?>">Delete</a></td>

            </tr>
            <?php
        
        }
        echo "</table>";

    }
    else
    {
        echo "no result found";
    }

    

}
else
{
    echo mysqli_error($connect);
}

?>