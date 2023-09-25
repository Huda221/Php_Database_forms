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
    $query="SELECT * FROM dbpractice WHERE id={$id}";
    $result=mysqli_query($connect,$query);

    if(mysqli_num_rows($result)>0)
    {
        while($data=mysqli_fetch_assoc($result))
        {
            $id=$data["id"];
            $fname=$data["fname"];
            $lname=$data["lname"];
            $email=$data["email"];
            $mobnum=$data["mobnum"];
            $password=$data["password"];
            $gender=$data["gender"];
            $info=$data["info"];
            $birthday=$data["birthday"];
            $search = $data["search"];
            ?>
            <form action="updatepractice.php" method="POST">
                <input type="text" name="fname"  value=<?php echo $fname; ?>><br>
                <input type="text" name="lname"  value=<?php echo $lname; ?>><br>
                <input type="email" name="email" value=<?php echo $email; ?>><br>
                <input type="text" name="mobnum" value=<?php echo $mobnum; ?>><br>
                <input type="password" name="password" value=<?php echo $password; ?>><br>

                <input type="radio" name="gender" value=<?php echo $gender; ?> <?php if($gender==="Male"){echo "checked";} else { echo "";} ?>>
                <label for="male">Male</label><br>
                <input type="radio" name="gender" value=<?php echo $gender; ?>  <?php if($gender==="Female"){echo "checked";} else { echo "";} ?>>
                <label for="female">Female</label><br>

                <input type="checkbox" name="info" value=<?php echo $info; ?>>
                <label for="valid">Valid Information</label><br>
                <input type="checkbox" name="info" value=<?php echo $info; ?>>
                <label for="Invalid">Invalid Information</label><br>

                <label for="birthday">Birthday:</label>
                <input type="date" name="birthday" value=<?php echo $birthday; ?>><br>
                <input type="hidden" name="id" value=<?php echo $id; ?>>
                <input type="submit" name="update" value="update">
            </form>
            <?php
        }
    }
    else
    {
        echo "No result found";
    }

}
else
{
    echo mysqli_error($connect);

}
?>