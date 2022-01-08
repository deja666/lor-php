$servername   = "localhost";
$database = "lor";
$username = "root";
$password = "";
$conn = new mysqli($servername, $username, $password, $database);
(`name`,`email`,`subject`,`message`) VALUES ('$InputName','$InputEmail','$InputSubject','$InputMessage')";
$rs = mysqli_query($conn, $sql);
if($rs)
{
	echo "Contact Records Inserted";
}


<?php
$conn = mysqli_connect("localhost", "root", "","lor");

$InputName =isset($_REQUEST["InputName"]);
$InputEmail =isset($_REQUEST["InputEmail"]);
$InputSubject=isset($_REQUEST["InputSubject"]);
$InputMessage =isset($_REQUEST["InputMessage"]);


$sql = "INSERT INTO support(`name`,`email`,`subject`,`message`) VALUES ('$InputName','$InputEmail','$InputSubject','$InputMessage')";
$rs = mysqli_query($conn, $sql);
if($rs)
{
	echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";
 
            echo nl2br("\n$InputName\n $InputEmail\n "
                . "$InputSubject\n $InputMessage\n ");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        
}
mysqli_close($conn);
  ?>

<?php
$servername = "localhost";
$database = "lor";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "<script>
alert('FEEDBACK OR REPORT HAS BEEN SENDING,THANK YOU !!!');
window.location.href='index.php';
</script>";

   
// menyimpan data kedalam variabel
$name            = $_POST['InputName'];
$email           = $_POST['InputEmail'];
$subject        = $_POST['InputSubject'];
$message  = $_POST['InputMessage'];

// query SQL untuk insert data
$query="INSERT INTO support SET nama='$name',email='$email',subjectemail='$subject',messagepesan='$message'";

mysqli_close($conn);
// mengalihkan ke halaman index.php

?>


<?php
$servername = "localhost";
$database = "lor";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if(isset($_POST['submit'])){
$InputName =!isset($_POST['InputName']);
$InputEmail =isset($_POST['InputEmail']);
$InputSubject=!isset($_POST['InputSubject']);
$InputMessage =!isset($_POST['InputMessage']);


$sql = "UPDATE support SET nama='$name',email='$email',subjectemail='$subject',messagepesan='$message'";
}
mysqli_close($conn);
  ?>