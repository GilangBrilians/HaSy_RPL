<nav class="navbar navbar-expand-lg fixed-top py-3">
    <div class="container">
        <a class="navbar-brand" href="{{ route('/') }}"><span style="font-weight: bold;color:black;">HaSy</span> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link mx-4"  style="color:black;" href="{{ route('/') }}">Dashboard <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mr-4"  style="color:black;" href="{{ route('shop') }}">Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mr-4"  style="color:black;" href="{{ route('service') }}">Service</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mr-4 " style="color:black;"  href="#">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn font-weight-bold px-5 " style="color:white;background-color:#193948;margin-left:450px;"  href="{{ route('register-user') }}">Sign Up</a>
                </li>
            </ul>

        </div>
    </div>
</nav>
