@extends('backend/layouts/main')
@section('css')
    <!--BOOTSTRAP-DATERANGEPICKER CSS-->
    <link rel="stylesheet" href="../assets/plugins/bootstrap-daterangepicker/daterangepicker.css">
    <!-- TIME PICKER CSS -->
    <link href="../assets/plugins/time-picker/jquery.timepicker.css" rel="stylesheet"/>

    <!-- DATE PICKER CSS -->
    <link href="../assets/plugins/date-picker/spectrum.css" rel="stylesheet"/>
    <style>
        /*.tab-content i{*/
        /*    color: white !important;*/
        /*}*/
    </style>
@endsection
@section('content')
    <div class="app-content">
        <div class="side-app">

            <div class="page-header">
                <div>
                    <h1 class="page-title">Shop</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">E-Commerce</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Shop</li>
                    </ol>
                </div>
                <div class="d-flex  ml-auto header-right-icons header-search-icon">
                    <div class="dropdown d-sm-flex">
                        <a href="#" class="nav-link icon" data-toggle="dropdown">
                            <i class="fe fe-search"></i>
                        </a>
                        <div class="dropdown-menu header-search dropdown-menu-left">
                            <div class="input-group w-100 p-2">
                                <input type="text" class="form-control " placeholder="Search....">
                                <div class="input-group-append ">
                                    <button type="button" class="btn btn-primary ">
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div><!-- SEARCH -->
                    <div class="dropdown d-md-flex">
                        <a class="nav-link icon full-screen-link nav-link-bg">
                            <i class="fe fe-maximize fullscreen-button"></i>
                        </a>
                    </div><!-- FULL-SCREEN -->
                    <div class="dropdown d-md-flex notifications">
                        <a class="nav-link icon" data-toggle="dropdown">
                            <i class="fe fe-bell"></i>
                            <span class="nav-unread badge badge-success badge-pill">2</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                            <div class="notifications-menu">
                                <a class="dropdown-item d-flex pb-3" href="#">
                                    <div class="fs-16 text-success mr-3">
                                        <i class="fa fa-thumbs-o-up"></i>
                                    </div>
                                    <div class="">
                                        <strong>Someone likes our posts.</strong>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex pb-3" href="#">
                                    <div class="fs-16 text-primary mr-3">
                                        <i class="fa fa-commenting-o"></i>
                                    </div>
                                    <div class="">
                                        <strong>3 New Comments.</strong>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex pb-3" href="#">
                                    <div class="fs-16 text-danger mr-3">
                                        <i class="fa fa-cogs"></i>
                                    </div>
                                    <div class="">
                                        <strong>Server Rebooted</strong>
                                    </div>
                                </a>
                            </div>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item text-center">View all Notification</a>
                        </div>
                    </div><!-- NOTIFICATIONS -->
                    <div class="dropdown d-md-flex message">
                        <a class="nav-link icon text-center" data-toggle="dropdown">
                            <i class="fe fe-mail"></i>
                            <span class="nav-unread badge badge-danger badge-pill">3</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                            <div class="message-menu">
                                <a class="dropdown-item d-flex pb-3" href="#">
                                    <span class="avatar avatar-md brround mr-3 align-self-center cover-image" data-image-src="../assets/images/users/1.jpg"></span>
                                    <div>
                                        <strong>Madeleine</strong> Hey! there I' am available....
                                        <div class="small text-muted">
                                            3 hours ago
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex pb-3" href="#">
                                    <span class="avatar avatar-md brround mr-3 align-self-center cover-image" data-image-src="../assets/images/users/12.jpg"></span>
                                    <div>
                                        <strong>Anthony</strong> New product Launching...
                                        <div class="small text-muted">
                                            5 hour ago
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex pb-3" href="#">
                                    <span class="avatar avatar-md brround mr-3 align-self-center cover-image" data-image-src="../assets/images/users/4.jpg"></span>
                                    <div>
                                        <strong>Olivia</strong> New Schedule Realease......
                                        <div class="small text-muted">
                                            45 mintues ago
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex pb-3" href="#">
                                    <span class="avatar avatar-md brround mr-3 align-self-center cover-image" data-image-src="../assets/images/users/15.jpg"></span>
                                    <div>
                                        <strong>Sanderson</strong> New Schedule Realease......
                                        <div class="small text-muted">
                                            2 days ago
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item text-center">See all Messages</a>
                        </div>
                    </div><!-- MESSAGE-BOX -->
                    <div class="dropdown profile-1">
                        <a href="#" data-toggle="dropdown" class="nav-link pr-2 leading-none d-flex">
										<span>
											<img src="../assets/images/users/10.jpg" alt="profile-user" class="avatar  profile-user brround cover-image">
										</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                            <div class="drop-heading">
                                <div class="text-center">
                                    <h5 class="text-dark mb-0">Elizabeth Dyer</h5>
                                    <small class="text-muted">Administrator</small>
                                </div>
                            </div>
                            <div class="dropdown-divider m-0"></div>
                            <a class="dropdown-item" href="#">
                                <i class="dropdown-icon mdi mdi-account-outline"></i> Profile
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="dropdown-icon  mdi mdi-settings"></i> Settings
                            </a>
                            <a class="dropdown-item" href="#">
                                <span class="float-right"></span>
                                <i class="dropdown-icon mdi  mdi-message-outline"></i> Inbox
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="dropdown-icon mdi mdi-comment-check-outline"></i> Message
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">
                                <i class="dropdown-icon mdi mdi-compass-outline"></i> Need help?
                            </a>
                            <a class="dropdown-item" href="login.html">
                                <i class="dropdown-icon mdi  mdi-logout-variant"></i> Sign out
                            </a>
                        </div>
                    </div>
                    <div class="dropdown d-md-flex header-settings">
                        <a href="#" class="nav-link icon " data-toggle="sidebar-right" data-target=".sidebar-right">
                            <i class="fe fe-align-right"></i>
                        </a>
                    </div><!-- SIDE-MENU -->
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <!-- ROW-1 OPEN -->
            <div class="row row-cards">
                <div class="col-xl-3 col-lg-4">
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <form class="shop__filter card">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        Categories
                                    </h3>
                                    <a class="text-right w-100"><i class="ti-plus"></i></a>
                                </div>
                                <div class="card-body pt-2">
                                    <div class="row gutters-xs">
                                        <ul class="side-menu w-100 category">
                                        </ul>
                                    </div>
                                </div>
                            </form>
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title"> PRINT TYPES</div>
                                </div>
                                <div class="card-body">
                                    <div class="custom-checkbox custom-control">
                                        <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="printtype-1" checked="">
                                        <label for="printtype-1" class="custom-control-label">Mens</label>
                                    </div>
                                    <div class="custom-checkbox custom-control">
                                        <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="printtype-2">
                                        <label for="printtype-2" class="custom-control-label">Womens</label>
                                    </div>
                                    <div class="custom-checkbox custom-control">
                                        <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="printtype-3">
                                        <label for="printtype-3" class="custom-control-label">Kids</label>
                                    </div>
                                    <div class="custom-checkbox custom-control">
                                        <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="printtype-4">
                                        <label for="printtype-4" class="custom-control-label">Others</label>
                                    </div>

                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title"> MATERIAS</div>
                                </div>
                                <div class="card-body">
                                    <div class="custom-checkbox custom-control">
                                        <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="materias-1" checked="">
                                        <label for="materias-1" class="custom-control-label">Mens</label>
                                    </div>
                                    <div class="custom-checkbox custom-control">
                                        <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="materias-2">
                                        <label for="materias-2" class="custom-control-label">Womens</label>
                                    </div>
                                    <div class="custom-checkbox custom-control">
                                        <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="materias-3">
                                        <label for="materias-3" class="custom-control-label">Kids</label>
                                    </div>
                                    <div class="custom-checkbox custom-control">
                                        <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="materias-4">
                                        <label for="materias-4" class="custom-control-label">Others</label>
                                    </div>

                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title"> COLORS</div>
                                </div>
                                <div class="card-body">
                                    <div class="custom-checkbox custom-control">
                                        <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="color-1" checked="">
                                        <label for="color-1" class="custom-control-label">Mens</label>
                                    </div>
                                    <div class="custom-checkbox custom-control">
                                        <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="color-2">
                                        <label for="color-2" class="custom-control-label">Womens</label>
                                    </div>
                                    <div class="custom-checkbox custom-control">
                                        <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-3">
                                        <label for="checkbox-3" class="custom-control-label">Kids</label>
                                    </div>
                                    <div class="custom-checkbox custom-control">
                                        <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-4">
                                        <label for="checkbox-4" class="custom-control-label">Others</label>
                                    </div>

                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title"> SIZE</div>
                                </div>
                                <div class="card-body">
                                    <div class="custom-checkbox custom-control">
                                        <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-1" checked="">
                                        <label for="checkbox-1" class="custom-control-label">Mens</label>
                                    </div>
                                    <div class="custom-checkbox custom-control">
                                        <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-2">
                                        <label for="checkbox-2" class="custom-control-label">Womens</label>
                                    </div>
                                    <div class="custom-checkbox custom-control">
                                        <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-3">
                                        <label for="checkbox-3" class="custom-control-label">Kids</label>
                                    </div>
                                    <div class="custom-checkbox custom-control">
                                        <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-4">
                                        <label for="checkbox-4" class="custom-control-label">Others</label>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- COL-END -->
                <div class="col-xl-9 col-lg-8">
                    <div class="card">
                        <div class="row card-body p-2">
                            <div class="col-sm-12 p-0">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search ...">
                                    <span class="input-group-append">
                                        <button class="btn btn-primary" type="button">Search</button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-xl-4">
                            <div class="card item-card">
                                <div class="ribbone">
                                    <div class="ribbon"><span>new</span></div>
                                </div>
                                <div class="product-grid6  card-body">
                                    <div class="product-image6">
                                        <a href="#">
                                            <img class="img-fluid" src="../assets/images/pngs/9.png" alt="img">
                                        </a>
                                    </div>
                                    <div class="product-content text-center">
                                        <div class="mb-2 text-warning">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h4 class="title"><a href="#">Mobile</a></h4>
                                        <div class="price">$16,599<span class="ml-4">$19,799</span></div>
                                    </div>
                                    <ul class="icons">
                                        <li><a href="" data-tip="Quick View"><i class="fa fa-search "></i></a></li>
                                        <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                        <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="card item-card">
											<span class="ribbon1">
												<span>25%</span>
											</span>
                                <div class="product-grid6 card-body">
                                    <div class="product-image6">
                                        <a href="#">
                                            <img class="img-fluid" src="../assets/images/pngs/1.png" alt="img">
                                        </a>
                                    </div>
                                    <div class="product-content text-center">
                                        <div class="text-center mb-2 text-warning">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h4 class="title"><a href="#">Laptop Bag</a></h4>
                                        <div class="price">$529<span class="ml-4">$799</span></div>
                                    </div>
                                    <ul class="icons">
                                        <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                                        <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                        <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="card item-card">
                                <div class="product-grid6  card-body">
                                    <div class="product-image6">
                                        <a href="#">
                                            <img class="img-fluid" src="../assets/images/pngs/7.png" alt="img">
                                        </a>
                                    </div>
                                    <div class="product-content text-center">
                                        <div class="text-center mb-2 text-warning">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                        </div>
                                        <h4 class="title"><a href="#">Desktop</a></h4>
                                        <div class="price">$25,239<span class="ml-4">$34,399</span></div>
                                    </div>
                                    <ul class="icons">
                                        <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                                        <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                        <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="card item-card">
											<span class="ribbon1">
												<span>25%</span>
											</span>
                                <div class="product-grid6  card-body">
                                    <div class="product-image6">
                                        <a href="#">
                                            <img class="img-fluid" src="../assets/images/pngs/2.png" alt="img">
                                        </a>
                                    </div>
                                    <div class="product-content text-center">
                                        <div class="text-center mb-2 text-warning">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h4 class="title"><a href="#">Ladies Shoes</a></h4>
                                        <div class="price">$345<span class="ml-4">$459</span></div>
                                    </div>
                                    <ul class="icons">
                                        <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                                        <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                        <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="card item-card">
                                <div class="product-grid6  card-body ">
                                    <div class="product-image6">
                                        <a href="#">
                                            <img class="img-fluid" src="../assets/images/pngs/4.png" alt="img">
                                        </a>
                                    </div>
                                    <div class="product-content text-center">
                                        <div class="text-center mb-2 text-warning">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h4 class="title"><a href="#">Flower Pot</a></h4>
                                        <div class="price">$277<span class="ml-4">$456</span></div>
                                    </div>
                                    <ul class="icons">
                                        <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                                        <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                        <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="card item-card">
                                <div class="product-grid6  card-body">
                                    <div class="product-image6">
                                        <a href="#">
                                            <img class="img-fluid" src="../assets/images/pngs/8.png" alt="img">
                                        </a>
                                    </div>
                                    <div class="product-content text-center">
                                        <div class="text-center mb-2 text-warning">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                        </div>
                                        <h4 class="title"><a href="#">Hand Bag</a></h4>
                                        <div class="price">$567<span class="ml-4">$866</span></div>
                                    </div>
                                    <ul class="icons">
                                        <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                                        <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                        <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="card item-card">
                                <div class="product-grid6  card-body">
                                    <div class="product-image6">
                                        <a href="#">
                                            <img class="img-fluid" src="../assets/images/pngs/3.png" alt="img">
                                        </a>
                                    </div>
                                    <div class="product-content text-center">
                                        <div class="text-center mb-2 text-warning">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h4 class="title"><a href="#">Laptop</a></h4>
                                        <div class="price">$455<span class="ml-4">$567</span></div>
                                    </div>
                                    <ul class="icons">
                                        <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                                        <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                        <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="card item-card">
                                <div class="product-grid6  card-body">
                                    <div class="product-image6">
                                        <a href="#">
                                            <img class="img-fluid" src="../assets/images/pngs/5.png" alt="img">
                                        </a>
                                    </div>
                                    <div class="product-content text-center">
                                        <div class="text-center mb-2 text-warning">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h4 class="title"><a href="#">Chair</a></h4>
                                        <div class="price">$345<span class="ml-4">$499</span></div>
                                    </div>
                                    <ul class="icons">
                                        <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                                        <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                        <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="card item-card">
											<span class="ribbon1">
												<span>30%</span>
											</span>
                                <div class="product-grid6  card-body">
                                    <div class="product-image6">
                                        <a href="#">
                                            <img class="img-fluid" src="../assets/images/pngs/6.png" alt="img">
                                        </a>
                                    </div>
                                    <div class="product-content text-center">
                                        <div class="text-center mb-2 text-warning">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                        </div>
                                        <h4 class="title"><a href="#">Digital Watche</a></h4>
                                        <div class="price">$543<span class="ml-4">$688</span></div>
                                    </div>
                                    <ul class="icons">
                                        <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                                        <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                        <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-5">
                        <div class="float-right">
                            <ul class="pagination ">
                                <li class="page-item page-prev disabled">
                                    <a class="page-link" href="#" tabindex="-1">Prev</a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                <li class="page-item page-next">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div><!-- COL-END -->
            </div>
            <!-- ROW-1 CLOSED -->




        </div>
    </div>
    <!-- CONTAINER CLOSED -->
