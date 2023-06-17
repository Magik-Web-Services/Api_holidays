<?php
include('db.php');

// read all id
if (empty($_GET['']) && empty($_GET['id'])) {
	$result = $db->query("SELECT id as stdid, name as stdname, round, course FROM api_students");
	if (mysqli_num_rows($result) > 0) {
		$data = array();
		while ($row = $result->fetch_assoc()) {
			array_push($data, $row);
		}
		echo json_encode($data);
	}
}elseif(isset($_GET['id'])){
		include('db.php');
		$id = $_GET['id'];
		$result = $db->query("SELECT id as stdid, name as stdname, round, course FROM api_students WHERE id=$id");
		if(mysqli_num_rows($result)>0){
			$data = array();
			while($row=$result->fetch_assoc()){
				array_push($data, $row);
			}
			echo json_encode($data);
		}
	}
