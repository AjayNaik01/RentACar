<?php
require_once('connection.php');
session_start();

// Assign the value from session to $value
$value = $_SESSION['email'];

$sql = "SELECT * FROM members WHERE email='$value'";
$name = mysqli_query($con, $sql);
$rows = mysqli_fetch_assoc($name);


$sql2 = "SELECT * FROM `userdetails` ORDER BY email='$value'";
$name2 = mysqli_query($con, $sql);
$rows2 = mysqli_fetch_assoc($name2);



if (isset($_POST['Ref_name'])) {
	$name = $_POST['name'];
	$Email = $_POST['Email'];
	$Address = $_POST['Address'];
	$Adhar_no = $_POST['Adhar_no'];
	$Ref_name = $_POST['Ref_name'];

	// Check if required fields are not empty
	if (!empty($name) && !empty($Email) && !empty($Address) && !empty($Adhar_no) && !empty($Ref_name)) {
		// Insert data into the userdetails table
		$query = mysqli_query($con, "INSERT INTO `userdetails`(`name`, `Email`, `Address`, `Adhar_no`, `Ref_name`) 
								                        VALUES('$name', '$Email', '$Address', '$Adhar_no', '$Ref_name')");
	}

	if ($query && mysqli_affected_rows($con) > 0) {
		// Data inserted successfully
		$error = "Data inserted successfully.";
	} else {
		// Error occurred during insertion
		$error = mysqli_error($con);
	}
} else {
	// Handle the case when required fields are empty
	$error = "Please fill in all the required fields.";
}


$query = mysqli_query($con, "SELECT * FROM `userdetails`");

// Check if the query was successful
if ($query) {
	// Check if any rows were returned
	if (mysqli_num_rows($query) > 0) {
		// Loop through the rows and fetch the data
		while ($row = mysqli_fetch_assoc($query)) {
			$name = $row['name'];
			$Email = $row['Email'];
			$Address = $row['Address'];
			$Adhar_no = $row['Adhar_no'];
			$Ref_name = $row['Ref_name'];
		}
	}
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>MY PROFILE</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="profile.css">
</head>

<body>
	<form method="POST">

		<section class="py-5 my-5">
			<div class="container">
				<h1 class="mb-5">Account Settings</h1>

				<div class="bg-white shadow rounded-lg d-block d-sm-flex">
					<div class="profile-tab-nav border-right">
						<div class="p-4">
							<div class="img-circle text-center mb-3">
								<img src="images/profile.png" width="100px" height="100px" alt="Image" class="shadow">
							</div>
							<h4 class="text-center"><?php echo $rows['Username'] ?></h4>
						</div>
						<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						</div>
					</div>
					<div class="tab-content p-4 p-md-5" id="v-pills-tabContent">
						<div class="tab-pane fade show active" id="account" role="tabpanel" aria-labelledby="account-tab">
							<h3 class="mb-4">Account Settings</h3>
							<?php echo $error; ?>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Name</label>
										<input type="text" name="name" class="form-control" readonly value="<?php echo $rows['Username'] ?>">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Email</label>
										<input type="text" name="Email" ?email?readonly class="form-control" value="<?php echo $rows['Email'] ?>">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Phone number</label>
										<input type="number" readonly name="phoneno" class="form-control" value="<?php echo $rows['contactno'] ?>">
									</div>
								</div>

								<div class="col-md-6">
									<div class="form-group">
										<label>Address</label>
										<input type="text" name="Address" required class="form-control" value="<?php echo  $Address ?>">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Adhar number</label>

										<input type="text" class="form-control" required name="Adhar_no" value="<?php echo  $Adhar_no ?>">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Driving license</label>
										<input type="file" class="form-control" value="">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Referecnce</label>
										<input type="text" name="Ref_name" required class="form-control" value="<?php echo  $Ref_name ?>">
									</div>
								</div>

								<div class="col-md-6">
									<div class="form-group">
										<label>Referecnce proof</label>
										<input type="file" class="form-control" value="">
									</div>
								</div>
							</div>
							<div>
								<input class="form-control button" type="submit" name="register" id="submit" value="Update">
								<input class="form-control button" type="submit" name="register" id="submit" value="Cancel">
							</div>
						</div>
					</div>
				</div>
			</div>
			</div>
		</section>


		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	</form>
</body>

</html>