@endsection
@section('js')
    <!-- BOOTSTRAP-DATERANGEPICKER JS -->
    <script src="assets/plugins/bootstrap-daterangepicker/moment.min.js"></script>
    <script src="assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- TIMEPICKER JS -->
    <script src="assets/plugins/time-picker/jquery.timepicker.js"></script>
    <script src="assets/plugins/time-picker/toggles.min.js"></script>

    <!-- DATEPICKER JS -->
    <script src="assets/plugins/date-picker/spectrum.js"></script>
    <script src="assets/plugins/date-picker/jquery-ui.js"></script>
    <script src="assets/plugins/input-mask/jquery.maskedinput.js"></script>

    <!-- SELECT2 JS -->
    <script src="assets/plugins/select2/select2.full.min.js"></script>


    <!-- FORMELEMENTS JS -->
    <script src="assets/js/form-elements.js"></script>
    <script>
        $(function(){

            $.ajax({
                type    :   "GET",
                url     :   "https://api.scalablepress.com/v2/categories",
                success : function(data){
                    $html = "";
                    $data       = data;
                    $category   = [];
                    $itemcate   = [];
                    $.each(data, function(key,value){
                        if (jQuery.inArray(value.family, $category) == -1){
                            if (value.family != null){
                                $category.push(value.family);
                                $html +='<li class="slide">'+
                                '<a class="side-menu__item" data-toggle="slide" href="#">'+
                                '<span class="side-menu__label">'+value.family+'</span>'+
                                '<i class="angle fa fa-angle-right"></i>'+
                                '</a>'+
                                    '<ul class="slide-menu">'+
                                '<li><a class="slide-item" href="index.html"><span>'+value.name+'</span></a></li>'+
                                '<li><a class="slide-item" href="index2.html"><span>Marketing Dashboard</span></a></li>'+
                                '<li><a class="slide-item" href="index3.html"><span>Service Dashboard</span></a></li>'+
                                '<li><a class="slide-item" href="index4.html"><span>Finance Dashboard</span></a></li>'+
                                '<li><a class="slide-item" href="index5.html"><span>IT Dashboard</span></a></li>'+
                                '</ul>'+
                                '</li>'
                            }
                        }
                    });
                    $(".category").append($html);
                    console.log($category);
                }
            })
            $(document).on("click",".slide",function(){
                if ($(this).hasClass("is-expanded")){
                    $(this).removeClass("is-expanded");
                }else{
                    $(this).addClass("is-expanded");
                }

            })
        })
    </script>
@endsection
