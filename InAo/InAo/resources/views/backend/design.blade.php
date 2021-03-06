@extends('backend/layouts/main')
@section('css')
    <!-- SELECT2 CSS -->
    <link href="../assets/plugins/select2/select2.min.css" rel="stylesheet"/>
@endsection
@section('content')
    <div class="app-content">
        <div class="side-app container">

            <!-- PAGE-HEADER -->
            <div class="page-header">
                <div>
                    <h1 class="page-title">Order</h1>
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

            <!-- ROW-2 OPEN -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class=" tab-menu-heading p-0 border-0">
                            <div class="tabs-menu1 card-header row">
                                <div class="col-md-8">
                                    <div class="input-group w-100">
                                        <input type="text" class="form-control " placeholder="Search....">
                                        <div class="input-group-append ">
                                            <button type="button" class="btn btn-primary ">
                                                <i class="fe fe-search" style="color: white" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group ">
{{--                                        <label class="form-label mt-0">Beast</label>--}}
                                        <select class="form-control select2 custom-select" data-placeholder="Choose one">
                                            <option label="Choose one">
                                            </option>
                                            <option value="1">Chuck Testa</option>
                                            <option value="2">Sage Cattabriga-Alosa</option>
                                            <option value="3">Nikola Tesla</option>
                                            <option value="4">Cattabriga-Alosa</option>
                                            <option value="5">Nikola Alosa</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div class="row">
                                <div class="item-design w-100 d-flex pt-3 pb-3 border-bottom">
                                    <div class="col-md-4">
                                        <p>Name: N/A </p>
                                        <p>ID: 5f65dcfda2ae9323927aab63</p>
                                        <p>Created: 09/19/2020</p>
                                        <p>Source: Order Wizard</p>
                                        <p>Print type: DTG</p>
                                    </div>
                                    <div class="col-md-3 d-flex justify-content-center">
                                        <img src="../assets/images/original.png" class="w-75 m-auto border" alt="">
                                    </div>
                                    <div class="col-md-1"></div>
                                    <div class="col-md-3">
                                        <p class="font-weight-bold">Details</p>
                                        <p>Art width: 10.500 in.</p>
                                        <p>From top: 2 in.</p>
                                        <p>Side: Front</p>
                                        <p>Placement: Center</p>
                                        <p class="font-weight-bold">Colors</p>
                                        Full color
                                    </div>
                                    <div class="col-md-1 d-flex justify-content-center">
                                        <div class="m-auto">
                                            <button type="button" class="btn btn-icon  btn-danger"><i class="fe fe-trash"></i></button>
                                        </div>

                                    </div>
                                </div>
                                <div class="item-design w-100 d-flex pt-3 pb-3 border-bottom">
                                    <div class="col-md-4">
                                        <p>Name: N/A </p>
                                        <p>ID: 5f65dcfda2ae9323927aab63</p>
                                        <p>Created: 09/19/2020</p>
                                        <p>Source: Order Wizard</p>
                                        <p>Print type: DTG</p>
                                    </div>
                                    <div class="col-md-3 d-flex justify-content-center">
                                        <img src="../assets/images/original.png" class="w-75 m-auto border" alt="">
                                    </div>
                                    <div class="col-md-1"></div>
                                    <div class="col-md-3">
                                        <p class="font-weight-bold">Details</p>
                                        <p>Art width: 10.500 in.</p>
                                        <p>From top: 2 in.</p>
                                        <p>Side: Front</p>
                                        <p>Placement: Center</p>
                                        <p class="font-weight-bold">Colors</p>
                                        Full color
                                    </div>
                                    <div class="col-md-1 d-flex justify-content-center">
                                        <div class="m-auto">
                                            <button type="button" class="btn btn-icon  btn-danger"><i class="fe fe-trash"></i></button>
                                        </div>

                                    </div>
                                </div>
                                <div class="item-design w-100 d-flex pt-3 pb-3 border-bottom">
                                    <div class="col-md-4">
                                        <p>Name: N/A </p>
                                        <p>ID: 5f65dcfda2ae9323927aab63</p>
                                        <p>Created: 09/19/2020</p>
                                        <p>Source: Order Wizard</p>
                                        <p>Print type: DTG</p>
                                    </div>
                                    <div class="col-md-3 d-flex justify-content-center">
                                        <img src="../assets/images/original.png" class="w-75 m-auto border" alt="">
                                    </div>
                                    <div class="col-md-1"></div>
                                    <div class="col-md-3">
                                        <p class="font-weight-semibold">Details</p>
                                        <p>Art width: 10.500 in.</p>
                                        <p>From top: 2 in.</p>
                                        <p>Side: Front</p>
                                        <p>Placement: Center</p>
                                        <p class="font-weight-semibold">Colors</p>
                                        Full color
                                    </div>
                                    <div class="col-md-1 d-flex justify-content-center">
                                        <div class="m-auto">
                                            <button type="button" class="btn btn-icon  btn-danger"><i class="fe fe-trash"></i></button>
                                        </div>

                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div><!-- COL-END -->
            </div>
            <!-- ROW-2 CLOSED -->
        </div>
    </div>
    <!-- CONTAINER CLOSED -->
@endsection
@section('js')
    <!-- BOOTSTRAP-DATERANGEPICKER JS -->
    <script src="../assets/plugins/bootstrap-daterangepicker/moment.min.js"></script>
    <script src="../assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- TIMEPICKER JS -->
    <script src="../assets/plugins/time-picker/jquery.timepicker.js"></script>
    <script src="../assets/plugins/time-picker/toggles.min.js"></script>

    <!-- DATEPICKER JS -->
    <script src="../assets/plugins/date-picker/spectrum.js"></script>
    <script src="../assets/plugins/date-picker/jquery-ui.js"></script>
    <script src="../assets/plugins/input-mask/jquery.maskedinput.js"></script>

    <!-- SELECT2 JS -->
    <script src="../assets/plugins/select2/select2.full.min.js"></script>


    <!-- FORMELEMENTS JS -->
    <script src="../assets/js/form-elements.js"></script>


@endsection
