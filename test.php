<?php $connect = mysqli_connect("localhost","root","","banhang"); ?>
<?php
$sqll = mysqli_query($connect,"SELECT * FROM cart_sum");
$data_ar ='';
while ($roww = mysqli_fetch_array($sqll)) {
	$data_ar .= "{id:'".$roww['ID']."',gia:".$roww['TongTien']." }, ";
}
//echo $data_ar;
$data_ar = substr($data_ar,0, -2) ; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
<link rel="stylesheet" href="../../css/bootstrap1.min.css">
	<link rel="stylesheet" href="../../css/bower_components/morris.js-0.5.1/morris.css">
	<script src="../../css/bower_components/jquery/dist/jquery.min.js"></script>
	<!-- Morris.js charts -->
	<script src="../../css/bower_components/raphael/raphael.min.js"></script>
	<script src="../../css/bower_components/morris.js-0.5.1/morris.min.js"></script>

	
	
	<title>Document</title>
</head>
<body>
	<div class="col-md-6" id="chatr"></div>
</body>
<script>
	Morris.Line({
		element :'chatr',
		data:[<?php echo $data_ar; ?>],
		xkey:'id',
		ykeys:['gia'],
		labels:['TongTien1'],
		hideHover:'auto',
		stacked:true
	});
</script>
</html>