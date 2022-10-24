<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

<!-- Sidebar Toggle (Topbar) -->
<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
    <i class="fa fa-bars"></i>
</button>

<!-- Topbar Navbar -->
<ul class="navbar-nav ml-auto">

 
    <!-- Nav Item - User Information -->
    <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{auth()->user()->name}}</span>
            <img class="img-profile rounded-circle"
                src=https://cdn.discordapp.com/attachments/835568551435829279/1014349629938212864/aafa61426c565ecb51201619c1f9969e.jpg>
        </a>
        <!-- Dropdown - User Information -->
        <div class="dropdown-menu dropdo1wn-menu-right shadow animated--grow-in"
            aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#">
                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                Profile
            </a>
            <a class="dropdown-item" href="#">
                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                Settings
            </a>
            <a class="dropdown-item" href="#">
                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                Activity Log
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                logout
            </a>
        </div>
    </li>

</ul>

</nav>
<!-- End of Topbar -->