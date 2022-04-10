<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">

        </div>
        <div class="sidebar-brand-text mx-3">ITK POS</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->


    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-user-shield"></i>
            <span>Gestion De Sécurité</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

                <a class="collapse-item" href="{{ route('users.index') }}">Gestion Des Utilisateurs</a>
                <a class="collapse-item" href="{{ route('role.index') }}"></i>Gestion Des Roles</a>
            </div>
        </div>

    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('configs.index') }}">
            <i class="fas fa-fw fa-cog"></i>
            <span>Configs</span></a>
    </li>



    <li class="nav-item">
        <a class="nav-link" href="{{ route('categories.index') }}">
            <i class="fa fa-folder" aria-hidden="true"></i>
            <span>Categorie</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('articles.index') }}">
            <i class="fas fa-hamburger"></i>
            <span>Article</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('supplements.index') }}">
            <i class='fas fa-cheese'></i>
            <span>Supplement</span></a>
    </li>


    <!-- Nav Item - Utilities Collapse Menu -->


    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->


    <!-- Nav Item - Pages Collapse Menu -->

    <!-- Sidebar Message -->


</ul>
