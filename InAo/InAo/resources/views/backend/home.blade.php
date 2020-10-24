@extends('backend/layouts/main')
@section('content')
    <div class="app-content">
        <div class="side-app container">

            <!-- PAGE-HEADER -->
            <div class="page-header">
                <div>
                    <h1 class="page-title">Home</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <!--									<li class="breadcrumb-item active" aria-current="page">Dashboard 02</li>-->
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
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <i class="fa fa-globe text-primary fa-3x text-primary-shadow"></i>
                            <h6 class="mt-4 mb-2">Total Visit</h6>
                            <h2 class="mb-2 number-font">834</h2>
                            <p class="text-muted">Sed ut perspiciatis unde omnis accusantium doloremque</p>
                        </div>
                    </div>
                </div><!-- COL END -->
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <i class="fa fa-dollar text-secondary fa-3x text-secondary-shadow"></i>
                            <h6 class="mt-4 mb-2">Cost per Click</h6>
                            <h2 class="mb-2  number-font">$34,516</h2>
                            <p class="text-muted">Sed ut perspiciatis unde omnis accusantium doloremque</p>
                        </div>
                    </div>
                </div><!-- COL END -->
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <i class="fa fa-comment-o text-success fa-3x text-success-shadow"></i>
                            <h6 class="mt-4 mb-2">Investment</h6>
                            <h2 class="mb-2 number-font">80%</h2>
                            <p class="text-muted">Sed ut perspiciatis unde omnis accusantium doloremque</p>
                        </div>
                    </div>
                </div><!-- COL END -->
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <i class="fa fa-pie-chart text-info fa-3x text-info-shadow"></i>
                            <h6 class="mt-4 mb-2">Revenue</h6>
                            <h2 class="mb-2  number-font">70k</h2>
                            <p class="text-muted">Sed ut perspiciatis unde omnis accusantium doloremque</p>
                        </div>
                    </div>
                </div><!-- COL END -->
            </div>
            <!-- ROW-1 CLOSED -->

            <!-- ROW-2 OPEN -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="">
                        <!--									<div class="card-header">-->
                        <!--										<h3 class="card-title">Tabs Style</h3>-->
                        <!--									</div>-->
                        <div class="card-body p-0">
                            <div class="panel panel-primary">
                                <div class=" tab-menu-heading p-0 border-0">
                                    <div class="tabs-menu1 ">
                                        <!-- Tabs -->
                                        <ul class="nav panel-tabs">
                                            <li ><a href="#tab5" class="active" data-toggle="tab">Last 7 days</a></li>
                                            <li><a href="#tab6" data-toggle="tab">Last 30 days</a></li>
                                            <li><a href="#tab7" data-toggle="tab">Year to date</a></li>
                                            <li><a href="#tab8" data-toggle="tab">All time</a></li>
                                            <li><img src="../assets/images/loader.svg" alt=""></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="panel-body tabs-menu-body border-0 pl-0 pr-0">
                                    <div class="tab-content">
                                        <!--													<div class="tab-pane active " id="tab5">-->
                                        <!--														<p>page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like</p>-->
                                        <!--														<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et</p>-->
                                        <!--													</div>-->
                                        <!--													<div class="tab-pane " id="tab6">-->
                                        <!--														<p> default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like</p>-->
                                        <!--														<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et</p>-->
                                        <!--													</div>-->
                                        <!--													<div class="tab-pane " id="tab7">-->
                                        <!--														<p>over the years, sometimes by accident, sometimes on purpose (injected humour and the like</p>-->
                                        <!--														<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et</p>-->
                                        <!--													</div>-->
                                        <!--													<div class="tab-pane " id="tab8">-->
                                        <!--														<p>page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like</p>-->
                                        <!--														<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et</p>-->
                                        <!--													</div>-->
                                        <div class="row">
                                            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                                                <div class="card bg-primary img-card box-primary-shadow">
                                                    <div class="card-body">
                                                        <div class="d-flex">
                                                            <div class="text-white">
                                                                <h2 class="mb-0 number-font">23,536</h2>
                                                                <p class="text-white mb-0">Total Requests </p>
                                                            </div>
                                                            <div class="ml-auto"> <i class="fa fa-send-o text-white fs-30 mr-2 mt-2"></i> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- COL END -->
                                            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                                                <div class="card bg-secondary img-card box-secondary-shadow">
                                                    <div class="card-body">
                                                        <div class="d-flex">
                                                            <div class="text-white">
                                                                <h2 class="mb-0 number-font">45,789</h2>
                                                                <p class="text-white mb-0">Total Revenue</p>
                                                            </div>
                                                            <div class="ml-auto"> <i class="fa fa-bar-chart text-white fs-30 mr-2 mt-2"></i> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- COL END -->
                                            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                                                <div class="card  bg-success img-card box-success-shadow">
                                                    <div class="card-body">
                                                        <div class="d-flex">
                                                            <div class="text-white">
                                                                <h2 class="mb-0 number-font">89,786</h2>
                                                                <p class="text-white mb-0">Total Profit</p>
                                                            </div>
                                                            <div class="ml-auto"> <i class="fa fa-dollar text-white fs-30 mr-2 mt-2"></i> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- COL END -->
                                            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                                                <div class="card bg-info img-card box-info-shadow">
                                                    <div class="card-body">
                                                        <div class="d-flex">
                                                            <div class="text-white">
                                                                <h2 class="mb-0 number-font">43,336</h2>
                                                                <p class="text-white mb-0">Monthly Sales</p>
                                                            </div>
                                                            <div class="ml-auto"> <i class="fa fa-cart-plus text-white fs-30 mr-2 mt-2"></i> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- COL END -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- COL-END -->
            </div>
            <!-- ROW-2 CLOSED -->
            <!-- ROW-5 OPEN -->
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Social Activities</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover  mb-0 text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Campaign</th>
                                        <th>Client</th>
                                        <th>Budget</th>
                                        <th>Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Gmail</td>
                                        <td>Ryan MacLeod</td>
                                        <td>$12k</td>
                                        <td><span class="badge badge-success">Active</span></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>FaceBook</td>
                                        <td>Jacob Sutherland</td>
                                        <td>$16k</td>
                                        <td><span class="badge badge-info">Running</span></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Skype</td>
                                        <td>James Oliver</td>
                                        <td>$14k</td>
                                        <td><span class="badge badge-success">Active</span></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Twitter</td>
                                        <td>Lisa Nash</td>
                                        <td>$19k</td>
                                        <td><span class="badge badge-success">Active</span></td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Youtube</td>
                                        <td>Alan Walsh</td>
                                        <td>$21k</td>
                                        <td><span class="badge badge-danger">Hold</span></td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Pinterest</td>
                                        <td>Pippa Mills</td>
                                        <td>$14k</td>
                                        <td><span class="badge badge-danger">Hold</span></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div><!-- COL END -->
            </div>
            <!-- ROW-5 CLOSED -->
        </div>
    </div>
    <!-- CONTAINER CLOSED -->
@endsection
