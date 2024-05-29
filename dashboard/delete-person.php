<!-- delete-person.php -->

<body>
	<?php include 'template/alert.php'; ?>
</body>

<?php
if (isset($_GET['table_id'])) {
	$id = $_GET['table_id'];
	$status = $_GET['status'];
	
		if($status == 1){
			$status = 0;
		}
		else{
			$status = 1;
		}
	
	$res_id = $_GET['table_id'];
	$sql = "update restaurant_tables set isActive=$status WHERE id = '$id';";
	include_once 'dbCon.php';
	$con = connect();
	if ($con->query($sql) === TRUE) {
		echo '<script>
			swal({
				title: false,
				text: "The tables have been updated!",
				icon: "success",
				button: "ok",
			}).then(function() {
				window.location.href ="person-table-list.php?table_id=" + dist;
			});
			</script>'; ?>
		<script type="text/javascript">
			var dist = <?php echo $res_id; ?>;
		</script>
<?php
	} else {
		echo "Error: " . $sql . "<br>" . $con->error;
	}
}
?>