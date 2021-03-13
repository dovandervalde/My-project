<?php 
	$db = mysqli_connect('localhost', 'root','', 'practice');
	
	if (isset($_POST['save'])) {
		$tab = $_POST['tab'];

		$query = "INSERT INTO old_patient (tab) VALUES ('$tab')";
		mysqli_query($db, $query);
		header('location: patient_record.php');

	}

?>