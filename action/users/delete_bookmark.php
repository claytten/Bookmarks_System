<?php
include "../koneksi.php";

if (!empty($_POST)) {
	foreach($_POST['query2'] as $keys => $values) {
		$cek_star = mysqli_query($connect,"SELECT * FROM history WHERE id='$values'");
		if(mysqli_num_rows($cek_star) > 0) {
			$query2 = mysqli_query($connect, "UPDATE history SET status=0 WHERE id='$values' ");
		}
	}
	foreach($_POST['query1'] as $key => $value) {
		// delete query 
		$query1 = mysqli_query($connect, "DELETE FROM bookmarks WHERE id='$value' ");
	    if($query1 || $query2) {
			echo $query1;
			echo $query2;
		} else {
			echo mysqli_error($connect);
		}
	}
}


?>
