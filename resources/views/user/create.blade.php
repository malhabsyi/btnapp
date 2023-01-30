<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="../css/global.css" />
    <link rel="stylesheet" href="../css/UserCreateUser.css" />

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Baloo Bhai:wght@400&display=swap" />
</head>

<body>
    <div class="user-create-user">
        <div class="dashboard-parent3" id="frameContainer">
            <div class="dashboard9">
                <b class="form-pembuatan-user1">Form Pembuatan User pada Kantor Wilayah III</b><b
                    class="create-user2">Create User</b>
            </div>

            <form action="{{ route('registrasi') }}" method="post">
            @csrf
                <div class="nama-user6">
                    <div class="first-name3">
                        <!-- <div class="last-name-child1"></div>
            <b class="emailexamplecom">First Name</b> -->
                        <input type="text" class="email-child1" placeholder="Nama User" name="user_name">
                    </div>
                    <b class="nama-user7">Nama User</b>
                </div>
                <div class="email9">
                    <div class="email10">
                        <!-- <div class="email-child1"></div>
            <b class="emailexamplecom">email@example.com</b> -->
                        <input type="email" class="email-child1" placeholder="email@example.com" name="user_email">
                    </div>
                    <b class="nama-user7">Email</b>
                </div>
                
                <div class="password15">
                    <div class="password16">
                        <!-- <div class="email-child1"></div>
            <b class="emailexamplecom">*************</b> -->
                        <input type="password" placeholder="*************" class="email-child1" name="password">
                    </div>
                    <b class="nama-user7">Password</b>
                </div>
                <div class="re-enter-password3">
                    <div class="password18">
                        <!-- <div class="email-child1"></div>
            <b class="emailexamplecom">102752732364</b> -->
                        <input type="text" class="email-child1" placeholder="102752732364" name="user_telp">
                    </div>
                    <b class="nama-user7">ID</b>
                </div>
                <div class="kantor-cabang22">
                    <div class="password19">
                        <!-- <div class="email-child1"></div>
            <b class="masukkan-kantor-cabang">Masukkan Kantor Cabang</b> -->
                        <input type="text" class="email-child1" placeholder="Masukkan Kantor Cabang" name="kantor_cabang_id">
                    </div>
                    <b class="nama-user7">Kantor Cabang</b>
                </div>
                <div class="role6" >
                    <b class="role7">Role</b>
                    <!-- <div class="role-child2" id="rectangle6"></div> -->
                    <input type="checkbox" class="role-child2" name="role" value="admin">
                    <!-- <div class="role-child3" id="rectangle7"></div> -->
                    <input type="checkbox" class="role-child3" name="role"  value="superadmin">
                    <div class="user24">User</div>
                    <div class="super-admin5">Super Admin</div>
                </div>
                <div class="confirm4">
                    <div class="confirm-item"></div>
                    <button type="submit" class="confirm-item" value="submit">Confirm</button>
                    <!-- <b class="confirm5"></b> -->
                </div>
                <a href="/akun"><img class="go-back-icon3" alt="" src="img/go-back@2x.png" /></a>
        </div>
        </form>

        <div class="hello9">
            <div class="hello-child7"></div>
            <b class="hello-ananda-segaf9">Hello, Ananda Segaf</b><img class="customer-icon9" alt=""
                src="img/customer@2x.png" />
        </div>
        <div class="tab-super-admin9">
            <div class="samping9">
                <div class="back-rect-19"></div>

                <a href="/home" style="color:#d0d2da;">
                    <div class="overview20">
                        <div class="overview-child7"></div>
                        <div class="overview-parent7">
                            <b class="overview21">Overview</b><img class="iconlybolddocument9" alt=""
                                src="img/iconlybolddocument6.svg" />
                        </div>
                    </div>
                </a>


                <div class="outlet25">
                    <div class="outlet-child18"></div>
                    <div class="user25">
                        <b class="user26">User</b><img class="iconlyboldprofile9" alt=""
                            src="img/iconlyboldprofile6.svg" />
                    </div>
                </div>

                <a href="/KantorCabang" style="color:#d0d2da;">
                    <div class="outlet26">
                        <div class="overview-child7"></div>
                        <div class="kantor-cabang-parent7">
                            <b class="user26">Kantor Cabang</b><img class="home-icon9" alt="" src="img/home4@2x.png" />
                        </div>
                    </div>
                </a>

                <a href="/LoginPage" style="color:#d0d2da;">
                    <div class="log-out18">
                        <div class="overview-child7"></div>
                        <div class="log-out-wrapper7"><b class="log-out19">Log out</b></div>
                        <img class="iconlyboldlogout9" alt="" src="img/iconlyboldlogout.svg" />
                    </div>
                </a>
                
                <div class="samping-child7"></div>
                <img class="logo-btn-19" alt="" src="img/logo-btn-1@2x.png" />
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

    <!-- <script>
      var rectangle6 = document.getElementById("rectangle6");
      if (rectangle6) {
        rectangle6.addEventListener("click", function () {
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
            function (e) {
              if (e.target === popup && popup.hasAttribute("closable")) {
                popupStyle.display = "none";
              }
            };
          popup.addEventListener("click", onClick);
        });
      }
      
      var rectangle7 = document.getElementById("rectangle7");
      if (rectangle7) {
        rectangle7.addEventListener("click", function () {
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
            function (e) {
              if (e.target === popup && popup.hasAttribute("closable")) {
                popupStyle.display = "none";
              }
            };
          popup.addEventListener("click", onClick);
        });
      }
      
      var frameContainer = document.getElementById("frameContainer");
      if (frameContainer) {
        frameContainer.addEventListener("click", function (e) {
          window.location.href = "./UserCreateUser2.html";
        });
      }
      </script> -->
</body>

</html>