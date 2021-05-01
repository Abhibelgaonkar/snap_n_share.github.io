<?php
	include "dbcon.php"; // Using database connection file here
	if(isset($_POST['delete']))
	{
		$id = $_POST['did']; // get id through query string

		$del = mysqli_query($conn,"delete from item where item_id = '".$id."'"); // delete query

		if($del)
		{
			echo "<script>alert('Item has been deleted');</script>";
			header("location:my_item.php"); // redirects to all records page
				
		}
		else
		{
			echo "Error deleting record"; // display error message if not delete
		}
		}
?>