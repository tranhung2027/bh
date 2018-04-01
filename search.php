<?php @session_start(); ?>
<?php  
require"Tool/function/function.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Story</title>
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Grocery Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<script src="js/bootstrap.min.js"></script>
<!-- <script src="js/jquery2.js"></script> -->



<link rel="stylesheet" href="css/custom.css">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="all" /> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery-3.3.1.min.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
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
</head>

<body>
	<!-- header -->
	<?php require 'Tool/header/header.php'; ?>
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
	<?php require 'Tool/header/header-logo.php'; ?>
	<!-- //header -->
	<!-- products-breadcrumb -->
	<div class="products-breadcrumb">
		<div class="container">
			<ul>
				<?php
				$q=mysqli_query($connect,"SELECT * FROM mathang ");
				$r=mysqli_fetch_array($q);  
				?>
				<li><i class="fa fa-home" aria-hidden="true"></i><a href="index.php">Home</a><span>|</span></li>
				<li><?php echo $r["TenMH"] ?></li>
				<?php  ?>
			</ul>
		</div>
	</div>
	<!-- //products-breadcrumb -->
	<!-- banner -->
	<div class="banner">
		<?php require 'Tool/header/menu-left.php'; ?>
		<div class="w3l_banner_nav_right">
			<div class="w3l_banner_nav_right_banner7">
				<h3>Sản phầm tốt nhất<span class="blink_me"></span></h3>
			</div>
			<div class="w3l_banner_nav_right_banner3_btm">
				<div class="col-md-4 w3l_banner_nav_right_banner3_btml">
					<div class="view view-tenth">
						<img src="images/5973753600_0462782234_b-400x266.jpg" alt=" " class="img-responsive" />
						<div class="mask">
							<h4>Cửa Hàng Đồ Chơi</h4>

							<p>wellcome</p>
						</div>
					</div>
					<h4>Chất Lượng</h4>
					<ol>
						<li style="color: #B4FF90">Chất Lượng</li>
						<li style="color: #B4FF90">Bền</li>
						<li style="color: #B4FF90">Đẹp</li>
					</ol>
				</div>
				<div class="col-md-4 w3l_banner_nav_right_banner3_btml">
					<div class="view view-tenth">
						<img src="images/gau-bong-gb03-21-400x266.jpg" alt=" " class="img-responsive" />
						<div class="mask">
							<h4>Cửa Hàng Đồ Chơi</h4>
							<p>Wellcome</p>
						</div>
					</div>
					<h4>Kiểu Loại</h4>
					<ol>
						<li style="color: #B4FF90">đầy đủ</li>
						<li style="color: #B4FF90">phong phú</li>
						<li style="color: #B4FF90">uy tín</li>
					</ol>
				</div>
				<div class="col-md-4 w3l_banner_nav_right_banner3_btml">
					<div class="view view-tenth">
						<img src="images/Snowman-Blog-400x266.jpeg" alt=" " class="img-responsive" />
						<div class="mask">
							<h4>Cửa Hàng Đồ Chơi</h4>
							<p>wellcome</p>
						</div>
					</div>
					<h4>uy tín</h4>
					<ol>
						<li style="color: #B4FF90">...</li>
						<li style="color: #B4FF90">...</li>
						<li style="color: #B4FF90">...</li>
					</ol>
				</div>




			</div>
		</div>
		<?php  
		
		if (isset($_REQUEST['ok'])) {
			//$sub = $_REQUEST['ok'];
			
			//echo $sub;
			if (empty($_GET['txt_search']) && !isset($_GET['pagi']))  {
				
				?>

				<section class="container">
					<div class="banner_bottom">

						<div class="wthree_banner_bottom_left_grid_sub">

						</div>

						<div class="wthree_banner_bottom_left_grid_sub1">
							<div class="clearfix"></div>
							<br>
							<h3 style="text-align: center;margin: 10px 0 10px 0"><?php echo " chưa có từ khóa tìm kiếm "; ?></h3>
							<br>
							<div class="clearfix"></div>

							<div class="col-md-4 wthree_banner_bottom_left">
								<div class="wthree_banner_bottom_left_grid">
									<img src="images/4_.jpg" alt=" " class="img-responsive" />
									<div class="wthree_banner_bottom_left_grid_pos">
										<h4>Discount Offer <span>25%</span></h4>
									</div>
								</div>
							</div>
							<div class="col-md-4 wthree_banner_bottom_left">
								<div class="wthree_banner_bottom_left_grid">
									<img src="images/5_.jpg" alt=" " class="img-responsive" />
									<div class="wthree_banner_btm_pos">
										<h3>introducing <span>best store</span> for <i>groceries</i></h3>
									</div>
								</div>
							</div>
							<div class="col-md-4 wthree_banner_bottom_left">
								<div class="wthree_banner_bottom_left_grid">
									<img src="images/6_.jpg" alt=" " class="img-responsive" />
									<div class="wthree_banner_btm_pos1">
										<h3>Save <span>Upto</span> $10</h3>
									</div>
								</div>
							</div>
							<div class="clearfix"> </div>
							

							
						</div>
						<div class="clearfix"> </div>
					</div>


				</section>
				<?php 
			}
			else { 
				$current = $_GET['pagi'];
				$search = addslashes($_POST['txt_search']);

				$num =4;
				//$start = $_REQUEST["pagi"] ;

				
				if (!isset($_REQUEST['pagi']) ) {
					$current = 1;
					echo $current;
					
					
				}
				else {
					$current = $_REQUEST['pagi'] ;
				}

				//echo $current;
				//$current = $_REQUEST['pagi'];
				//echo "cu".$current;
				//lay trang hien tai
				
				
				$start = $current - 1;
				$p = $start * $num;
				//echo  "a:".$p;
					//exit;
					//
				$query_search = "SELECT * FROM chitietsanpham WHERE TenSP LIKE '%$search%' LIMIT $p,$num";


				$sql_search = mysqli_query($connect,$query_search);
				$num_search = mysqli_num_rows($sql_search);
				//echo "b:".$num_search;

				$query_count = "SELECT * FROM chitietsanpham WHERE TenSP LIKE '%$search%' ";
				$sql_count = mysqli_query($connect,$query_count);
				$row_count = mysqli_num_rows($sql_count);
				//echo "count :".$row_count;


				?>

				<section class="container">
					<div class="w3ls_w3l_banner_nav_right_grid w3ls_w3l_banner_nav_right_grid_sub">
						<div class="clearfix"></div>
						<h3>Tìm Kiếm</h3>
						<!-- search -->

						<br>
						<div class="container">
							<div class="row" id="search">
								<form id="search-form" method="POST">
									<div class="form-group col-xs-2"></div>	
									<div class="form-group col-xs-9">
										<input class="form-control" name="get_search" type="text" placeholder="Search" onkeyup = "show_a(this.value)" />
									</div>
									<div class="form-group col-xs-2"></div>
									<!-- <div class="form-group col-xs-3">
										<button type="submit" class="btn btn-block btn-primary">Search</button>
									</div> -->
								</form>
							</div>
							<div class="row" id="filter">
								<form>
									<div class="form-group col-xs-2"></div>
									<div class="form-group col-sm-3 col-xs-6">
										<select data-filter="make" class="filter-make filter form-control">
											<option value="">Select Item</option>
											<option value="">Show All</option>
										</select>
									</div>
									<div class="form-group col-sm-3 col-xs-6">
										<select data-filter="model" class="filter-model filter form-control">
											<option value="">Select Name</option>
											<option value="">Show All</option>
										</select>
									</div>
									<!-- <div class="form-group col-sm-3 col-xs-6">
										<select data-filter="type" class="filter-type filter form-control">
											<option value="">Select Type</option>
											<option value="">Show All</option>
										</select>
									</div> -->
									<div class="form-group col-sm-3 col-xs-6">
										<select data-filter="price" class="filter-price filter form-control">
											<option value="">Select Price Range</option>
											<option value="">Show All</option>
										</select>
									</div>
									<div class="form-group col-sm-3 col-xs-2"></div>
								</form>
							</div>
							<div class="row" id="products">
								<p>ket qua tim kiem :<span id="show_1"></span></p>
							</div>
						</div>
						<script type="text/javascript">
							function show_a(str){
								if (str.length == 0) {
									document.getElementById("show_1").innerHTML = "";
									$(".HIDE").show(500);
									return;
								}
								else{
									var xmlhttp = new XMLHttpRequest();
									xmlhttp.onreadystatechange = function() {
										if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
											document.getElementById("show_1").innerHTML = xmlhttp.responseText;
											$(".HIDE").hide(500);
										}
									};
									
									xmlhttp.open("GET", "search_ajax.php?q=" + str, true);
									//alert(str);
									xmlhttp.send();
									
									
								}
							}
							

						</script>


						<!-- end search -->
						<?php


						?>
						<div class="w3ls_w3l_banner_nav_right_grid1 HIDE">


							<?php
							if (isset($_GET["q"])) {
								echo "string";
							}
							if ( $num_search>0 && $search != "") {

								echo "<h6>$row_count kết quả trả về với từ khóa là : <b>$search</b></h6> ";

								while ($row1 = mysqli_fetch_array($sql_search)) {
									$i=0;

									?>
									<div class="col-md-3 w3ls_w3l_banner_left" id="aa">
										<div class="hover14 column">
											<div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
												<div class="agile_top_brand_left_grid_pos">
													<img src="images/offer.png" alt=" " class="img-responsive" />
												</div>
												<div class="agile_top_brand_left_grid1">
													<figure>
														<div class="snipcart-item block">
															<div class="snipcart-thumb" style="text-align: center;">
																<a href="single.php?id_single=<?php echo $row1["ID"] ?>"><img src="Tool/admins/upload/<?php echo $row1["Anh"] ?>" alt=" " class="img-responsive" /></a>
																<p><?php echo $row1["TenSP"] ?></p>
																<h4>$<?php echo $row1["Gia"] ?>.00 <!-- <span>$10.00</span> --></h4>
															</div>
															<div class="snipcart-details">
																<a href="?page=0&themgiohang=<?php echo $row1['ID'] ?>"><input type="submit" class="button" value="Add To cart"></a>
															</div>
														</div>
													</figure>
												</div>
											</div>
										</div>
									</div>

									<?php

									if($i % 4 )
									{

										?>
										<div class="clearfix"></div>
										<?php
									}
									?>

									<?php } ?>

								</div>
								<!-- <div class="clearfix"></div> -->
								<?php 
								}//if

								?>

							</div>
							
							<div class='clearfix'></div>
							<nav aria-label='Page navigation example' class="HIDE">
								<ul class='pagination justify-content-center'>

									<?php 

									if (isset($_GET['pagi']) ) {
										$current = $_GET['pagi'];

										if ($current > 1) {
										# code...

											$prev_page = $_REQUEST['pagi'] -1; 
											?>
											<li class='page-item '>
												<a class="page-link" href="?txt_search=<?php echo $search ?>&ok&pagi=<?php echo $prev_page ?>" tabindex="-1">Previous</a>
											</li>
											<?php
										}
										else{
											echo"<li class='page-item disabled'>";
											echo"<a class='page-link'  tabindex='-1'>Previous</a>";
											echo"</li>";
										} 

										?>

										<?php

										$limit = ceil($row_count / $num);
										for ($i=1; $i <= $limit ; $i++) { 
											echo"<li class='page-item'><a class='page-link' href='?txt_search=".$search."&ok&pagi=".$i."'>".$i."</a></li>";
										}




										$check = $p + $num;
							    		//echo $limit;
										if ($current < $limit && $limit > 1) {

											$next_page = $_REQUEST['pagi'] +1;  
											?>

											<li class="page-item">
												<a class="page-link" href="?txt_search=<?php echo $search ?>&ok&pagi=<?php echo $next_page ?>">Next</a>
											</li>

											<?php
										}
										else{ ?>

										<li class="page-item disabled">
											<a class="page-link " >Next</a>
										</li>
										<?php

									}
								}
								?>
							</ul>
						</nav>
						
					</section>

		<?php
					
			}
		}

			?>

			<!-- </div> -->
			<!-- <div class="clearfix"></div> -->
		</div>
		<!-- //banner -->
		<!-- newsletter -->
		<?php require 'Tool/status.php' ;
			
		?>


		<?php require 'Tool/footer/newsletter.php'; ?>
		<!-- //newsletter -->
		<!-- footer -->
		<?php require 'Tool/footer/footer.php'; ?>
		<!-- //footer -->
		<!-- Bootstrap Core JavaScript -->
		<!-- <script src="Tool/function/function.js"></script> -->
		<script>
			$(document).ready(function(){
			// $("body").delegate(".add_cart","click",function(event){
			// 	event.preventDefault();
			// 	var data_id = $(this).attr("id");
			// 	$.ajax({
			// 		url:"Tool/function/action_ajax.php",
			// 		method:"POST",
			// 		data:{addProduct:1,proID:data_id},
			// 		success:function(data){
			// 			alert(data);
			// 		}
			// 	})
			// });
		});
	</script>


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
				// $('body').delegate("#add_cart","click",function(event){
				// 	event.preventDefault();
				// 	var data_id = $(this).attr("data-id");
				// 	$.ajax({
				// 		url:"Tool/header/action_header.php",
				// 		method="POST",
				// 		data:{addProduct:1,proID:data_id},
				// 		success:function(data){
				// 			alert(data);
				// 		}
				// 	})
				// });

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