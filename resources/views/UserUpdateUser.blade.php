<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="../css/global.css" />
    <link rel="stylesheet" href="../css/UserUpdateUser.css" />

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Baloo Bhai:wght@400&display=swap" />
</head>

<body>
    <div class="user-update-user">
        <div class="dashboard-parent1">
            <div class="dashboard7">
               
                <b class="perubahan-informasi-user1">Perubahan Informasi User pada Kantor Wilayah III</b>
                <h1 class="update-user1">Update User</h1>
            </div>

            <form action="/update/{{$data->id}}" method="post">
                @csrf
                @method('put')
                <div class="nama-user2">
                    <div class="last-name1">
                        <!-- <div class="last-name-item"></div>
                    <b class="alhabsyi1">Alhabsyi</b> -->
                        <input type="text" class="last-name-item" placeholder="" name="last_name"
                            value="{{$data->last_name}}">
                    </div>
                    <div class="first-name1">
                        <!-- <div class="last-name-item"></div>
                    <b class="elang1">Elang</b> -->
                        <input type="text" class="last-name-item" placeholder="" name="frist_name" value="{{$data->frist_name}}">
                    </div>
                    <b class="nama-user3">Nama User</b>
                </div>
                <div class="email3">
                    <div class="email4">
                        <!-- <div class="email-item"></div>
                    <b class="elang1">elangalhabsyi@btn.com</b> -->
                        <input type="email" class="email-item" placeholder="" name="user_email"   value="{{$data->user_email}}">
                    </div>
                    <b class="nama-user3">Email</b>
                </div>
                <div class="password5">
                    <div class="password6">
                        <!-- <div class="email-item"></div>
                    <b class="elang1">*************</b> -->
                        <input type="password" class="email-item" placeholder="" name="password"   value="{{$data->password}}">
                    </div>
                    <b class="nama-user3">Password</b>
                </div>
                <div class="re-enter-password1">
                    <div class="password8">
                        <!-- <div class="email-item"></div>
                    <b class="elang1">102752732364</b> -->
                        <input type="text" class="email-item" placeholder="" name="nip" value="{{$data->nip}}">
                    </div>
                    <b class="nip1">ID</b>
                </div>
                <div class="kantor-cabang16">
                    <div class="password9">
                        <!-- <div class="email-item"></div>
                    <b class="kc-mulyosari24">KC Mulyosari</b> -->
                        <input type="text" class="email-item" placeholder="" name="kantor_cabang"   value="{{$data->kantor_cabang}}">
                    </div>
                    <b class="nama-user3">Kantor Cabang</b>
                </div>
                <div class="role2">
                    <b class="role3">Role</b>
                    <div class="check-user1">
                        <div class="check-user-inner" id="rectangle6"></div>
                        <!-- <div class="check-user-child1"></div> -->
                        <input type="checkbox" class="check-user-child1" name="role"  value="User"{{$data->role}}>
                    </div>
                    <!-- <div class="role-item" id="rectangle8"></div> -->
                    <input type="checkbox" class="role-item" name="role"   value="Super User"{{$data->role}}>
                    <div class="user18">User</div>
                    <div class="super-admin3">Super Admin</div>
                </div>
                <div class="delete3" id="deleteContainer">
                    <div class="rectangle-parent23">
                        <button class="group-child29"  type="submit" name="submit">Confrim</button>
                        <!-- <b class="delete4">Delete</b> -->
                    </div>
                </div>
                </form>

                <div class="delete5" id="deleteContainer1">
                    <div class="rectangle-parent23">
                        <form action="/delete/{{$data->id}}" method="post">
                            @csrf   
                            @method('delete')
                        <button class="group-child30" type="submit" name="delete">Delete</button>
                        <!-- <b class="delete4">Confirm</b> -->
                        </form>
                    </div>
                </div>
          
            
            <a href="/User"><img class="go-back-icon1" alt="" src="../img/go-back@2x.png" id="goBackImage" /></a>
        </div>
        <div class="hello7">
            <div class="hello-child5"></div>
            <b class="hello-ananda-segaf7">Hello,{{ auth()->user()->frist_name }}</b><img class="customer-icon7" alt=""
                src="../img/customer@2x.png" />
        </div>
        <div class="tab-super-admin7">
            <div class="samping7">
                <div class="back-rect-17"></div>
                <div class="overview16">
                    <div class="overview-child5"></div>

                    <a href="/Overview" style="color:#d0d2da;">
                        <div class="overview-parent5">
                            <b class="overview17">Overview</b><img class="iconlybolddocument7" alt=""
                                src="../img/iconlybolddocument6.svg" />
                        </div>
                </div>
                </a>


                <div class="outlet21">
                    <div class="outlet-child14"></div>
                    <div class="user19">
                        <b class="user20">User</b><img class="iconlyboldprofile7" alt=""
                            src="../img/iconlyboldprofile6.svg" />
                    </div>
                </div>

                <a href="/KantorCabang" style="color:#d0d2da;">
                    <div class="outlet22">
                        <div class="overview-child5"></div>
                        <div class="kantor-cabang-parent5">
                            <b class="user20">Kantor Cabang</b><img class="home-icon7" alt="" src="../img/home4@2x.png" />
                        </div>
                    </div>
                </a>

                <a href="/LoginPage" style="color:#d0d2da;">
                    <div class="log-out14">
                        <div class="overview-child5"></div>
                        <div class="log-out-wrapper5"><b class="log-out15">Log out</b></div>
                        <img class="iconlyboldlogout7" alt="" src="../img/iconlyboldlogout.svg" />
                    </div>
                </a>

                <div class="samping-child5"></div>
                <img class="logo-btn-17" alt="" src="../img/logo-btn-1@2x.png" />
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

    var rectangle8 = document.getElementById("rectangle8");
    if (rectangle8) {
        rectangle8.addEventListener("click", function() {
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

    var deleteContainer = document.getElementById("deleteContainer");
    if (deleteContainer) {
        deleteContainer.addEventListener("click", function(e) {
            window.location.href = "./UserDeleteUser.html";
        });
    }

    var deleteContainer1 = document.getElementById("deleteContainer1");
    if (deleteContainer1) {
        deleteContainer1.addEventListener("click", function(e) {
            window.location.href = "./UserAfterCreate.html";
        });
    }

    var goBackImage = document.getElementById("goBackImage");
    if (goBackImage) {
        goBackImage.addEventListener("click", function(e) {
            window.location.href = "./UserAfterCreate.html";
        });
    }
    </script> -->
</body>

</html>