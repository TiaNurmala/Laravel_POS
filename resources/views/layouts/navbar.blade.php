<nav class="main-header navbar navbar-expand navbar-light navbar-light">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->

        <!-- Notifications Dropdown Menu -->
        <li class="nav-item">
            <form action="{{ route('logout') }}" method="post">
                @csrf

                <button type="submit" class="btn btn-sm btn-warning">Log Out</button>
            </form>
        </li>
    </ul>

</nav>

