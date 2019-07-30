<nav>
    <ul>
        <li class="{{ ($menu=='home')?'active':'' }}"><a href="{{ route('home') }}">HOME</a></li>
        <li class="{{ ($menu=='about')?'active':'' }}"><a href="{{ route('about') }}">TENTANG WHISTLEBLOWER</a></li>
        @if(Auth::user() && Auth::user()->userrole == 'admin')
            <li class="{{ ($menu=='lapor')?'active':'' }}"><a href="{{ route('laporan.admin') }}">Daftar LAPORAN</a></li>
        @else
            <li class="{{ ($menu=='lapor')?'active':'' }}"><a href="{{ route('laporan.add') }}" class="btn btn-primary btn-laporan" >BUAT LAPORAN</a></li>
        @endif
        
        @if(Auth::user())
            <li class="coloumn-one"><a href="#">{{ Auth::user()->username }} 
                <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                <ul style="top:80px;width:120px">
                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                </ul>
            </li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        @else
            <li class="{{ ($menu=='login')?'active':'' }}"><a href="{{ route('login') }}">LOGIN</a></li>
        @endif

    </ul>
</nav>

<style>
    .btn-laporan{
        color:white!important;
        font-weight:bold;
        border-radius:10px;
    }
</style>