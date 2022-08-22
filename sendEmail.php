<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "zima";

$conn = mysqli_connect($hostname, $username, $password, $dbname);
if(!$conn){
  echo "Database connection error".mysqli_connect_error();
}

$approval= $_POST['approval'];
$sql = mysqli_query($conn, "INSERT INTO peers ()")

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Email</title>
</head>
<body>
    <a href="mailto:tintuschriso@gmail.com?subject=Testing out mailto!&body=This is only a test!">Second Example</a>
     <form action="sendEmail.php" method="post" class="approval_status">
        <select name="appoval" id="appoval">
            <option value="approved"> approved</option>
            <option value="not-approved">not-approved</option>
         </select>
        
         <a href="mailto:tintuschriso@gmail.com?subject=Testing out mailto!&body=This is only a test!"> <button type="submit">Update</button></a>

     </form>
</body>
</html>
ALTER TABLE `peers` ADD `approval_status` VARCHAR(100) NOT NULL DEFAULT 'not-approved' AFTER `email`; 