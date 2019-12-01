<?php
include "../koneksi.php";

if (!empty($_POST)) {
	foreach($_POST['selected2'] as $key => $value) {
	    // delete query 
		$query = mysqli_query($connect, "DELETE FROM directories WHERE id='$value' ");
		if($query) {
			echo $query;
		} else {
			echo mysqli_error($connect);
		}
	}
}


?>
