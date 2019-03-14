<!DOCTYPE HTML>
<html>

 <?php
$servername="localhost";
$username="root";
$password="";
$db="atm";
$conn = new mysqli($servername, $username, $password, $db);
$Id=$_POST['amt'];

        
		$sql = "insert into atm(amt) VALUES('$Id')";
    
        
if ($conn->query($sql)==TRUE)
{
echo '<script type="text/javascript">
           window.location = "2.html"
      </script>';
} 
    else
{
    echo "  user not available";
}

$conn->close();
?>
</div>
</body>
</html>