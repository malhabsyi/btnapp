<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="../css/global.css" />
    <link rel="stylesheet" href="../css/Overview.css" />

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Baloo Bhai:wght@400&display=swap" />
</head>

<body>
    <div class="overview8">
        <div class="overview-tengah-atas">
            <div class="back-rect-2"></div>
            <div class="outlet12">
                <div class="outlet-child6"></div>
                <b class="kantor-cabang8">Kantor Cabang</b><b class="kantor">{{$kantorcabang}} Kantor</b>
                <div class="outlet-child7"></div>
                <img class="exterior-icon" alt="" src="img/exterior@2x.png" />
            </div>
            <div class="assets">
                <div class="rectangle-parent10">
                    <div class="group-child12"></div>
                    <b class="outlet13">Outlet</b><b class="admin">{{$kantorcabang}} Outlet</b><img class="workstation-icon" alt=""
                        src="img/workstation@2x.png" />
                </div>
                <div class="assets-child"></div>
            </div>
            <div class="user8">
                <div class="rectangle-parent11">
                    <div class="group-child13"></div>
                    <b class="outlet13">User</b><b class="admin" >{{$user}} User</b><img class="male-user-icon" alt=""
                        src="img/male-user@2x.png" />
                </div>
                <div class="user-child"></div>
            </div>
            <div class="super-admin">
                <div class="rectangle-parent12">
                    <div class="group-child14"></div>
                    <b class="outlet13">Super Admin</b><b class="admin">{{$superadmin}} Admin</b><img class="male-user-icon" alt=""
                        src="img/user-shield@2x.png" />
                </div>
            </div>
        </div>
        <div class="dashboard4">
            <b class="informasi-mengenai-kantor">Informasi Mengenai Kantor Wilayah III</b><b
                class="overview9">Overview</b>
        </div>
        <div class="status-outlet">
            <div class="status-outlet-child"></div>
            <div class="status-outlet-parent">
                <b class="status-outlet1">Status Outlet</b><b class="informasi-mengenai-status">Informasi Mengenai
                    Status Outlet</b>
            </div>
            <div class="parent">
                <b class="b">25%</b><b class="sewa8">Sewa</b>
                <div class="group-child15"></div>
            </div>
            <div class="group">
                <b class="b">75%</b><b class="sewa8">Milik Perusahaan</b>
                <div class="group-child16"></div>
            </div>
            <div class="rectangle-parent13">
                <div class="group-child17"></div>
                <div class="group-child18"></div>
            </div>
            <div class="total-outlet-parent">
                <b class="total-outlet">Total Outlet</b><b class="b2">{{$kantorcabang}}</b>
                <div class="group-child19"></div>
                <img class="exterior-icon1" alt="" src="img/exterior@2x.png" /><img class="chevron-down-2-icon" alt=""
                    src="img/chevrondown-2.svg" />
            </div>
        </div>
        <div class="status-sewa">
            <div class="status-outlet-child"></div>
            <div class="status-sewa-parent">
                <b class="status-outlet1">Status Sewa</b><b class="informasi-mengenai-status">
                    <p class="informasi-mengenai-status1">
                        Informasi Mengenai Status Sewa
                    </p>
                    <p class="per-bulan-februari">per Bulan Februari 2023</p>
                </b>
            </div>
            
            
            <div class="circle-wrap">
                <div class="circle">
                    <div class="mask half">
                        <div class="fill"></div>
                    </div>

                    <div class="mask full">
                        <div class="fill"></div>
                    </div>

                    <div class="inside-circle"> </div>
                    <div class="inside-circle2"> </div>
                </div>
            </div>


            <!-- <img class="grafik-merah-icon" alt="" src="img/grafik-merah.svg" /><img class="mask-group-icon" alt=""
            src="img/mask-group.svg" /> -->
            <div class="belum-dibayar">
                <img class="belum-dibayar-child" alt="" src="img/ellipse-3.svg" />
                <div class="sudah-dibayar">Belum Dibayar</div>
                <div class="div">25%</div>
            </div>
            <div class="belum-dibayar2">
                <img class="belum-dibayar-child" alt="" src="img/ellipse-31.svg" />
                <div class="sudah-dibayar">Sudah Dibayar</div>
                <div class="div">75%</div>
            </div>
        </div>
        <div class="hello4">
            <div class="hello-child2"></div>
            <b class="hello-ananda-segaf4">Hello, {{ auth()->user()->frist_name }}</b><img class="customer-icon4" alt=""
                src="img/customer@2x.png" />
        </div>
        <div class="tab-super-admin4">
            <div class="samping4">
                <div class="back-rect-14"></div>
                <div class="overview10">
                    <div class="overview-child2"></div>
                    <div class="overview-parent2">
                        <b class="overview11">Overview</b><img class="iconlybolddocument4" alt=""
                            src="img/iconlybolddocument4.svg" />
                    </div>
                </div>
                <a href="/User" style="color:#d0d2da">
                    <div class="outlet15">
                        <div class="outlet-child8"></div>
                        <div class="user11">
                            <b class="user12">User</b><img class="iconlyboldprofile4" alt=""
                                src="img/iconlyboldprofile.svg" />
                        </div>
                    </div>
                </a>
                <a href="/KantorCabang" style="color:#d0d2da">
                    <div class="outlet16">
                        <div class="outlet-child8"></div>
                        <div class="kantor-cabang-parent2">
                            <b class="user12">Kantor Cabang</b><img class="home-icon4" alt="" src="img/home4@2x.png" />
                        </div>
                    </div>
                </a>

                <a href="/LoginPage" style="color:#d0d2da">
                    <div class="log-out8">
                        <div class="outlet-child8"></div>
                        <div class="log-out-wrapper2">
                            <b class="status-outlet1">Log out</b>
                        </div>
                </a>
                <img class="iconlyboldlogout4" alt="" src="img/iconlyboldlogout.svg" />
            </div>
            <div class="samping-child2"></div>
            <img class="logo-btn-14" alt="" src="img/logo-btn-1@2x.png" />
        </div>
    </div>
    <div class="notification8">
        <div class="notification-child2"></div>
        <img class="iconlylightfilter4" alt="" src="img/iconlylightfilter.svg" />
        <div class="notification9">Notification</div>
        <div class="g112">
            <div class="g1-child10"></div>
            <div class="rectangle-parent14">
                <div class="group-child20"></div>
                <img class="doorbell-icon12" alt="" src="img/doorbell@2x.png" />
            </div>
            <div class="jatuh-tempo12">Jatuh Tempo</div>
            <div class="outlet-kc-mulyosari-container12">
                <b>Outlet KC Mulyosari</b><span> pada </span><b>Kantor Cabang Mulyosari</b><span> mengalami tenggat
                    waktu pembayaran pada tanggal </span><b>28 Februari 2023.</b>
            </div>
        </div>
        <div class="g113">
            <div class="g1-child10"></div>
            <div class="rectangle-parent14">
                <div class="group-child20"></div>
                <img class="doorbell-icon12" alt="" src="img/doorbell@2x.png" />
            </div>
            <div class="jatuh-tempo12">Jatuh Tempo</div>
            <div class="outlet-kc-mulyosari-container12">
                <b>Outlet KC Mulyosari</b><span> pada </span><b>Kantor Cabang Mulyosari</b><span> mengalami tenggat
                    waktu pembayaran pada tanggal </span><b>28 Februari 2023.</b>
            </div>
        </div>
        <div class="g114">
            <div class="g1-child10"></div>
            <div class="rectangle-parent14">
                <div class="group-child20"></div>
                <img class="doorbell-icon12" alt="" src="img/doorbell@2x.png" />
            </div>
            <div class="jatuh-tempo12">Jatuh Tempo</div>
            <div class="outlet-kc-mulyosari-container12">
                <b>Outlet KC Mulyosari</b><span> pada </span><b>Kantor Cabang Mulyosari</b><span> mengalami tenggat
                    waktu pembayaran pada tanggal </span><b>28 Februari 2023.</b>
            </div>
        </div>
    </div>
    </div>

</body>

</html>