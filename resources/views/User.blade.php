<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="../css/global.css" />
    <link rel="stylesheet" href="../css/User.css" />

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Baloo Bhai:wght@400&display=swap" />
</head>

<body>
    <div class="user30">
        <div class="dashboard-parent5">
            <div class="dashboard11">
                <b class="informasi-mengenai-user1">Informasi Mengenai User pada Kantor Wilayah III</b><b
                    class="user31">User</b>
            </div>
            <a href="/UserCreateUser">
                <div class="create-user5">
                    <button class="create-user-inner"></button>
                    <b class="create-user6">Create User</b><img class="add-icon2" alt="" src="img/add@2x.png" />
                </div>
            </a>
            <div class="list-user2">
                <div class="list-user-item"></div>
                <b class="list-user3">List User</b>
            </div>

           

                <table cellpadding="15" class="rectangle-parent29">

                    <thead style="background-color:#F2F2F2;">
                        <th>NO</th>
                        <th>Nama</th>
                        <th>Kantor Cabang</th>
                        <th>ID</th>
                        <th></th>
                    </thead>

                    <tbody style="background-color:#ebf3ff;">
                        @php $no = 1; @endphp
                        @foreach ($data as $p)

                        <tr class="user-1-item">
                            <td>{{$no++}}</td>
                            <td>{{$p->frist_name}}</td>
                            <td>{{$p->kantor_cabang}}</td>
                            <td>{{$p->nip}}</td>


                            <td><a href="/updateuser/{{$p->id}}"><img class="next-page-icon31"
                                        src="img/next-page25@2x.png" alt=""></a></td>


                        </tr>

                        @endforeach
                    </tbody>

                </table>


                <!-- <div class="user-11">
                <div class="user-1-item"></div>
                <b class="b23">1</b><b class="elang-alhabsyi5">Elang Alhabsyi</b><b class="kc-mulyosari30">KC
                    Mulyosari</b><b class="b24">081238743207</b><img class="next-page-icon31" alt=""
                    src="img/next-page25@2x.png" id="nextPageIcon" />
            </div> 
            
            <div class="rectangle-parent29">
                <div class="group-child35"></div>
                <div class="no2">No</div>
                <div class="nama1">Nama</div>
                <div class="kantor-cabang27">Kantor Cabang</div>
                <div class="nomor-telepon1">Nomor Telepon</div>
            </div> -->
                <!-- <div class="user-11">
                <div class="user-1-item"></div>
                <b class="b23">1</b><b class="elang-alhabsyi5">Elang Alhabsyi</b><b class="kc-mulyosari30">KC
                    Mulyosari</b><b class="b24">081238743207</b><img class="next-page-icon31" alt=""
                    src="img/next-page25@2x.png" id="nextPageIcon" />
            </div>
            <div class="user-21">
                <div class="user-1-item"></div>
                <b class="b23">2</b><b class="elang-alhabsyi5">Elang Alhabsyi</b><b class="kc-mulyosari30">KC
                    Mulyosari</b><b class="b24">081238743207</b><img class="next-page-icon32" alt=""
                    src="img/next-page25@2x.png" />
            </div>
            <div class="user-31">
                <div class="user-1-item"></div>
                <b class="b23">3</b><b class="elang-alhabsyi5">Elang Alhabsyi</b><b class="kc-mulyosari30">KC
                    Mulyosari</b><b class="b24">081238743207</b><img class="next-page-icon32" alt=""
                    src="img/next-page25@2x.png" />
            </div>
            <div class="user-41">
                <div class="user-1-item"></div>
                <b class="b23">4</b><b class="elang-alhabsyi5">Elang Alhabsyi</b><b class="kc-mulyosari30">KC
                    Mulyosari</b><b class="b24">081238743207</b><img class="next-page-icon32" alt=""
                    src="img/next-page25@2x.png" />
            </div>
            <div class="user-51">
                <div class="user-1-item"></div>
                <b class="b23">5</b><b class="elang-alhabsyi5">Elang Alhabsyi</b><b class="kc-mulyosari30">KC
                    Mulyosari</b><b class="b24">081238743207</b><img class="next-page-icon32" alt=""
                    src="img/next-page25@2x.png" />
            </div> -->
                <div class="filter2" id="filterContainer">
                    <div class="filter-item"></div>
                    <img class="sort-down-icon1" alt="" src="img/sort-down@2x.png" />
                    <div class="filter3">Filter</div>
                </div>
                <div class="search4">
                    <div class="filter-item"></div>
                    <input type="text" class="filter-item" placeholder="Search..">
                    <img class="search-icon2" alt="" src="img/search@2x.png" />
                    <!-- <div class="filter3">Search..</div> -->
                </div>
            </div>
       



        <div class="hello11">
            <div class="hello-child9"></div>
            <b class="hello-ananda-segaf11">Hello, {{ auth()->user()->frist_name}}</b><img class="customer-icon11"
                alt="" src="img/customer@2x.png" />
        </div>
        <div class="notification14">
            <div class="notification-child5"></div>
            <img class="iconlylightfilter7" alt="" src="img/iconlylightfilter.svg" />
            <div class="notification15">Notification</div>
            <div class="g121">
                <div class="g1-child19"></div>
                <div class="rectangle-parent30">
                    <div class="group-child36"></div>
                    <img class="doorbell-icon21" alt="" src="img/doorbell@2x.png" />
                </div>
                <a href="">
                    <div class="jatuh-tempo21">Jatuh Tempo</div>
                    <div class="outlet-kc-mulyosari-container21">
                        <b>Outlet KC Mulyosari</b><span> pada </span><b>Kantor Cabang Mulyosari</b><span> mengalami
                            tenggat
                            waktu pembayaran pada tanggal </span><b>28 Februari 2023.</b>
                    </div>
                </a>
            </div>
            <a href="">
                <div class="g122">
                    <div class="g1-child19"></div>
                    <div class="rectangle-parent30">
                        <div class="group-child36"></div>
                        <img class="doorbell-icon21" alt="" src="img/doorbell@2x.png" />
                    </div>
            </a>
            <a href="">
                <div class="jatuh-tempo21">Jatuh Tempo</div>
                <div class="outlet-kc-mulyosari-container21">
                    <b>Outlet KC Mulyosari</b><span> pada </span><b>Kantor Cabang Mulyosari</b><span> mengalami tenggat
                        waktu pembayaran pada tanggal </span><b>28 Februari 2023.</b>
                </div>
            </a>
        </div>
        <a href="">
            <div class="g123">
                <div class="g1-child19"></div>
                <div class="rectangle-parent30">
                    <div class="group-child36"></div>
                    <img class="doorbell-icon21" alt="" src="img/doorbell@2x.png" />
                </div>
                <div class="jatuh-tempo21">Jatuh Tempo</div>
                <div class="outlet-kc-mulyosari-container21">
                    <b>Outlet KC Mulyosari</b><span> pada </span><b>Kantor Cabang Mulyosari</b><span> mengalami tenggat
                        waktu pembayaran pada tanggal </span><b>28 Februari 2023.</b>
                </div>
            </div>
        </a>
    </div>
    <div class="tab-super-admin11">
        <div class="samping11">
            <div class="back-rect-111"></div>
            <a href="/Overview" style="color:#d0d2da">
                <div class="overview24">
                    <div class="overview-child9"></div>
                    <div class="overview-parent9">
                        <b class="overview25">Overview</b><img class="iconlybolddocument11" alt=""
                            src="img/iconlybolddocument6.svg" />
                    </div>
                </div>
            </a>
            <div class="outlet29">
                <div class="outlet-child22"></div>
                <div class="user32">
                    <b class="user33">User</b><img class="iconlyboldprofile11" alt=""
                        src="img/iconlyboldprofile6.svg" />
                </div>
            </div>
            <a href="/KantorCabang" style="color:#d0d2da">
                <div class="outlet30">
                    <div class="overview-child9"></div>
                    <div class="kantor-cabang-parent9">
                        <b class="user33">Kantor Cabang</b><img class="home-icon11" alt="" src="img/home4@2x.png" />
                    </div>
                </div>
            </a>
            <a href="/LoginPage" style="color:#d0d2da">
                <div class="log-out22">
                    <div class="overview-child9"></div>
                    <div class="log-out-wrapper9"><b class="log-out23">Log out</b></div>
                    <img class="iconlyboldlogout11" alt="" src="img/iconlyboldlogout.svg" />
                </div>
            </a>
            <div class="samping-child9"></div>
            <img class="logo-btn-111" alt="" src="img/logo-btn-1@2x.png" />
        </div>
    </div>
    </div>

    <div id="filterKantorCabang" class="popup-overlay" style="display: none">
        <div class="filter-kantor-cabang">
            <div class="filter-kantor-cabang1">
                <div class="filter-kantor-cabang-child"></div>
                <b class="pilih-kantor-cabang">Pilih Kantor Cabang</b>
                <div class="kc-mulyosari">
                    <div class="kc-mulyosari1">KC Mulyosari</div>
                    <div class="kc-mulyosari-child"></div>
                </div>
                <div class="kc-mulyosari2">
                    <div class="kc-mulyosari1">KC Mulyosari</div>
                    <div class="kc-mulyosari-child"></div>
                </div>
                <div class="kc-mulyosari4">
                    <div class="kc-mulyosari1">KC Mulyosari</div>
                    <div class="kc-mulyosari-child"></div>
                </div>
                <div class="kc-mulyosari6">
                    <div class="kc-mulyosari1">KC Mulyosari</div>
                    <div class="kc-mulyosari-child"></div>
                </div>
                <div class="kc-mulyosari8">
                    <div class="kc-mulyosari1">KC Mulyosari</div>
                    <div class="kc-mulyosari-child"></div>
                </div>
                <div class="kc-mulyosari10">
                    <div class="kc-mulyosari1">KC Mulyosari</div>
                    <div class="kc-mulyosari-child"></div>
                </div>
                <div class="kc-mulyosari12">
                    <div class="kc-mulyosari1">KC Mulyosari</div>
                    <div class="kc-mulyosari-child"></div>
                </div>
                <div class="kc-mulyosari14">
                    <div class="kc-mulyosari1">KC Mulyosari</div>
                    <div class="kc-mulyosari-child"></div>
                </div>
                <div class="kc-mulyosari16">
                    <div class="kc-mulyosari1">KC Mulyosari</div>
                    <div class="kc-mulyosari-child"></div>
                </div>
            </div>
            <div class="done" id="popupdoneContainer">
                <div class="done-child"></div>
                <div class="done1">Done</div>
            </div>
        </div>
    </div>

    <script>
    var popupdoneContainer = document.getElementById("popupdoneContainer");
    if (popupdoneContainer) {
        popupdoneContainer.addEventListener("click", function(e) {
            window.location.href = "./User.html";
        });
    }

    var nextPageIcon = document.getElementById("nextPageIcon");
    if (nextPageIcon) {
        nextPageIcon.addEventListener("click", function(e) {
            window.location.href = "./UserUpdateUser.html";
        });
    }

    var filterContainer = document.getElementById("filterContainer");
    if (filterContainer) {
        filterContainer.addEventListener("click", function() {
            var popup = document.getElementById("filterKantorCabang");
            if (!popup) return;
            var popupStyle = popup.style;
            if (popupStyle) {
                popupStyle.display = "flex";
                popupStyle.zIndex = 100;
                popupStyle.backgroundColor = "rgba(113, 113, 113, 0.3)";
                popupStyle.alignItems = "center";
                popupStyle.justifyContent = "center";
            }
            popup.setAttribute("closable", "");

            var onClick =
                popup.onClick ||
                function(e) {
                    if (e.target === popup && popup.hasAttribute("closable")) {
                        popupStyle.display = "none";
                    }
                };
            popup.addEventListener("click", onClick);
        });
    }
    </script>
</body>

</html>