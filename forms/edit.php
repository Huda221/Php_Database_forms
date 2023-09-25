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
   //fetch start
   $query = "SELECT * FROM register WHERE id={$id}";
   $result = mysqli_query($connect,$query);
   
   if(mysqli_num_rows($result)>0)
   {
      
       while($data = mysqli_fetch_assoc($result))
       {
           $id = $data["id"];
           $fname = $data["fname"];
           $lname = $data["lname"];
           $email = $data["email"];
           ?>
        <form action="update.php" method="POST">
            <input type="text" name="fname" value="<?php echo $fname; ?>">
            <input type="text" name="lname" value="<?php echo $lname; ?>">
            <input type="email" name="email" value="<?php echo $email; ?>">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="submit" name="update" value="update">
        </form>

           <?php
         
       }
      

   }
   else
   {
       echo "no result found";
   }

   //fethc end

}
else
{
    echo mysqli_error($connect);
}

?>