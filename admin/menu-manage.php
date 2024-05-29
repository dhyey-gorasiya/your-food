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
	$sql = "UPDATE `categories` set isActive=$status WHERE id = '$id';";
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
				window.location = "menu-list.php";
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
if (isset($_POST['addcategory'])) {
    $categoryname = $_POST['categoryname'];

    $checkSQL = "SELECT * FROM `categories` WHERE category_name = '$categoryname';";
    $checkresult = $con->query($checkSQL);
    if ($checkresult->num_rows > 0) {
        echo '<script>
                swal("Error !", "A Category already exists under this name!", "error").then(function() {
                window.location = "menu-add.php";});
            </script>';
    } else {

        if (isset($_POST['addcategory'])) {
			$categoryname = $_POST['categoryname'];
			$iquery = "INSERT INTO `categories`(`category_name`) 
					VALUES ('$categoryname');";
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
								window.location = "menu-add.php";
							});
							</script>';
			} else {
				echo "Error: " . $iquery . "<br>" . $con->error;
			}
		}
    }
}
?>
