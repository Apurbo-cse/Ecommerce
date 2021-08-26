<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - vendor</title>
        <link href="{{ asset('backend/css/styles.css') }}" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="/">Vendor Panel</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">ac
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }} <i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">

                        <div class="dropdown-divider"></div>

                        <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        {{ Auth::user()->name }}
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Dashboard</h1>
                        @if(Auth::user()->nid)
                            <ol class="breadcrumb mb-4">
                                <li class="breadcrumb-item active">Your request is pending!!!</li>
                            </ol>
                        @endif
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-xl-6 col-md-12 pt-3">
                                <h4>Provide Essential Information:</h4>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ Auth::user()->name }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ Auth::user()->email }}" disabled>
                                </div>
                                <hr>
                                <form action="{{ url('vendor-apply-info/'.Auth::user()->id) }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                      <label for="exampleInputEmail1">Phone</label>
                                      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Phone Number" name="phone" value="{{ Auth::user()->phone }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">City</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter City" name="city" value="{{ Auth::user()->city }}" required>
                                    </div>
                                    <div class="form-group">
                                      <label for="exampleInputPassword1">Address</label>
                                      <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter address" name="address" value="{{ Auth::user()->address }}" required>
                                    </div>

                                    <div class="form-group">

                                        <label for="exampleInputPassword1">NID Number</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter NID number" name="nid" value="{{ Auth::user()->nid }}" required>
                                      </div>

                                    <div class="form-group">
                                        @if(Auth::user()->photo)
                                        <img src="{{ asset('uploads/vendor/'.Auth::user()->photo) }}" alt="" height="150" width="150" onerror="this.onerror=null;this.src='https://www.jamiemaison.com/creating-a-simple-text-editor/placeholder.png';"><br>
                                        @endif
                                        <label class="form-check-label" for="exampleCheck1">NID Image</label>
                                        <input type="file" class="form-control" name="file" >
                                    </div>



                            </div>

                            

                            <div class="col-xl-6 col-md-12 bg-light pt-3">
                                
                                <h4 class="text-center">Shop Information</h4>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Shop Name</label>
                                    <input type="text" class="form-control" aria-describedby="emailHelp" value="{{ Auth::user()->shop_name }}" name="shop_name" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Shop Address</label>
                                    <input type="text" class="form-control" placeholder="Enter Shop Address" value="{{ Auth::user()->shop_address }}" name="shop_address">
                                </div>
                                


                                <div class="form-group">
                                    <label for="exampleInputPassword1">Shop Profile</label><br>
                                    <img src="{{ asset('uploads/shop/'.Auth::user()->photo1) }}" onerror="this.onerror=null;this.src='https://www.jamiemaison.com/creating-a-simple-text-editor/placeholder.png';"  height="200px" width="200px"/>
                                  
                                  <input type="file" class="form-control" name="file1">
                                </div>


                                <div class="form-group">
                                    <label for="exampleInputPassword1">Shop Banner</label><br>
                                    <img src="{{ asset('uploads/shop/banner/'.Auth::user()->photo2) }}"  height="200px" width="400px" onerror="this.onerror=null;this.src='https://www.jamiemaison.com/creating-a-simple-text-editor/placeholder.png';"/>
                                    
                                    <input type="file" class="form-control" name="file2">
                                </div>


                                <div class="form-check my-5">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                                    <label class="form-check-label" for="exampleCheck1">I am agree with all terms and Condition</label>
                                </div>
                                
                                

                                <button type="submit" class="btn btn-primary">Submit</button>
                                
                                

                            </div>

                           



                        </form>
                        </div>


                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2020</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('backend/js/scripts.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('backend/assets/demo/chart-area-demo.js') }}"></script>
        <script src="{{ asset('backend/assets/demo/chart-bar-demo.js') }}"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('backend/assets/demo/datatables-demo.js') }}"></script>

    </body>
</html>
