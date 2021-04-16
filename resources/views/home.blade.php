<html>

<head>
    <title>Dashboard — TiketSaya</title>
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
    
    <!-- <div class="wrapper"> -->
                <div class="side-left">
                <div class="shortcut" onmouseover="showAdminProfile()">
                    <div class="emblemapp">
                        <img src="images/emblemapp.png" height="29" alt="">
                    </div>
                    <div class="menus">

                        <div class="item-menu">
                            <a href="dashboard.html">
                                <p class="icon-item-menu">
                                    <i class="fab fa-delicious"></i>
                                </p>
                            </a>
                        </div>

                        <div class="item-menu inactive">
                            <a href="sales.html">
                                <p class="icon-item-menu">
                                    <i class="fas fa-ticket-alt"></i>
                                </p>
                            </a>
                        </div>

                        <div class="item-menu inactive">
                            <a href="wisata.html">
                                <p class="icon-item-menu">
                                    <i class="fas fa-globe"></i>
                                </p>
                            </a>
                        </div>

                        <div class="item-menu inactive">
                            <a href="customer.html">
                                <p class="icon-item-menu">
                                    <i class="fas fa-users"></i>
                                </p>
                            </a>
                        </div>

                        <div class="item-menu inactive">
                            <a href="setting.html">
                                <p class="icon-item-menu">
                                    <i class="fas fa-cog"></i>
                                </p>
                            </a>
                        </div>

                        <div class="item-menu inactive">
                            <a href="#">
                                <p class="icon-item-menu">
                                    <i class="fas fa-power-off"></i>
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="admin-profile" id="sl_ap" onmouseover="showAdminProfile()" onmouseout="hideAdminProfile()">
                    <div class="admin-picture">
                        <img src="images/admin_picture1.png" alt="">
                    </div>
                    <p class="admin-name">
                        Catharina Mega
                    </p>
                    <p class="admin-level">
                        Super Admin
                    </p>
                    <ul class="admin-menus">
                        <a href="dashboard.html">
                            <li class="active-link">
                                My Dashboard
                            </li>
                        </a>
                        <a href="sales.html">
                            <li>
                                Ticket Sales
                            </li>
                        </a>
                        <a href="wisata.html">
                            <li>
                                Manage Wisata
                            </li>
                        </a>
                        <a href="customer.html">
                            <li>
                                Customers <span class="badge-tiketsaya badge badge-pill badge-primary">96</span>
                            </li>
                        </a>
                        <a href="setting.html">
                            <li>
                                Account Settings
                            </li>
                        </a>
                        <a href="login.html">
                            <li style="padding-top: 120px;">
                                Log Out
                            </li>
                        </a>
                    </ul>
                </div>
            </div>

            <div class="main-content">
                <div class="header row">
                    <div class="col-md-12">
                        <p class="header-title">
                            My Dashboard
                        </p>
                        <p class="sub-header-title">
                            Latest report updated this week and on
                        </p>
                    </div>
                </div>
                <div class="row report-group">

                    <div class="col-md-4">
                        <div class="item-report col-md-12">
                            <div class="row">
                                <div class="content col-md-12">
                                    <img src="images/icon_total_pengguna.png" alt="">
                                    <p class="title-item">
                                        TOURIST
                                    </p>
                                    <p class="subtitle-item">
                                        USERS LIFETIME
                                    </p>
                                    <p class="value-item">
                                        209
                                    </p>
                                    <p class="desc-item">
                                        around the earth
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="item-report col-md-12">
                            <div class="row">
                                <div class="content col-md-12">
                                    <img src="images/icon_total_sales.png" alt="">
                                    <p class="title-item">
                                        SALES
                                    </p>
                                    <p class="subtitle-item">
                                        TICKET BEING SOLD
                                    </p>
                                    <p class="value-item">
                                        12
                                    </p>
                                    <p class="desc-item">
                                        around the world
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="item-report col-md-12">
                            <div class="row">
                                <div class="content col-md-12">
                                    <img src="images/icon_total_wisata.png" alt="">
                                    <p class="title-item">
                                        WISATA
                                    </p>
                                    <p class="subtitle-item">
                                        PLACE THAT AVAILABLE
                                    </p>
                                    <p class="value-item">
                                        6
                                    </p>
                                    <p class="desc-item">
                                        around the Indonesia
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row report-group">

                    <div class="col-md-6">
                        <div class="item-big-report col-md-12">
                            
                            <p class="title">
                                <span class="title-blue">NEWEST</span> USERS
                            </p>
                            <p class="sub-title bypass-subtitle">
                                USER THAT SIGN UP NOWADAYS
                            </p>
                            <a href="#" class="btn btn-small btn-primary btn-primary-tiketsaya">See More</a>

                            <div class="divider-line"></div>

                            <div class="user-item">
                                <div class="user-picture">
                                    <img src="images/user_11.png" alt="">
                                </div>
                                <div class="user-info">
                                    <p class="title">
                                        Julia Fynn
                                    </p>
                                    <br>
                                    <p class="sub-title">
                                        Traveller
                                    </p>
                                </div>
                                <a href="#" class="btn btn-small-border btn-primary ">View Profile</a>
                            </div>

                            <div class="user-item">
                                <div class="user-picture">
                                    <img src="images/user_22.png" alt="">
                                </div>
                                <div class="user-info">
                                    <p class="title">
                                        Riku Nana
                                    </p>
                                    <br>
                                    <p class="sub-title">
                                        Explorer
                                    </p>
                                </div>
                                <a href="#" class="btn btn-small-border btn-primary ">View Profile</a>
                            </div>

                            <div class="user-item">
                                <div class="user-picture">
                                    <img src="images/user_33.png" alt="">
                                </div>
                                <div class="user-info">
                                    <p class="title">
                                        Chintya Vee
                                    </p>
                                    <br>
                                    <p class="sub-title">
                                        Blogger
                                    </p>
                                </div>
                                <a href="#" class="btn btn-small-border btn-primary ">View Profile</a>
                            </div>

                            <div class="user-item">
                                <div class="user-picture">
                                    <img src="images/user_11.png" alt="">
                                </div>
                                <div class="user-info">
                                    <p class="title">
                                        Julia Fynn
                                    </p>
                                    <br>
                                    <p class="sub-title">
                                        Traveller
                                    </p>
                                </div>
                                <a href="#" class="btn btn-small-border btn-primary ">View Profile</a>
                            </div>

                        </div>



                    </div>

                    <div class="col-md-6">
                        <div class="item-big-report col-md-12">
                           
                            <p class="title">
                                <span class="title-blue">TICKETS</span> SOLD
                            </p>
                            <p class="sub-title bypass-subtitle">
                                USERS JUST BOUGHT TICKET
                            </p>
                            <a href="#" class="btn btn-small btn-primary btn-primary-tiketsaya">See More</a>

                            <div class="divider-line"></div>

                            <div class="user-item">
                                <div class="user-picture">
                                    <img src="images/user_33.png" alt="">
                                </div>
                                <div class="user-info">
                                    <p class="title">
                                        Hanna Pie
                                    </p>
                                    <br>
                                    <p class="sub-title">
                                        Book Finder
                                    </p>
                                </div>
                                <a href="#" class="btn btn-small-border btn-primary ">View Profile</a>
                            </div>

                            <div class="user-item">
                                <div class="user-picture">
                                    <img src="images/user_22.png" alt="">
                                </div>
                                <div class="user-info">
                                    <p class="title">
                                        Gobby James
                                    </p>
                                    <br>
                                    <p class="sub-title">
                                        Gamers
                                    </p>
                                </div>
                                <a href="#" class="btn btn-small-border btn-primary ">View Profile</a>
                            </div>

                        </div>



                    </div>



                </div>
            </div>
            </div>
    <!-- </div> -->

   


    <script type="text/javascript" src="assets/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript" src="assets/bootstrap/js/main.js"></script>

</body>

</html>