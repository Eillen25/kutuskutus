<!DOCTYPE html>
<head>
    <title>Customers — TiketSaya</title>
    <meta charset="UTF-8">
    <meta name="description" content="Login TiketSaya Admin">
    <meta name="keywords" content="TiketSaya, Web Dashboard TiketSaya, Login TiketSaya">
    <meta name="author" content="BWA Team">
    
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/style.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>

<body>
    <!-- DEN -->
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg " style="position: fixed; overflow:hidden; width:100%; z-index:9999; background-color:#b28e6b">
        <a class="navbar-brand" href=""><img src="img/logo.png" height="50" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <a class="nav-link" href="#" style="color:black">Logout <span class="sr-only">(current)</span></a>
            <a class="nav-link" href="#" style="color:black">Registrasi Admin <span class="sr-only">(current)</span></a>
            <a class="nav-link" href="#" style="color:black">About <span class="sr-only">(current)</span></a>
          </form>
        </div>
      </nav>
    <!-- End Of Navbar -->
    <!-- <div class="wrapper"> -->
    <div class="side-left">
        <div class="shortcut" onmouseover="showAdminProfile()">    
        </div>
        <div class="admin-profile" id="sl_ap" onmouseover="showAdminProfile()" onmouseout="hideAdminProfile()" style="padding-top: 50px">
            <ul class="admin-menus">
                <a href="dashboard.php">
                    <li class="active-link" style="color: black">
                        Manage
                    </li>
                </a>   
                <a href="sales.php">
                    <li style="color: black">
                        <i class="fas fa-home"></i>
                        Home
                    </li>
                </a>
                <a href="/barangmasuk">
                    <li style="color: black">
                        <i class="fas fa-sign-in-alt"></i>
                        Barang Masuk
                    </li>
                </a>
                <a href="customer.php">
                    <li style="color: black">
                        <i class="fas fa-sign-out-alt"></i>
                        Barang Keluar
                    </li>
                </a>
                <a href="setting.php">
                    <li style="color: black">
                        <i class="fas fa-box"></i>
                        Produk
                    </li>
                </a>
                <a href="includes/user_destroy.php">
                    <li style="color: black" >
                        <i class="fas fa-2x fa-male" ></i>
                        Reseller
                    </li>
                </a>
                <a href="includes/user_destroy.php">
                    <li style="color: black">
                        <i class="fas fa-warehouse"></i>
                        Stok Opname
                    </li>
                </a>
            </ul>
        </div>
    </div>

    <div class="main-content" style="padding-top: 50px;">
    @yield('isi_konten')
        
    </div>


    <script type="text/javascript" src="assets/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>
