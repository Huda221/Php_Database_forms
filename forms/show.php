<?php
if(isset($_POST["submit"]))
{
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["mail"];
    $mobnum = $_POST["mobnum"];
    $password = $_POST["password"];
    $gender = $_POST["gender"];
    $info = $_POST["info"];
    $birthday = $_POST["birthday"];
    // $myfile = $_POST["myfile"];
    $search = $_POST["search"];
    $url = $_POST["url"];
    echo $fname."<br>".$lname."<br>".$email."<br>".$mobnum."<br>".$password."<br>". $gender."<br>".$info."<br>".$birthday."<br>".$search."<br>".$url;

}
else
{
    echo "return and fill the form first";
}
?>
