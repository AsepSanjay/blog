<header class="app-bar fixed-top navy" data-role="appbar">
    <div class="container">
        <a href="/" class="app-bar-element branding"><span class="mif-windows mif-2x fg-blue"></span> Metro</a>

        <ul class="app-bar-menu small-dropdown">
        @if(Auth::check())
            <li>
                <a href="#" class="dropdown-toggle"><span class="mif-database"></span> Master</a>
                <ul class="d-menu" data-role="dropdown" data-no-close="true">
                    <li class="divider"></li>
                    <li>
                        <a href="" class="dropdown-toggle"><span class="mif-lines"></span> Artikel</a>
                        <ul class="d-menu" data-role="dropdown">
                            <li><a href="/artikel"><span class="mif-menu"></span> Semua Artikel</a></li>
                            <li><a href="/artikel/add"><span class="mif-plus"></span> Tambah Artikel</a></li>
                        </ul>
                    </li>
                    <li><a href="{{url('auth/logout')}}"><span class="mif-keyboard-return"></span> Sign Out</a></li>
                </ul>
            </li>
            @else

            <li><a href="{{url('auth/login')}}"><span class="mif-key"></span> Sign In</a></li>
            <li><a href="{{url('auth/register')}}"><span class="mif-pencil"></span> Sign Up</a></li>
        @endif
        </ul>

        <span class="app-bar-pull"></span>

    </div>
</header>