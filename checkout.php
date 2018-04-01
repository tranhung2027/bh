<?php  
@session_start();
if (isset($_POST['checkout'])) {
	$_SESSION['username'] = $_POST['txtname'];

}

if (isset($_SESSION['giohang'])) {
	if (isset($_GET['giamgiohang'])) {
		$id = $_GET['giamgiohang'];
		for ($i=0; $i < count($_SESSION['giohang']); $i++) { 
			if ($_SESSION['giohang'][$i]['id'] == $id) {
				$_SESSION['giohang'][$i]['soluong'] = $_SESSION['giohang'][$i]['soluong'] - 1; 
			}
		}
		header("Location:alltoy.php?page=0");
	}
	if (isset($_GET['tanggiohang'])) {
		$id = $_GET['tanggiohang'];
		for ($i=0; $i < count($_SESSION['giohang']) ; $i++) { 
			if ($_SESSION['giohang'][$i]['id'] == $id ) {
				$_SESSION['giohang'][$i]['soluong'] = $_SESSION['giohang'][$i]['soluong'] + 1;
			}
		}
		header("Location:checkout.php");
	}

	
}

?>
<?php require('Tool/function/function.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Grocery Store a Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Checkout :: w3layouts</title>
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Grocery Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="all" /> 
<!-- //font-awesome icons -->

<link href='//fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

</head>

<body>
	<!-- header -->
	<?php require 'Tool/header/header.php'; ?>

	<?php require 'Tool/header/header-logo.php'; ?>
	<!-- //header -->
	<!-- products-breadcrumb -->
	<div class="products-breadcrumb">
		<div class="container">
			<ul>
				<li><i class="fa fa-home" aria-hidden="true"></i><a href="index.php">Home</a><span>|</span></li>
				<li>Checkout</li>
			</ul>
		</div>
	</div>
	<!-- //products-breadcrumb -->
	<!-- banner -->
	<div class="banner">
		<?php require 'Tool/header/menu-left.php'; ?>
		<div class="w3l_banner_nav_right">
			<!-- about -->
			<div class="privacy about">
				<h3>Chec<span>kout</span></h3>
				
				<div class="checkout-right">
					<h4>Your shopping cart : <span> <?php if (isset($_SESSION['giohang'])) {
						echo count($_SESSION['giohang']);
					} ?> Products</span></h4>
					<table class="timetable_sub">
						<thead>
							<tr>
								<th>SL No.</th>	
								<th>Product</th>
								<th>Quality</th>
								<th>Product Name</th>
								
								<th>Price</th>
								<th>Remove</th>
							</tr>
						</thead>
						<tbody>
							<!-- content -->
							<?php  
							if (isset($_SESSION['giohang'])) {
								# code...

								for ($i=0; $i < count($_SESSION['giohang']) ; $i++) { 
									$query=mysqli_query($connect,"SELECT * FROM chitietsanpham WHERE ID = ".$_SESSION['giohang'][$i]['id']);
									$row_giohang = mysqli_fetch_array($query);

									?>
									<tr class="rem1">
										<td class="invert"><?php echo $i +1 ?></td>
										<td class="invert-image" style="width: 260px;height: 154px"><a href="single.php"><img src="Tool/admins/upload/<?php echo $row_giohang['Anh'] ?>" style="width: 100%;height: 100%" alt=" " class="img-responsive"></a></td>
										<td class="invert">
											<div class="quantity"> 
												<div class="quantity-select">                           
													<a href="?page=0&giamgiohang=<?php echo $_SESSION['giohang'][$i]['id'] ?>"><div class="entry value-minus">&nbsp;</div></a>
													<div class="entry value"><span><?php echo $_SESSION['giohang'][$i]['soluong'] ?></span></div>
													<a href="?page=0&tanggiohang=<?php echo $_SESSION['giohang'][$i]['id'] ?>"><div class="entry value-plus active">&nbsp;</div></a>
												</div>
											</div>
										</td>
										<td class="invert"><?php echo $row_giohang['TenSP'] ?></td>

										<td class="invert">$ <?php echo $row_giohang["Gia"] ?> .00</td>
										<td class="invert">
											<?php  
													foreach ($_SESSION['giohang'] as $key => $value) {
														# code...
													
											?>
											<div class="rem">
												<a href="Tool/admins/giohang/xoa.php?action=delete&xoagiohang=<?php echo $value['id'] ?>" class="close1"> </a>
											</div>
											<?php } ?>
										</td>
									</tr>
									<?php 
								} 
							}
							else{
								echo "<script>alert(0)</script>";
							}
							?>
							<!-- end content -->
						</tbody>
						
					</table>

					

					<input type="text" class="button form-control btn btn-success" value="Tổng= $ <?php echo $tongtien ?>" style="width: 156px;float: right;">
					
				</div>
				<div class="clearfix"></div>
				<div class="checkout-left">	
					<div class="col-md-6 checkout-left-basket">
						<a href="alltoy.php?page=0"><h4>Continue to basket</h4></a>

						<ul>
							<?php  
							if (isset($_SESSION['giohang'])) {
								# code...

								for ($i=0; $i < count($_SESSION['giohang']) ; $i++) { 
									$query=mysqli_query($connect,"SELECT * FROM chitietsanpham WHERE ID = ".$_SESSION['giohang'][$i]['id']);
									$row_giohang = mysqli_fetch_array($query);

									?>
									<li><?php echo $row_giohang['TenSP'] ?>
										<i></i>-
										<li>Số Lượng<i>-</i>
											<span><?php echo $_SESSION['giohang'][$i]['soluong'] ?></span>
										</li>-
										<span>$ <?php echo $row_giohang["Gia"] ?> .00 </span>
									</li>

									
									<?php  
								}
							}
							?>
							<li>Tổng<i>-</i> <span>$ <?php echo $tongtien ?> .00</span></li>
						</ul>
					</div>
					<div class="col-md-6 address_form_agile">
						<h4>Add a new Details</h4>
					<form action="checkout_send.php" method="post">
						
							<div class="form-group">
								<label for="">Name</label>
								<input type="text" class="form-control" id="txtname" name="txtname"   placeholder="Enter Full Name">
								
							</div>
							<div class="form-group">
								<label for="">Phone</label>
								<input type="text" class="form-control" id="txtnum" name="txtnum" placeholder="Number">
							</div>
							
							
						
						<input type="submit" class="btn btn-primary button button-small" name="submit_send" value="CheckOut" >
					</form>

						<div class="checkout-right-basket">
							<a href="payment.php">Make a Payment <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
						</div>
					</div>
					
					<div class="clearfix"> </div>
					
				</div>

			</div>
			<!-- //about -->
		</div>
		<div class="clearfix"></div>
	</div>
	<!-- //banner -->

	<!-- newsletter -->
	<?php require 'Tool/footer/newsletter.php'; ?>
	<!-- //newsletter -->
	<!-- footer -->
	<?php require 'Tool/footer/footer.php'; ?>
	<!-- //footer -->
	<!-- js -->
	<script src="js/jquery-1.11.1.min.js"></script>
	<!--quantity-->
	<script>
		$('.value-plus').on('click', function(){
			var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)+1;
			divUpd.text(newVal);
		});

		$('.value-minus').on('click', function(){
			var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)-1;
			if(newVal>=1) divUpd.text(newVal);
		});
	</script>
	<!--quantity-->
	<script>$(document).ready(function(c) {
		$('.close1').on('click', function(c){
			$('.rem1').fadeOut('slow', function(c){
				$('.rem1').remove();
			});
		});	  
	});
