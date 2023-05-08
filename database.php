<?php
    include 'connection.php';
	
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		if (isset($_POST['submit'])) {
			$email = $_POST['email'];
			$sql = "SELECT * FROM launch WHERE email = '".$email."'";
			$results = mysqli_query($conn, $sql) or die ("error" . mysqli_error($conn));
			if (mysqli_num_rows($results) > 0) {
			    mysqli_close($conn);
		        header("Location: index.php?status=error");
			} else {
    			$sql = "INSERT INTO user (email) VALUES ('$email')";
    			mysqli_query($conn, $sql);
    			mysqli_close($conn);
		        header("Location: index.php?status=success");
			}
		}
	}
?>