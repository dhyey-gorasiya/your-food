
<body>
	<?php include 'template/alert.php'; ?>
</body>

<?php
session_start();
include_once 'dbCon.php';
$con = connect();
//reject 
if (isset($_GET['breject_id'])) {
	$c_id = $_GET['breject_id'];
	$sql = "UPDATE booking_details SET status = 0 WHERE c_id = '$c_id';";
	if ($con->query($sql) === TRUE) {
		echo '<script>
                    swal({
                        title: false,
                        text: "Your reservation has been Cancel!",
                        icon: "success",
                        button: "ok",
                    }).then(function() {
                        window.location = "my bookings.php";
                    });
                    </script>';
	} else {
		echo "Error: " . $sql . "<br>" . $con->error;
	}
}

?>