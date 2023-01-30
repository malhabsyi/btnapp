<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="../css/global.css" />
    <link rel="stylesheet" href="../css/OutletCreate.css" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&display=swap" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Baloo Bhai:wght@400&display=swap" />
</head>

<body>
    <div class="user-create-user-2">
        <div class="dashboard-parent">
            <div class="dashboard">
                <b class="form-pembuatan-user">Form Pembuatan User pada Kantor Wilayah III</b><b
                    class="create-user">Create Outlet</b>
            </div>
            <div class="nama-user">
                <!-- <div class="last-name">
                    <div class="last-name-child"></div>
                    <b class="pradipta">Pradipta</b>
                    <input type="text" class="last-name-child" placeholder="Pradipta">
                </div> -->
                <form action="/createoutlet" method="get">
                @csrf
                    <div class="first-name">
                        <!-- <div class="last-name-child"></div>
                    <b class="naufal">Naufal</b> -->
                        <input type="text" class="email-child" placeholder="" name="kantor_cabang_name">
                    </div>
                    <b class="nip">Nama Outlet</b>
            </div>
            <div class="email">
                <div class="email1">
                    <!-- <div class="email-child"></div>
                    <b class="naufal">naufalpradipta@btn.com</b> -->
                    <input type="text" class="email-child" placeholder="" name="status">
                </div>
                <b class="nip">Status</b>
            </div>
            <div class="password">
                <div class="password1">
                    <!-- <div class="email-child"></div>
                    <b class="naufal">*************</b> -->
                    <input type="text" class="email-child" placeholder="" name="jumlah_mesin">
                </div>
                <b class="nip">Jumlah Mesin</b>
            </div>
            <div class="re-enter-password">
                <div class="password3">
                    <div class="email-child"></div>
                    <b class="naufal">102752732364</b>
                    <input type="text" class="email-child" placeholder="" name="kantor_cabang_location">
                </div>
                <b class="nip">Lokasi</b>
            </div>

            <div class="kantor-cabang">
                <div class="password4">
                    <!-- <div class="email-child"></div> -->
                    <!-- <b class="kc-unair">KC Unair</b> -->
                    <input type="text" class="email-child" placeholder="" name="catatan">
                </div>
                <b class="nip"> Catatan</b>
            </div>
            <!-- <div class="role">
                <b class="role1">Role</b>
                <div class="role-child" id="rectangle6"></div>
                <div class="role-item" id="rectangle7"></div>
                <input type="checkbox" class="role-child">
                <input type="checkbox" class="role-item">
                <div class="user">User</div>
                <div class="super-admin">Super Admin</div>
            </div> -->
            <div class="confirm">
                <!-- <div class="confirm-child"></div> -->
                <button class="confirm-child"></button>
                <b class="confirm1">Confirm</b>
            </div>
            </form>

            <a href="/KantorCabang"><img class="go-back-icon" alt="" src="img/go-back@2x.png" /></a>
        </div>
        <div class="hello">
            <div class="hello-child"></div>
            <b class="hello-ananda-segaf">Hello, {{ auth()->user()->frist_name }}</b><img class="customer-icon" alt=""
                src="img/customer@2x.png" />
        </div>
        <div class="tab-super-admin">
            <div class="samping">
                <div class="back-rect-1"></div>
                <a href="/Overview" style="color:#d0d2da">
                    <div class="overview">
                        <div class="overview-child"></div>
                        <div class="overview-parent">
                            <b class="overview1">Overview</b><img class="iconlybolddocument" alt=""
                                src="img/iconlybolddocument.svg" />
                        </div>
                    </div>
                </a>
                <a href="/User" style="color:#d0d2da">
                <div class="outlet">
                    <div class="outlet-child"></div>
                    <div class="user1">
                        <b class="user2">User</b><img class="iconlyboldprofile" alt=""
                            src="img/iconlyboldprofile.svg" />
                    </div>
                </div>
                </a>
                

                <a href="/KantorCabang" style="color:#d0d2da">
                    <div class="outlet1">
                        <div class="outlet-kantor-cabang"></div>
                        <div class="kantor-cabang-parent">
                            <b class="user2">Kantor Cabang</b><img class="home-icon" alt="" src="img/home@2x.png" />
                        </div>
                    </div>
                </a>
                <a href="/LoginPage" style="color:#d0d2da">
                    <div class="log-out">
                        <div class="overview-child"></div>
                        <div class="log-out-wrapper"><b class="log-out1">Log out</b></div>
                        <img class="iconlyboldlogout" alt="" src="img/iconlyboldlogout.svg" />
                    </div>
                </a>
                <div class="samping-child"></div>
                <img class="logo-btn-1" alt="" src="img/logo-btn-1@2x.png" />
            </div>
        </div>
    </div>

    <div id="checkBoxContainer" class="popup-overlay" style="display: none">
        <div class="check-box">
            <div class="check">
                <div class="check-child"></div>
                <div class="check-item"></div>
            </div>
        </div>
    </div>

    <script>
    var rectangle6 = document.getElementById("rectangle6");
    if (rectangle6) {
        rectangle6.addEventListener("click", function() {
            var popup = document.getElementById("checkBoxContainer");
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

    var rectangle7 = document.getElementById("rectangle7");
    if (rectangle7) {
        rectangle7.addEventListener("click", function() {
            var popup = document.getElementById("checkBoxContainer");
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