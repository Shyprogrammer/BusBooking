
<?php require_once('connection.php');?>
session_start();

<?php  


	$reg_id = $_POST["bus_id"];
	$route_id= $_POST["route_id"];
	$company=$_SESSION["company"];	// pass from session
	$bus_condition =$_POST["bus_condition"];
	$num_of_seats  = date("num_of_seats");
	


	$query ="INSERT INTO bus ( reg_id , route_id  , company , bus_condition , num_of_seats) VALUES ( '{$reg_id}','{$route_id}','{$company}','{$bus_condition}','{num_of_seats}' )";
	

	$result = mysqli_query($connection,$query);

	if($result){
		
		echo "recode successfully added!";
	}else{
		echo "record adding failed!";
	}

?>

<?php mysqli_close($connection); ?>


