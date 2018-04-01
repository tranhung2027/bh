<?php  
@session_start();

if (isset($_POST['submit_send'])) {

	
	$connect = mysqli_connect("localhost","root","","banhang");
	//mysqli_set_charset($connect,'UTF8');
	$tongtien = 0;
	$fullname = $_POST['txtname'];
	$phone = $_POST['txtnum'];
	$qr = "INSERT INTO `cart` (`Name`, `Num`) VALUES ('$fullname', '$phone')";
	$result = mysqli_query($connect,$qr);

	// if (isset(count($_SESSION['giohang']))) {
			
		$tongsoluong = count($_SESSION['giohang']);
			//echo $result;
		if ($result) {
			for ($i=0; $i < count($_SESSION['giohang']) ; $i++) { 
				$max = mysqli_query($connect,"SELECT max(ID) FROM cart ");
				$row = mysqli_fetch_array($max);
				$cart_id=$row[0];
				$product_id = $_SESSION['giohang'][$i]['id'];

				$soluong = $_SESSION['giohang'][$i]['soluong'];

				$product = mysqli_query($connect,"SELECT Gia,SL FROM chitietsanpham WHERE ID = ".$product_id);
				$row = mysqli_fetch_array($product);
				$price = $row['Gia'];
				$result1 = mysqli_query($connect,"INSERT INTO cart_info(Cart_ID,ChiTiet_ID,SoLuong,Gia) VALUES ('".$cart_id."','".$product_id."','".$soluong."','".$price."') ");
				if ((count($row['SL']) > 0)) {
								
					$c =	$row['SL'];
					$t = (int)$row['SL'] - $tongsoluong;

					// $tongsoluong = 3 , so luong trong mysql =100 =$c
					// 
					$q = "UPDATE chitietsanpham SET SL ='.$t.'  WHERE ID = '".$product_id."' ";
					$result11 = mysqli_query($connect,$q);
					
				}
				
			}
			if ($result1 && result11 ) {
					
				for ($i=0; $i < count($_SESSION['giohang']) ; $i++) { 
					$query1 = mysqli_query($connect,"SELECT * FROM chitietsanpham WHERE ID = ".$_SESSION['giohang'][$i]['id']);
					$row_tongtien = mysqli_fetch_array($query1);
					$tongtien = $tongtien +($row_tongtien['Gia'] * $_SESSION['giohang'][$i]['soluong']);
				}
				 mysqli_query($connect,"INSERT INTO cart_sum(TongTien,TongSoLuong,Cart_ID) VALUES('".$tongtien."','".$tongsoluong."','".$cart_id."')");

				
			}
		}
	//}
	
}
echo "Success";
unset($_SESSION['giohang']);
header("Location:alltoy.php?page=0")
?>
