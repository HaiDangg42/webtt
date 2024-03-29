<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('/adminlte/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('/adminlte/css/sb-admin-2.min.css')}}" rel="stylesheet">
    <link href="{{asset('/adminlte/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>


</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
{{--            <div class="sidebar-brand-icon rotate-n-15">--}}
{{--                <i class="fas fa-laugh-wink"></i>--}}
{{--            </div>--}}
            <div class="sidebar-brand-text mx-3">Admin <sup>New</sup></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <!-- <li class="nav-item">
            <a class="nav-link" href="index.html">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Bảng điều khiển</span></a>
        </li> -->

        <!-- Divider -->
        <hr class="sidebar-divider">
        <li class="nav-item">
            <a class="nav-link" href="{{route('admin.user.list')}}">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664z"/>
                </svg>
                <span>Quản trị viên</span></a>
        </li>
        <hr class="sidebar-divider">
        <li class="nav-item">
            <a class="nav-link" href="{{route('admin.category.list')}}">
                <i class="fas fa-fw fa-folder"></i>
                <span>Giải trí</span></a>
        </li>
        <hr class="sidebar-divider">
        <li class="nav-item">
            <a class="nav-link" href="{{route('admin.post.list')}}">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-archive" viewBox="0 0 16 16">
                    <path d="M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 12.5V5a1 1 0 0 1-1-1zm2 3v7.5A1.5 1.5 0 0 0 3.5 14h9a1.5 1.5 0 0 0 1.5-1.5V5zm13-3H1v2h14zM5 7.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5"/>
                </svg>
                <span>Bài viết</span></a>
        </li>
        </li>
        <hr class="sidebar-divider">
        <li class="nav-item">
            <a class="nav-link" href="{{route('admin.video.list')}}">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera-video-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2z"/>
                </svg>
                <span>Video</span></a>
        </li>

        <!-- Heading -->
        {{--        <div class="sidebar-heading">--}}
        {{--            Interface--}}
        {{--        </div>--}}

        {{--        <!-- Nav Item - Pages Collapse Menu -->--}}
        {{--        <li class="nav-item">--}}
        {{--            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"--}}
        {{--               aria-expanded="true" aria-controls="collapseTwo">--}}
        {{--                <i class="fas fa-fw fa-cog"></i>--}}
        {{--                <span>Components</span>--}}
        {{--            </a>--}}
        {{--            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">--}}
        {{--                <div class="bg-white py-2 collapse-inner rounded">--}}
        {{--                    <h6 class="collapse-header">Custom Components:</h6>--}}
        {{--                    <a class="collapse-item" href="buttons.html">Buttons</a>--}}
        {{--                    <a class="collapse-item" href="cards.html">Cards</a>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </li>--}}

        {{--        <!-- Nav Item - Utilities Collapse Menu -->--}}
        {{--        <li class="nav-item">--}}
        {{--            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"--}}
        {{--               aria-expanded="true" aria-controls="collapseUtilities">--}}
        {{--                <i class="fas fa-fw fa-wrench"></i>--}}
        {{--                <span>Utilities</span>--}}
        {{--            </a>--}}
        {{--            <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"--}}
        {{--                 data-parent="#accordionSidebar">--}}
        {{--                <div class="bg-white py-2 collapse-inner rounded">--}}
        {{--                    <h6 class="collapse-header">Custom Utilities:</h6>--}}
        {{--                    <a class="collapse-item" href="utilities-color.html">Colors</a>--}}
        {{--                    <a class="collapse-item" href="utilities-border.html">Borders</a>--}}
        {{--                    <a class="collapse-item" href="utilities-animation.html">Animations</a>--}}
        {{--                    <a class="collapse-item" href="utilities-other.html">Other</a>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </li>--}}

        {{--        <!-- Divider -->--}}
        {{--        <hr class="sidebar-divider">--}}

        {{--        <!-- Heading -->--}}
        {{--        <div class="sidebar-heading">--}}
        {{--            Addons--}}
        {{--        </div>--}}

        {{--        <!-- Nav Item - Pages Collapse Menu -->--}}
        {{--        <li class="nav-item active">--}}
        {{--            <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true"--}}
        {{--               aria-controls="collapsePages">--}}
        {{--                <i class="fas fa-fw fa-folder"></i>--}}
        {{--                <span>Pages</span>--}}
        {{--            </a>--}}
        {{--            <div id="collapsePages" class="collapse show" aria-labelledby="headingPages"--}}
        {{--                 data-parent="#accordionSidebar">--}}
        {{--                <div class="bg-white py-2 collapse-inner rounded">--}}
        {{--                    <h6 class="collapse-header">Login Screens:</h6>--}}
        {{--                    <a class="collapse-item" href="login.html">Login</a>--}}
        {{--                    <a class="collapse-item" href="register.html">Register</a>--}}
        {{--                    <a class="collapse-item" href="forgot-password.html">Forgot Password</a>--}}
        {{--                    <div class="collapse-divider"></div>--}}
        {{--                    <h6 class="collapse-header">Other Pages:</h6>--}}
        {{--                    <a class="collapse-item" href="404.html">404 Page</a>--}}
        {{--                    <a class="collapse-item active" href="blank.html">Blank Page</a>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </li>--}}

        {{--        <!-- Nav Item - Charts -->--}}
        {{--        <li class="nav-item">--}}
        {{--            <a class="nav-link" href="charts.html">--}}
        {{--                <i class="fas fa-fw fa-chart-area"></i>--}}
        {{--                <span>Charts</span></a>--}}
        {{--        </li>--}}

        {{--        <!-- Nav Item - Tables -->--}}
        {{--        <li class="nav-item">--}}
        {{--            <a class="nav-link" href="tables.html">--}}
        {{--                <i class="fas fa-fw fa-table"></i>--}}
        {{--                <span>Tables</span></a>--}}
        {{--        </li>--}}

        {{--        <!-- Divider -->--}}
        {{--        <hr class="sidebar-divider d-none d-md-block">--}}

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">
            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Search  -->
                <form
                       class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                   <div class="input-group">
                       <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                              aria-label="Search" aria-describedby="basic-addon2">
                       <div class="input-group-append">
                           <button class="btn btn-primary" type="button">
                               <i class="fas fa-search fa-sm"></i>
                           </button>
                       </div>
                   </div>
               </form>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                    <li class="nav-item dropdown no-arrow d-sm-none">
                        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-search fa-fw"></i>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                             aria-labelledby="searchDropdown">
                            <form class="form-inline mr-auto w-100 navbar-search">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light border-0 small"
                                           placeholder="Search for..." aria-label="Search"
                                           aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>

                    <!-- Nav Item - Alerts -->
                    <li class="nav-item dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-bell fa-fw"></i>
                            <!-- Counter - Alerts -->
                            <span class="badge badge-danger badge-counter">3+</span>
                        </a>
                        <!-- Dropdown - Alerts -->
                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                             aria-labelledby="alertsDropdown">
                            <h6 class="dropdown-header">
                                Thông Báo
                            </h6>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-primary">
                                        <i class="fas fa-file-alt text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">December 12, 2019</div>
                                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-success">
                                        <i class="fas fa-donate text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">December 7, 2019</div>
                                    $290.29 has been deposited into your account!
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-warning">
                                        <i class="fas fa-exclamation-triangle text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">December 2, 2019</div>
                                    Spending Alert: We've noticed unusually high spending for your account.
                                </div>
                            </a>
                            <a class="dropdown-item text-center small text-gray-500" href="#">Hiển Thị Thông Báo</a>
                        </div>
                    </li>

                    <!-- Nav Item - Messages -->
{{--                    <div>--}}
{{--                        <div class="text-truncate">Last month's report looks great, I am very happy with--}}
{{--                            the progress so far, keep up the good work!</div>--}}
{{--                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>--}}
{{--                    </div>--}}
{{--                    </a>--}}
{{--                    <a class="dropdown-item d-flex align-items-center" href="#">--}}
{{--                        <div class="dropdown-list-image mr-3">--}}
{{--                            <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"--}}
{{--                                 alt="...">--}}
{{--                            <div class="status-indicator bg-success"></div>--}}
{{--                        </div>--}}
{{--                        <div>--}}
{{--                            <div class="text-truncate">Am I a good boy? The reason I ask is because someone--}}
{{--                                told me that people say this to all dogs, even if they aren't good...</div>--}}
{{--                            <div class="small text-gray-500">Chicken the Dog · 2w</div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                    <a class="dropdown-item text-center small text-gray-500" href="#">Hiển Thị Thêm</a>--}}
{{--                </ul>--}}
{{--            </nav>--}}
{{--        </div>--}}
        </li>

        <div class="topbar-divider d-none d-sm-block"></div>

        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{\Illuminate\Support\Facades\Auth::user()->name}}</span>
{{--                <img class="img-profile rounded-circle"--}}
{{--                     src="{{asset('/systemImg/undraw_profile.svg')}}">--}}
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                 aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Hồ Sơ
                </a>
                <a class="dropdown-item" href="#">
                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                    Cài Đặt
                </a>
                <a class="dropdown-item" href="#">
                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                    <li class="nav-item dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-envelope fa-fw"></i>
                            <!-- Counter - Messages -->
                            <span class="badge badge-danger badge-counter">7</span>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                             aria-labelledby="messagesDropdown">
                            <h6 class="dropdown-header">
                                Tin Nhắn
                            </h6>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="{{asset('/systemImg/undraw_profile.svg')}}"
                                         alt="...">
                                    <div class="status-indicator bg-success"></div>
                                </div>
                                <div class="font-weight-bold">
                                    <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                        problem I've been having.</div>
                                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="{{asset('/systemImg/undraw_profile.svg')}}"
                                         alt="...">
                                    <div class="status-indicator"></div>
                                </div>
                                <div>
                                    <div class="text-truncate">I have the photos that you ordered last month, how
                                        would you like them sent to you?</div>
                                    <div class="small text-gray-500">Jae Chun · 1d</div>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="{{asset('/systemImg/undraw_profile.svg')}}"
                                         alt="...">
                                    <div class="status-indicator bg-warning"></div>
                                </div>
                                Nhật Ký Hoạt Động
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Đăng Xuất
                            </a>
                        </div>
                    </li>

                    </ul>

                    </nav>
                    <!-- End of Topbar -->

                    <!-- Begin Page Content -->
                    @if(\Illuminate\Support\Facades\Session::has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Success!</strong>{{\Illuminate\Support\Facades\Session::get('success')}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    @if(\Illuminate\Support\Facades\Session::has('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Error!</strong>{{\Illuminate\Support\Facades\Session::get('error')}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <div class="container-fluid">
                        @yield('content')
                    </div>
                </a>
                    <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
{{--            <footer class="sticky-footer bg-white">--}}
{{--                <div class="container my-auto">--}}
{{--                    <div class="copyright text-center my-auto">--}}
{{--                        <span>  Bản Quyền &copy;dang</span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </footer>--}}
            <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cho Biết?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Bạn Có Thức Sự Muốn Đăng Xuất.</div>
{{--            <div class="modal-footer">--}}
{{--                <!-- <button class="btn btn-secondary" type="button" data-dismiss="modal">Đóng</button> -->--}}
{{--                <a class="btn btn-primary" href="{{route('admin.logout')}}">Đăng Xuất</a>--}}
{{--            </div>--}}
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="{{asset('/adminlte/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('/adminlte/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Core plugin JavaScript-->
<script src="{{asset('/adminlte/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

<!-- Custom scripts for all pages-->
<script src="{{asset('/adminlte/js/sb-admin-2.min.js')}}"></script>
<script src="{{asset('/adminlte/vendor/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('/adminlte/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

<!-- Page level custom scripts -->
<script src="{{asset('/adminlte/js/demo/datatables-demo.js')}}"></script>
<script src="{{asset('/adminlte/js/myjs.js')}}"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>


</body>

</html>
