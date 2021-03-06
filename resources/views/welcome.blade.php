@extends('layouts.pos')

@section('content')


            <section class="header-main">
                <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3">
                <div class="brand-wrap">
                    <img class="logo" src="{{asset('pos/images/logos/squanchy.jpg')}}">
                    <h2 class="logo-text">ITK POS</h2>
                </div> <!-- brand-wrap.// -->
                </div>
                <div class="col-lg-6 col-sm-6">
                    <form action="#" class="search-wrap">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search">
                            <div class="input-group-append">
                              <button class="btn btn-primary" type="submit">
                                <i class="fa fa-search"></i>
                              </button>
                            </div>
                        </div>
                    </form> <!-- search-wrap .end// -->
                </div> <!-- col.// -->
                <div class="col-lg-3 col-sm-6">
                    <div class="widgets-wrap d-flex justify-content-end">
                        <div class="widget-header">
                            <a href="#" class="icontext">
                                <a href="#" class="btn btn-primary m-btn m-btn--icon m-btn--icon-only">
                                                                        <i class="fa fa-home"></i>
                                                                    </a>
                            </a>
                        </div> <!-- widget .// -->

                        <div class="widget-header dropdown">
                            <a href="#" class="ml-3 icontext" data-toggle="dropdown" data-offset="20,10">
                                <img src="{{asset('pos/images/avatars/bshbsh.png')}}" class="avatar" alt="">
                            </a>
                            <div class="col-lg-2 col-sm-6">
                                @if (Route::has('login'))
                                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                    @auth
                                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                                    @else
                                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>


                                    @endauth
                                </div>
                            @endif
                            </div> <!--  dropdown-menu .// -->
                        </div> <!-- widget  dropdown.// -->
                    </div>	<!-- widgets-wrap.// -->
                </div> <!-- col.// -->
            </div> <!-- row.// -->
                </div> <!-- container.// -->

            </section>
            <!-- ========================= SECTION CONTENT ========================= -->
            <section class="section-content padding-y-sm bg-default ">
            <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 card padding-y-sm card ">
                    <ul class="nav bg radius nav-pills nav-fill mb-3 bg" role="tablist" id="cat_list">
                               <!-- 
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#nav-tab-paypal">
                                    <i class="fa fa-tags "></i>  Category 1</a></li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#nav-tab-bank">
                                    <i class="fa fa-tags "></i>  Category 2</a></li>
                                    <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#nav-tab-bank">
                                    <i class="fa fa-tags "></i>  Category 3</a></li>
                                    <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#nav-tab-bank">
                                    <i class="fa fa-tags "></i>  Category 4</a></li>
                                    <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#nav-tab-bank">
                                    <i class="fa fa-tags "></i>  Category 5</a></li>-->
            </ul>
            <span   id="items">
            <div class="row" id="articles_list">
                <!--<div class="col-md-3">
                    <figure class="card card-product">
                        <span class="badge-new"> NEW </span>
                        <div class="img-wrap">
                            <img src="{{asset('pos/images/items/3.jpg')}}">
                            <a class="btn-overlay" href="#"><i class="fa fa-search-plus"></i> Quick view</a>
                        </div>
                        <figcaption class="info-wrap">
                            <a href="#" class="title">Good item name</a>
                            <div class="action-wrap">
                                <a href="#" class="btn btn-primary btn-sm float-right"> <i class="fa fa-cart-plus"></i> Add </a>
                                <div class="price-wrap h5">
                                    <span class="price-new">$1280</span>
                                </div> 
                            </div> 
                        </figcaption>
                    </figure>
                </div> -->
            </div>
            
            <!-- row.// -->


            </span>
                </div>
                <div class="col-md-4">
            <div class="card">
                <span id="cart">
            <table class="table table-hover shopping-cart-wrap">
            <thead class="text-muted">
            <tr>
              <th scope="col">Item</th>
              <th scope="col" width="120">Qty</th>
              <th scope="col" width="120">Price</th>
              <th scope="col" class="text-right" width="200">Delete</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>
            <figure class="media">
                <div class="img-wrap"><img src="{{asset('pos/images/items/1.jpg')}}" class="img-thumbnail img-xs"></div>
                <figcaption class="media-body">
                    <h6 class="title text-truncate">Product name </h6>
                </figcaption>
            </figure>
                </td>
                <td class="text-center">
                    <div class="m-btn-group m-btn-group--pill btn-group mr-2" role="group" aria-label="...">
                                                                                    <button type="button" class="m-btn btn btn-default"><i class="fa fa-minus"></i></button>
                                                                                    <button type="button" class="m-btn btn btn-default" disabled>3</button>
                                                                                    <button type="button" class="m-btn btn btn-default"><i class="fa fa-plus"></i></button>
                                                                                </div>
                </td>
                <td>
                    <div class="price-wrap">
                        <var class="price">$145</var>
                    </div> <!-- price-wrap .// -->
                </td>
                <td class="text-right">
                <a href="" class="btn btn-outline-danger"> <i class="fa fa-trash"></i></a>
                </td>
            </tr>
            <tr>
                <td>
            <figure class="media">
                <div class="img-wrap"><img src="{{asset('pos/images/items/5.jpg')}}" class="img-thumbnail img-xs"></div>
                <figcaption class="media-body">
                    <h6 class="title text-truncate">Product name  </h6>
                </figcaption>
            </figure>
                </td>
                <td class="text-center">
                            <div class="m-btn-group m-btn-group--pill btn-group mr-2" role="group" aria-label="...">
                                                                                    <button type="button" class="m-btn btn btn-default"><i class="fa fa-minus"></i></button>
                                                                                    <button type="button" class="m-btn btn btn-default" disabled>1</button>
                                                                                    <button type="button" class="m-btn btn btn-default"><i class="fa fa-plus"></i></button>
                                                                                </div>
                </td>
                <td>
                    <div class="price-wrap">
                        <var class="price">$35</var>
                    </div> <!-- price-wrap .// -->
                </td>
                <td class="text-right">
                <a href="" class="btn btn-outline-danger btn-round"> <i class="fa fa-trash"></i></a>
                </td>
            </tr>
            <tr>
                <td>
            <figure class="media">
                <div class="img-wrap"><img src="{{asset('pos/images/items/4.jpg')}}" class="img-thumbnail img-xs"></div>
                <figcaption class="media-body">
                    <h6 class="title text-truncate">Product name  </h6>
                </figcaption>
            </figure>
                </td>
                <td class="text-center">
                            <div class="m-btn-group m-btn-group--pill btn-group mr-2" role="group" aria-label="...">
                                                                                    <button type="button" class="m-btn btn btn-default"><i class="fa fa-minus"></i></button>
                                                                                    <button type="button" class="m-btn btn btn-default" disabled>5</button>
                                                                                    <button type="button" class="m-btn btn btn-default"><i class="fa fa-plus"></i></button>
                                                                                </div>
                </td>
                <td>
                    <div class="price-wrap">
                        <var class="price">$45</var>
                    </div> <!-- price-wrap .// -->
                </td>
                <td class="text-right">
                    <a href="" class="btn btn-outline-danger btn-round"> <i class="fa fa-trash"></i></a>
                </td>
            </tr>
            <tr>
                <td>
            <figure class="media">
                <div class="img-wrap"><img src="{{asset('pos/images/items/2.jpg')}}" class="img-thumbnail img-xs"></div>
                <figcaption class="media-body">
                    <h6 class="title text-truncate">Product name  </h6>
                </figcaption>
            </figure>
                </td>
                <td class="text-center">
                            <div class="m-btn-group m-btn-group--pill btn-group mr-2" role="group" aria-label="...">
                                                                                    <button type="button" class="m-btn btn btn-default"><i class="fa fa-minus"></i></button>
                                                                                    <button type="button" class="m-btn btn btn-default" disabled>2</button>
                                                                                    <button type="button" class="m-btn btn btn-default"><i class="fa fa-plus"></i></button>
                                                                                </div>
                </td>
                <td>
                    <div class="price-wrap">
                        <var class="price">$45</var>
                    </div> <!-- price-wrap .// -->
                </td>
                <td class="text-right">
                    <a href="" class="btn btn-outline-danger btn-round"> <i class="fa fa-trash"></i></a>
                </td>
            </tr>
            <tr>
                <td>
            <figure class="media">
                <div class="img-wrap"><img src="{{asset('pos/images/items/3.jpg')}}" class="img-thumbnail img-xs"></div>
                <figcaption class="media-body">
                    <h6 class="title text-truncate">Product name  </h6>
                </figcaption>
            </figure>
                </td>
                <td class="text-center">
                            <div class="m-btn-group m-btn-group--pill btn-group mr-2" role="group" aria-label="...">
                                                                                    <button type="button" class="m-btn btn btn-default"><i class="fa fa-minus"></i></button>
                                                                                    <button type="button" class="m-btn btn btn-default" disabled>1</button>
                                                                                    <button type="button" class="m-btn btn btn-default"><i class="fa fa-plus"></i></button>
                                                                                </div>
                </td>
                <td>
                    <div class="price-wrap">
                        <var class="price">$45</var>
                    </div> <!-- price-wrap .// -->
                </td>
                <td class="text-right">
                    <a href="" class="btn btn-outline-danger btn-round"> <i class="fa fa-trash"></i></a>
                </td>
            </tr>
            </tbody>
            </table>
            </span>
            </div> <!-- card.// -->
            <div class="box">
            <dl class="dlist-align">
              <dt>Tax: </dt>
              <dd class="text-right">12%</dd>
            </dl>
            <dl class="dlist-align">
              <dt>Discount:</dt>
              <dd class="text-right"><a href="#">0%</a></dd>
            </dl>
            <dl class="dlist-align">
              <dt>Sub Total:</dt>
              <dd class="text-right">$215</dd>
            </dl>
            <dl class="dlist-align">
              <dt>Total: </dt>
              <dd class="text-right h4 b"> $215 </dd>
            </dl>
            <div class="row">
                <div class="col-md-6">
                    <a href="#" class="btn  btn-default btn-error btn-lg btn-block"><i class="fa fa-times-circle "></i> Annuler </a>
                </div>
                <div class="col-md-6">
                    <a href="#" class="btn  btn-primary btn-lg btn-block"><i class="fa fa-shopping-bag"></i> Charge </a>
                </div>
            </div>
            </div> <!-- box.// -->
                </div>
            </div>
            </div><!-- container //  -->

                </div>




