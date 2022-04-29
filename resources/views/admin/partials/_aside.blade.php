convenios<div class="left side-menu">
    <div class="slimscroll-menu" id="remove-scroll">
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu" id="side-menu">
              @if(Auth::User()->id == 1)
                <li class="menu-title">Menu</li>
                <li>
                    <a href="{{ route('banners.index') }}">
                        <i class="fa fa-file-image-o"></i> <span> Banners </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('quemSomos.index') }}">
                        <i class="fa fa-users"></i> <span> Quem Somos </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('convenios.index') }}">
                        <i class="fa fa-handshake-o"></i> <span> Convenios </span>
                    </a>
                </li>



                <li>
                    <a href="{{ route('users.index') }}">
                        <i class="fa fa-user"></i>
                        <span>
                            Usuários
                        </span>
                    </a>
                </li>
                @endif

            </ul>
        </div>
        <!-- Sidebar -->
        <div class="clearfix"></div>
    </div>
    <!-- Sidebar -left -->
</div>
