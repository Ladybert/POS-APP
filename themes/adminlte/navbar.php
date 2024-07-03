<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light py-2 mr-3">

  <!-- container flexbox -->
  <div class="container-fluid d-flex justify-content-between align-items-center">
    <ul class="navbar-nav text-lg mb-2">
      <li class="nav-item">
        <a id="toggle-sidebar" class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-md-inline-block">
        <a href="#" class="nav-link">Dashboard</a>
      </li>
      <li class="nav-item d-none d-md-inline-block">
        <a href="#" class="nav-link">About</a>
      </li>
      
    </ul>
    <!-- SEARCH FORM -->
    

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto d-flex align-items-center">
      <!-- Updated profile button and dropdown -->
      <li class="nav-item dropdown ml-4"> <!-- Mengubah bagian ini -->
        <a href="#" class="nav-link top-0" data-toggle="dropdown">
          <img src="./assets/img/instagram.png" class="rounded-circle" width="25px" alt="profile" style="margin-right: 10px;">
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="profile-button" style="top: 50px;">
          <div class="d-flex flex-column m-3 pr-5" style="width: 100%;">
            <div class="d-flex align-items-center ml-3">
              <img src="./assets/img/excel.png" class="d-flex rounded" width="40px" alt="profile">
              <h3 class="ml-3 text-lg font-weight-bold">Dapit Waluyo</h3>
            </div>
            <br>
            <a href="#" class="dropdown-item text-lg font-weight-normal">My Profile</a> <!-- Mengubah bagian ini -->
            <a href="#" class="dropdown-item text-lg font-weight-normal">Change Password</a> <!-- Mengubah bagian ini -->
            <hr/>
            <a href="#" class="dropdown-item text-lg font-weight-normal text-red">Sign Out</a> <!-- Mengubah bagian ini -->
          </div>
        </div>
      </li>
      <!-- End of profile button and dropdown -->
    </ul>
  </div>
  
  
</nav>
<!-- /.navbar -->