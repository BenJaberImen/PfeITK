<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="author" content="Bootstrap-ecommerce by Vosidiy">
<title>ITK POS</title>
<link rel="shortcut icon" type="image/x-icon" href="{{asset('pos/images/logos/squanchy.jpg')}}" >
<link rel="apple-touch-icon" sizes="180x180" href="{{asset('pos/images/logos/squanchy.jpg')}}">
<link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/images/logos/squanchy.jpg')}}">
<!-- jQuery -->
<!-- Bootstrap4 files-->
<link href="{{asset('pos/css/bootstrap.css')}}"rel="stylesheet" type="text/css"/>
<link href="{{asset('pos/css/ui.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('pos/fonts/fontawesome/css/fontawesome-all.min.css')}}" type="text/css" rel="stylesheet">
<link href="{{asset('pos/css/OverlayScrollbars.css')}}" type="text/css" rel="stylesheet"/>
<!-- Font awesome 5 -->
<style>
	.avatar {
  vertical-align: middle;
  width: 35px;
  height: 35px;
  border-radius: 50%;
}
.bg-default, .btn-default{
	background-color: #f2f3f8;
}
.btn-error{
	color: #ef5f5f;
}
</style>
<!-- custom style -->
</head>
<body>
    <script src="{{asset('pos/js/jquery-2.0.0.min.js')}}" type="text/javascript"></script>
<script src="{{asset('pos/js/bootstrap.bundle.min.js')}}" type="text/javascript"></script>
<script src="{{asset('pos/js/OverlayScrollbars.js')}}"type="text/javascript"></script>
<script>

	function fn_get_articles_by_cat(id){
		$.ajax({
			url : "/api/products/"+id,
			success:function(data){
				$('#articles_list').html("");
					for(var i=0;i<data.length;i++){
						var path = "{{ asset('cover') }}/"+data[i].cover;
						$('#articles_list').append('<div class="col-md-3">'+
							'<figure class="card card-product">'+
								'<span class="badge-new"> NEW </span>'+
								'<div class="img-wrap">'+
									'<img src="'+path+'">'+
									'<a class="btn-overlay" href="#"><i class="fa fa-search-plus"></i> Quick view</a>'+
								'</div>'+
								'<figcaption class="info-wrap">'+
									'<a href="#" class="title">'+data[i].libille+'</a>'+
									'<div class="action-wrap">'+
										'<a href="#" class="btn btn-primary btn-sm float-right"> <i class="fa fa-cart-plus"></i> Add </a>'+
										'<div class="price-wrap h5">'+
											'<span class="price-new">$'+data[i].prix_intial+'</span>'+
										'</div> '+
									'</div> '+
								'</figcaption>'+
							'</figure>'+
						'</div>');
					}
					
			},error:function(e){
				console.log(e)
			}
		})
	}

	$(document).ready(function(e){
		$.ajax({
			url : "/api/categories",
			success:function(data){
				$('#cat_list').html('<li class="nav-item">'+
                                    '<a class="nav-link active show" data-toggle="pill" onclick="fn_get_articles_by_cat(0)">'+
                                    '<i class="fa fa-tags"></i> All</a></li>')
				//var data = JSON.parse(response);
				for(var i=0;i<data.length;i++){
					$('#cat_list').append('<li class="nav-item">'+
                                    '<a class="nav-link" data-toggle="pill" onclick="fn_get_articles_by_cat('+data[i].id+')">'+
                                    '<i class="fa fa-tags "></i>  '+data[i].libelle+'</a></li>');
				}
				

			},error:function(e){
				console.log(e)
			}
		});
		fn_get_articles_by_cat(0);
	});

	$(function() {
	//The passed argument has to be at least a empty object or a object with your desired options
	//$("body").overlayScrollbars({ });
	$("#items").height(552);
	$("#items").overlayScrollbars({overflowBehavior : {
		x : "hidden",
		y : "scroll"
	} });
	$("#cart").height(445);
	$("#cart").overlayScrollbars({ });
});
</script>
</body>
</html>
