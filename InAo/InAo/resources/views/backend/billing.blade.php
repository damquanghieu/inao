@extends('backend/layouts/main')
@section('css')
    <!--BOOTSTRAP-DATERANGEPICKER CSS-->
    <link rel="stylesheet" href="../assets/plugins/bootstrap-daterangepicker/daterangepicker.css">

    <!-- TIME PICKER CSS -->
    <link href="../assets/plugins/time-picker/jquery.timepicker.css" rel="stylesheet"/>

    <!-- DATE PICKER CSS -->
    <link href="../assets/plugins/date-picker/spectrum.css" rel="stylesheet"/>

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
            <div class="row row-cards">
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <i class="fa fa-globe text-primary fa-3x text-primary-shadow"></i>
                            <h6 class="mt-4 mb-2">Total balance due</h6>
                            <h2 class="mb-2 number-font">834</h2>
                            <p class="text-muted">Sed ut perspiciatis unde omnis accusantium doloremque</p>
                        </div>
                    </div>
                </div><!-- COL END -->
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <i class="fa fa-dollar text-secondary fa-3x text-secondary-shadow"></i>
                            <h6 class="mt-4 mb-2">Store credit</h6>
                            <h2 class="mb-2  number-font">$34,516</h2>
                            <p class="text-muted">Sed ut perspiciatis unde omnis accusantium doloremque</p>
                        </div>
                    </div>
                </div><!-- COL END -->

            </div>
            <!-- ROW-1 CLOSED -->
            <!-- ROW-2 OPEN -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class=" tab-menu-heading p-0 border-0">
                            <div class="tabs-menu1 card-header">
                                <!-- Tabs -->
                                <ul class="nav panel-tabs">
                                    <li><a href="#tab5" class="active" data-toggle="tab">Lịch sử nạp tiền</a></li>
{{--                                    <li><a href="#tab6" data-toggle="tab"></a></li>--}}
{{--                                    <li><a href="#tab7" data-toggle="tab">Unpaid</a></li>--}}
                                                                        <li><img src="../assets/images/loader.svg" alt=""></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div class="panel panel-primary">
                                <div class="panel-body tabs-menu-body border-0 pl-0 pr-0">
                                    <div class="tab-content">
                                        <div class="row mb-5">
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
                                                <div class="input-group w-100">
                                                    <div class="input-group-text">
                                                        <i class="fa fa-calendar"></i>
                                                    </div>
                                                    <input type="text" class="form-control pull-right" id="reservation">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="table-responsive">
                                            <table id="example" class="table table-striped table-bordered text-nowrap w-100">
                                                <thead>
                                                <tr>
                                                    <th class="wd-15p text-center">Date placed</th>
                                                    <th class="wd-15p text-center">Order number</th>
                                                    <th class="wd-20p text-center">PO</th>
                                                    <th class="wd-15p text-center">Placed by</th>
                                                    <th class="wd-10p text-center">Status</th>
                                                    <th class="wd-25p text-center">Total</th>
                                                    <th class="wd-15p text-center">Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>Bella</td>
                                                    <td>Chloe</td>
                                                    <td>System Developer</td>
                                                    <td>2018/03/12</td>
                                                    <td class="text-center"><span class="tag tag-orange">Unpaid</span></td>
                                                    <td>b.Chloe@datatables.net</td>
                                                    <td class="text-center"><a href="#" class="btn btn-outline-primary">Reorder</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Donna</td>
                                                    <td>Bond</td>
                                                    <td>Account Manager</td>
                                                    <td>2012/02/21</td>
                                                    <td class="text-center"><span class="tag tag-gray-dark">Cancelled</span></td>
                                                    <td>d.bond@datatables.net</td>
                                                    <td class="text-center"><a href="#" class="btn btn-outline-primary">Reorder</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Harry</td>
                                                    <td>Carr</td>
                                                    <td>Technical Manager</td>
                                                    <td>20011/02/87</td>
                                                    <td class="text-center"><span class="tag tag-green">Shipped</span></td>
                                                    <td>h.carr@datatables.net</td>
                                                    <td class="text-center"><a href="#" class="btn btn-outline-primary">Reorder</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Lucas</td>
                                                    <td>Dyer</td>
                                                    <td>Javascript Developer</td>
                                                    <td>2014/08/23</td>
                                                    <td>$456,123</td>
                                                    <td>l.dyer@datatables.net</td>
                                                    <td class="text-center"><a href="#" class="btn btn-outline-primary">Reorder</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Karen</td>
                                                    <td>Hill</td>
                                                    <td>Sales Manager</td>
                                                    <td>2010/7/14</td>
                                                    <td>$432,230</td>
                                                    <td>k.hill@datatables.net</td>
                                                    <td><a href="#" class="btn btn-outline-primary">Reorder</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Dominic</td>
                                                    <td>Hudson</td>
                                                    <td>Sales Assistant</td>
                                                    <td>2015/10/16</td>
                                                    <td>$654,300</td>
                                                    <td>d.hudson@datatables.net</td>
                                                    <td><a href="#" class="btn btn-outline-primary">Reorder</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Herrod</td>
                                                    <td>Chandler</td>
                                                    <td>Integration Specialist</td>
                                                    <td>2012/08/06</td>
                                                    <td>$137,500</td>
                                                    <td>h.chandler@datatables.net</td>
                                                    <td><a href="#" class="btn btn-outline-primary">Reorder</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Jonathan</td>
                                                    <td>Ince</td>
                                                    <td>junior Manager</td>
                                                    <td>2012/11/23</td>
                                                    <td>$345,789</td>
                                                    <td>j.ince@datatables.net</td>
                                                    <td><a href="#" class="btn btn-outline-primary">Reorder</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Leonard</td>
                                                    <td>Ellison</td>
                                                    <td>Junior Javascript Developer</td>
                                                    <td>2010/03/19</td>
                                                    <td>$205,500</td>
                                                    <td>l.ellison@datatables.net</td>
                                                    <td><a href="#" class="btn btn-outline-primary">Reorder</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Madeleine</td>
                                                    <td>Lee</td>
                                                    <td>Software Developer</td>
                                                    <td>20015/8/23</td>
                                                    <td>$456,890</td>
                                                    <td>m.lee@datatables.net</td>
                                                    <td><a href="#" class="btn btn-outline-primary">Reorder</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Karen</td>
                                                    <td>Miller</td>
                                                    <td>Office Director</td>
                                                    <td>2012/9/25</td>
                                                    <td>$87,654</td>
                                                    <td>k.miller@datatables.net</td>
                                                    <td><a href="#" class="btn btn-outline-primary">Reorder</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Lisa</td>
                                                    <td>Smith</td>
                                                    <td>Support Lead</td>
                                                    <td>2011/05/21</td>
                                                    <td>$342,000</td>
                                                    <td>l.simth@datatables.net</td>
                                                    <td><a href="#" class="btn btn-outline-primary">Reorder</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Morgan</td>
                                                    <td>Keith</td>
                                                    <td>Accountant</td>
                                                    <td>2012/11/27</td>
                                                    <td>$675,245</td>
                                                    <td>m.keith@datatables.net</td>
                                                    <td><a href="#" class="btn btn-outline-primary">Reorder</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Nathan</td>
                                                    <td>Mills</td>
                                                    <td>Senior Marketing Designer</td>
                                                    <td>2014/10/8</td>
                                                    <td>$765,980</td>
                                                    <td>n.mills@datatables.net</td>
                                                    <td><a href="#" class="btn btn-outline-primary">Reorder</a></td>
                                                </tr>

                                                </tbody>
                                            </table>
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
