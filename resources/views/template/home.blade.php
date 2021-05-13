<!DOCTYPE html>
<head>
    <title>Kutus-Kutus: Joss</title>
    <meta charset="UTF-8">
    <meta name="description" content="Login TiketSaya Admin">
    <meta name="keywords" content="TiketSaya, Web Dashboard TiketSaya, Login TiketSaya">
    <meta name="author" content="BWA Team">
    
    <link rel="stylesheet" type="text/css" href="/assets/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="/css/bootstrap-datepicker.css" />
    <link rel="stylesheet" type="text/css" href="/assets/bootstrap/css/style.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    @yield('css', '')
</head>

<body>
    <!-- DEN -->
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg " style="position: fixed; overflow:hidden; width:100%; z-index:9999; background-color:#b28e6b">
        <a class="navbar-brand" href=""><img src="../assets/img/logo.png" height="50" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <a class="nav-link" href="#" style="color:black">Logout</a>
            <a class="nav-link" href="#" style="color:black">About </a>
            <a class="nav-link" href="#" ><i class="fas fa-2x fa-user" style="color:black"></i></a>
          </form>
        </div>
      </nav>
    <!-- End Of Navbar -->
    <!-- <div class="wrapper"> -->
    <div class="side-left">
        <div class="shortcut">    
        </div>
        <div class="admin-profile sidenav" id="sl_ap"  style="padding-top: 50px">
            <ul class="admin-menus">
              
                    <li class="active-link" style="color: black">
                        Fitur
                    </li>
                
                <a href="/home">
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
                <a href="/barangkeluar">
                    <li style="color: black">
                        <i class="fas fa-sign-out-alt"></i>
                        Barang Keluar
                    </li>
                </a>
                <a href="/produk">
                    <li style="color: black">
                        <i class="fas fa-box"></i>
                        Produk
                    </li>
                </a>
                @if(session('akses_id') == 0)
                <a href="/admin">
                    <li style="color: black">
                        <i class="fas  fa-people-carry"></i>
                        Admin
                    </li>
                </a>
                @endif
                <a href="/reseller">
                    <li style="color: black" >
                        <i class="fas fa-2x fa-male" ></i>
                        Reseller
                    </li>
                </a>
               
                <a href="/stockopname">
                    <li style="color: black">
                        <i class="fas fa-warehouse"></i>
                        Stok Opname
                    </li>
                </a>
            </ul>
        </div>
    </div>

    <div class="main-content" style="padding-top: 50px; margin-left:250px;">
    @yield('isi_konten')
        
    </div>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> 
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <!-- <script type="text/javascript" src="/assets/js/jquery-3.5.1.js"></script> -->
    <script type="text/javascript" src="/assets/js/popper.min.js"></script>
    <script type="text/javascript" src="/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../../assets/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript" src="../../assets/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../../assets/js/bootstrap-datepicker.min.js"></script>
    <script>
        $(function () {
            $('.datepicker').datepicker({
                format: 'd/mm/yyyy'
            });

        })
       
    </script>
    @yield('js', '')
</body>
</html>
