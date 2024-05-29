
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
$sql = "UPDATE `rc_info`set isActive=$status WHERE id = '$id';";
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
            window.location = "booking-list.php";
        });
        </script>';
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
}
?>

