<html>
<head></head>
<body>
<?php 

//You need to add some security statements to make 
//sure things only 
session_start();
//echo "session started<br>";
$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "video_store"; 
	
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
	
    // Check connection
    if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
    }
	
    $name = $_SESSION["membername"];
	$id = $_SESSION["memberid"];
	
	echo "Here you say hi to the person if you want" . "<br>";
	echo "Hey there " . $name;
?>

<br><br>
<form action="movie_search_target.php" method="post">
	Search by: <select name="search_by">
		<option value="Category">Category</option>
		<option value="Title">Title</option>
		<option value="Director">Director</option>
	</select>
	<br>
	Search: <input name="search" type="text">
	<input type="submit">
</form>

</body>
</html>