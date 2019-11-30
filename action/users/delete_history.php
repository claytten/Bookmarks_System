<?php
include "../koneksi.php";

if (!empty($_POST)) {
	foreach($_POST['query'] as $key => $value) {
	    // delete query 

		$query = mysqli_query($connect, "DELETE FROM history WHERE id='$value' ");
		if($query) {
			echo $query;
		} else {
			echo mysqli_error($connect);
		}
	}
}


?>
