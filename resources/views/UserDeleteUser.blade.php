<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="../css/global.css" />
    <link rel="stylesheet" href="../css/UserDeleteUser.css" />

    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Baloo Bhai:wght@400&display=swap"
    />
  </head>
  <body>
    <div class="user-delete-user">
      <div class="frame-div">
        <div class="dashboard6">
          <b class="perubahan-informasi-user"
            >Perubahan Informasi User pada Kantor Wilayah III</b
          ><b class="update-user">Update User</b>
        </div>
        <div class="nama-user">
          <div class="last-name">
            <div class="last-name-child"></div>
            <b class="alhabsyi">Alhabsyi</b>
          </div>
          <div class="first-name">
            <div class="last-name-child"></div>
            <b class="elang">Elang</b>
          </div>
          <b class="nama-user1">Nama User</b>
        </div>
        <div class="email">
          <div class="email1">
            <div class="email-child"></div>
            <b class="elang">elangalhabsyi@btn.com</b>
          </div>
          <b class="nama-user1">Email</b>
        </div>
        <div class="password">
          <div class="password1">
            <div class="email-child"></div>
            <b class="elang">*************</b>
          </div>
          <b class="nama-user1">Password</b>
        </div>
        <div class="re-enter-password">
          <div class="password3">
            <div class="email-child"></div>
            <b class="elang">102752732364</b>
          </div>
          <b class="nip">NIP</b>
        </div>
        <div class="kantor-cabang13">
          <div class="password4">
            <div class="email-child"></div>
            <b class="kc-mulyosari23">KC Mulyosari</b>
          </div>
          <b class="nama-user1">Kantor Cabang</b>
        </div>
        <div class="role">
          <b class="role1">Role</b>
          <div class="check-user">
            <div class="check-user-child" id="rectangle6"></div>
            <div class="check-user-item"></div>
          </div>
          <div class="role-child" id="rectangle8"></div>
          <div class="user15">User</div>
          <div class="super-admin2">Super Admin</div>
        </div>
        <div class="delete">
          <div class="rectangle-parent20">
            <div class="group-child26"></div>
            <b class="confirm">Delete</b>
          </div>
        </div>
        <div class="delete2" id="deleteContainer1">
          <div class="rectangle-parent20">
            <div class="group-child27"></div>
            <b class="confirm">Confirm</b>
          </div>
        </div>
        <img class="go-back-icon" alt="" src="img/go-back@2x.png" />
      </div>
      <div class="hello6">
        <div class="hello-child4"></div>
        <b class="hello-ananda-segaf6">Hello, Ananda Segaf</b
        ><img class="customer-icon6" alt="" src="img/customer@2x.png" />
      </div>
      <div class="tab-super-admin6">
        <div class="samping6">
          <div class="back-rect-16"></div>
          <div class="overview14">
            <div class="overview-child4"></div>
            <div class="overview-parent4">
              <b class="overview15">Overview</b
              ><img
                class="iconlybolddocument6"
                alt=""
                src="img/iconlybolddocument6.svg"
              />
            </div>
          </div>
          <div class="outlet19">
            <div class="outlet-child12"></div>
            <div class="user16">
              <b class="user17">User</b
              ><img
                class="iconlyboldprofile6"
                alt=""
                src="img/iconlyboldprofile6.svg"
              />
            </div>
          </div>
          <div class="outlet20">
            <div class="overview-child4"></div>
            <div class="kantor-cabang-parent4">
              <b class="user17">Kantor Cabang</b
              ><img class="home-icon6" alt="" src="img/home4@2x.png" />
            </div>
          </div>
          <div class="log-out12">
            <div class="overview-child4"></div>
            <div class="log-out-wrapper4"><b class="log-out13">Log out</b></div>
            <img
              class="iconlyboldlogout6"
              alt=""
              src="img/iconlyboldlogout.svg"
            />
          </div>
          <div class="samping-child4"></div>
          <img class="logo-btn-16" alt="" src="img/logo-btn-1@2x.png" />
        </div>
      </div>
      <img
        class="user-delete-user-child"
        alt=""
        src="img/rectangle-57.svg"
      />
      <div class="rectangle-parent22">
        <div class="group-child28"></div>
        <b class="apakah-yakin-ingin-container"
          ><p class="apakah-yakin-ingin">Apakah Yakin ingin Menghapus</p>
          <p class="user-elang-alhabsyi">User Elang Alhabsyi?</p></b
        >
        <div class="save" id="saveContainer">
          <div class="save-child"></div>
          <div class="no">No</div>
        </div>
        <div class="save1" id="saveContainer1">
          <div class="save-item"></div>
          <div class="yes">Yes</div>
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
      
      var rectangle8 = document.getElementById("rectangle8");
      if (rectangle8) {
        rectangle8.addEventListener("click", function () {
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
      
      var deleteContainer1 = document.getElementById("deleteContainer1");
      if (deleteContainer1) {
        deleteContainer1.addEventListener("click", function (e) {
          window.location.href = "./UserAfterCreate.html";
        });
      }
      
      var saveContainer = document.getElementById("saveContainer");
      if (saveContainer) {
        saveContainer.addEventListener("click", function (e) {
          window.location.href = "./UserUpdateUser.html";
        });
      }
      
      var saveContainer1 = document.getElementById("saveContainer1");
      if (saveContainer1) {
        saveContainer1.addEventListener("click", function (e) {
          window.location.href = "./UserAfterCreate.html";
        });
      }
      </script>
  </body>
</html>