</script>
<script>$(document).ready(function(c) {
	$('.close2').on('click', function(c){
		$('.rem2').fadeOut('slow', function(c){
			$('.rem2').remove();
		});
	});	  
});
</script>
<script>$(document).ready(function(c) {
	$('.close3').on('click', function(c){
		$('.rem3').fadeOut('slow', function(c){
			$('.rem3').remove();
		});
	});	  
});
</script>

<!-- //js -->
<!-- script-for sticky-nav -->
<script>
	$(document).ready(function() {
		var navoffeset=$(".agileits_header").offset().top;
		$(window).scroll(function(){
			var scrollpos=$(window).scrollTop(); 
			if(scrollpos >=navoffeset){
				$(".agileits_header").addClass("fixed");
			}else{
				$(".agileits_header").removeClass("fixed");
			}
		});
		
	});
</script>
<!-- //script-for sticky-nav -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script>
	$(document).ready(function(){
		$(".dropdown").hover(            
			function() {
				$('.dropdown-menu', this).stop( true, true ).slideDown("fast");
				$(this).toggleClass('open');        
			},
			function() {
				$('.dropdown-menu', this).stop( true, true ).slideUp("fast");
				$(this).toggleClass('open');       
			}
			);
	});
</script>
<!-- here stars scrolling icon -->
<script type="text/javascript">
	$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
				*/
				
				$().UItoTop({ easingType: 'easeOutQuart' });
				
			});
		</script>
		<!-- //here ends scrolling icon -->
		<script src="js/minicart.js"></script>
		<script>
			paypal.minicart.render();

			paypal.minicart.cart.on('checkout', function (evt) {
				var items = this.items(),
				len = items.length,
				total = 0,
				i;

			// Count the number of each item in the cart
			for (i = 0; i < len; i++) {
				total += items[i].get('quantity');
			}

			if (total < 3) {
				alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
				evt.preventDefault();
			}
		});

	</script>
</body>
</html>