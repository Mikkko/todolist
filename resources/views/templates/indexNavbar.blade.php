<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link font-weight-bold" id="logoutLink">
                Logout
            </a>
            <form id="frm-logout" action="{{ route('logout') }}" method="POST" hidden>
                {{ csrf_field() }}
            </form>
        </li>
    </ul>
</div>
