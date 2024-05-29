<!-- menu-manage.php -->

<body>
	<?php include 'template/alert.php'; ?>
</body>

<?php
if (isset($_GET['menu_id'])) {
	$id = $_GET['menu_id'];
	$status = $_GET['status'];
	
		if($status == 1){
			$status = 0;
		}
		else{
			$status = 1;
		}
	$sql = "UPDATE `locations` set isActive=$status WHERE id = '$id';";
	include_once 'dbCon.php';
	$con = connect();
	if ($con->query($sql) === TRUE) {
		echo '<script>
			swal({
				title: false,
				text: "This product has been Updated!",
				icon: "success",
				button: "ok",
			}).then(function() {
				window.location = "city-list.php";
			});
			</script>';
	} else {
		echo "Error: " . $sql . "<br>" . $con->error;
	}
}
?>



<?php
session_start();
include_once 'dbCon.php';
$con = connect();
if (isset($_POST['addCity'])) {
    $cityname = $_POST['cityname'];

    $checkSQL = "SELECT * FROM `locations` WHERE location_name = '$cityname';";
    $checkresult = $con->query($checkSQL);
    if ($checkresult->num_rows > 0) {
        echo '<script>
                swal("Error !", "A City already exists under this name!", "error").then(function() {
                window.location = "city-add.php";});
            </script>';
    } else {

        if (isset($_POST['addCity'])) {
			$categoryname = $_POST['cityname'];
			$iquery = "INSERT INTO `locations`(`location_name`) 
     			       VALUES ('$cityname');";
			include_once 'dbCon.php';
			$con = connect();
			if ($con->query($iquery) === TRUE) {
				echo '<script>
							swal({
								title: false,
								text: "Added successfully!",
								icon: "success",
								button: "ok",
							}).then(function() {
								window.location = "city-add.php";
							});
							</script>';
			} else {
				echo "Error: " . $iquery . "<br>" . $con->error;
			}
		}
    }
}
?>