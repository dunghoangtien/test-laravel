
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="public/source/public/source/images/favicon.png">
	<title>
		Welcome to FlatShop
	</title>
	<base href="{{asset('')}}">
	<link href="public/source/css/bootstrap.css" rel="stylesheet">
	<link href='public/source/http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,700,500italic,100italic,100' rel='stylesheet' type='text/css'>
	<link href="public/source/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="public/source/css/flexslider.css" type="text/css" media="screen"/>
	<link href="public/source/css/style.css" rel="stylesheet" type="text/css">
    <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js">
</script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js">
</script>
<![endif]-->
</head>
<body>
	<div class="wrapper">
		<div class="header">
			
			<div class="clearfix">
			</div>
			<div class="page-index">
				<div class="container">
					<p>
						Home - Products Details
					</p>
				</div>
			</div>
		</div>
		<div class="clearfix">
		</div>
		<div class="container_fullwidth">
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<div class="products-details">
							<div class="preview_image">
								<div class="preview-small">
									<img id="zoom_03" src="public/source/images/products/medium/{!! $product_sp->image_lon !!}" data-zoom-image="public/source/images/products/Large/{!! $product_sp->image_lon !!}" alt="">
								</div>
								<div class="thum-image">
									<ul id="gallery_01" class="prev-thum">
										@foreach($products as $sp)
										<li>
											<a href="" data-image="public/source/images/products/medium/products-01.jpg" data-zoom-image="public/source/images/{!! $sp->name !!}">
												<img src="public/source/images/products/thum/{!! $sp->name !!}" alt="">
											</a>
										</li>
										@endforeach
									</ul>
									<a class="control-left" id="thum-prev" href="public/source/javascript:void(0);">
										<i class="fa fa-chevron-left">
										</i>
									</a>
									<a class="control-right" id="thum-next" href="public/source/javascript:void(0);">
										<i class="fa fa-chevron-right">
										</i>
									</a>
								</div>
							</div>
							<div class="products-description">
								<h5 class="name">
									Lincoln Corner Unit Products
								</h5>
								<p>
									<img alt="" src="public/source/images/star.png">
									<a class="review_num" href="#">
										02 Review(s)
									</a>
								</p>
								<p>
									{!! $product_sp->name !!}
									<span class=" light-red">
										In Stock
									</span>
								</p>
								<p>
									{!! $product_sp->chitietsanpham !!}
								</p>
								<hr class="border">
								<div class="price">
									
									<span class="new_price">
										{!! $product_sp->price !!}
										<sup>
											Đ
										</sup>
									</span>
									<span class="old_price">
										{!! $product_sp->sale_price !!}
										<sup>
											Đ
										</sup>
									</span>
								</div>
								<hr class="border">
								<div class="wided">
									<div class="qty">
										
										<button type="button" class="btn btn-default">button</button>
										<button type="button" class="btn btn-default">button</button>
										<button type="button" class="btn btn-default">button</button>
									</div>
								</div>
								<div class="button_group">
									<button class="button" >
										Add To Cart
									</button>
									<button class="button compare">
										<i class="fa fa-exchange">
										</i>
									</button>
									<button class="button favorite">
										<i class="fa fa-heart-o">
										</i>
									</button>
									<button class="button favorite">
										<i class="fa fa-envelope-o">
										</i>
									</button>
								</div>
							</div>
							<div class="clearfix">
							</div>
							<hr class="border">
							<img src="public/source/images/share.png" alt="" class="pull-right">
						</div>
					</div>
					
					<!-- Bootstrap core JavaScript==================================================-->
					<script type="text/javascript" src="public/source/js/jquery-1.10.2.min.js">
					</script>
					<script type="text/javascript" src="public/source/js/bootstrap.min.js">
					</script>
					<script defer src="public/source/js/jquery.flexslider.js">
					</script>
					<script type="text/javascript" src="public/source/js/jquery.carouFredSel-6.2.1-packed.js">
					</script>
					<script type="text/javascript" src='public/source/js/jquery.elevatezoom.js'>
					</script>
					<script type="text/javascript" src="public/source/js/script.min.js" >

					</script>
					<script src="js/jquery-1.11.1.min.js"></script>
				</body>
				</html>