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
