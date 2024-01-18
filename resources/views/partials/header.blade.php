<header>
    <div class="logo-and-nav">
        <div class="logo">
            <a href="/">
                <img src="{{URL::asset('img/Schermafbeelding_2023-12-06_om_10.23.31-removebg-preview.png')}}" alt="">
            </a>
        </div>
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/aboutus">About us</a></li>
                <li><a href="/shop">Shop</a></li>
                <li><a href="/support">Support</a></li>
                @if(auth()->check())
                    <li><a href="/dashboard">Dashboard</a></li>
                @endif

            </ul>
        </nav>
    </div>
    @if(auth()->check())
        <div class="logout">
            <a href="/logout">Logout</a>
        </div>
    @else
        <div class="logout">
            <a href="/login">Login</a>
        </div>
    @endif
</header>
