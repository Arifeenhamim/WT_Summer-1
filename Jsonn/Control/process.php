<?php
$message = '';
$error = '';
if (isset($_POST["submit"])) {
	if (empty($_POST["name"])) {
		$error = "<label class='text-danger'>Enter Name</label>";
	} else if (empty($_POST["email"])) {
		$error = "<label class='text-danger'>Enter an Email</label>";
	} else if (empty($_POST["un"])) {
		$error = "<label class='text-danger'>Enter a User Name</label>";
	} else if (empty($_POST["pass"])) {
		$error = "<label class='text-danger'>Enter a Password</label>";
	} else if (empty($_POST["Cpass"])) {
		$error = "<label class='text-danger'>Confirm Password field cannot be empty</label>";
	} else if (empty($_POST["gender"])) {
		$error = "<label class='text-danger'>Gender cannot be empty</label>";
	} else {
		if (file_exists('../Data/data.json')) {
			$current_data = file_get_contents('../Data/data.json');
			//echo $current_data;
			$array_data = json_decode($current_data, true);
			$new_data = array(
				'name'               =>     $_POST['name'],
				'e-mail'          =>     $_POST["email"],
				'username'     =>     $_POST["un"],
				'gender'     =>     $_POST["gender"],
				'dob'     =>     $_POST["dob"]
			);
			$array_data[] = $new_data;
			$final_data = json_encode($array_data);
			//echo $final_data;
			if (file_put_contents('../Data/data.json', $final_data)) {
				$message = "<label class='text-success'>File Save Successfully</p>";
			}
		} else {
			$error = 'JSON File not exits';
		}
	}
}
?>