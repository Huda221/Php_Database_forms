<?php
if(isset($_GET["message"]))
{
    echo $_GET["message"];
}
else
{
    echo "";
}
$dbname="db3";
$dbuser="root";
$dbpass="";
$dbhost="localhost";

$connect=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if($connect)
{
    echo "Database connected Successfully";

    $query="SELECT * FROM dbpractice";
    $result=mysqli_query($connect,$query);

    if(mysqli_num_rows($result)>0)
    {
        ?>
        <table>
            <tr>
            <th>id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Contact NO.</th>
                <th>Password</th>
                <th>Gender</th>
                <th>Information</th>
                <th>Birthday</th>
                <th>Search</th>
                <th>edit</th>
                <th>delete</th>
            </tr>
        <?php
        while($data=mysqli_fetch_assoc($result))
        {
            $id = $data["id"];
            ?>
            <tr>
                <td><?php echo $data["id"];?></td>
                <td><?php echo $data["fname"];?></td>
                <td><?php echo $data["lname"];?></td>
                <td><?php echo $data["email"];?></td>
                <td><?php echo $data["mobnum"];?></td>
                <td><?php echo $data["password"];?></td>
                <td><?php echo $data["gender"];?></td>
                <td><?php echo $data["info"];?></td>
                <td><?php echo $data["birthday"];?></td>
                <td><?php echo $data["search"];?></td>
                <td><a href="editpractice.php?id=<?php echo $id?>">Edit</a></td>
                <td><a href="deletepractice.php?id=<?php echo $id;?>">Delete</a></td>

            </tr>
            <?php
        }    
        echo "</table>";
        
    }
    else
    {
        echo "No result Found";
    }

}
else
{
    echo mysqli_error($connect);

}
?>