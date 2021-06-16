<nav class="navbar navbar-expand-lg fixed-top py-3">
    <div class="container">
        <a class="navbar-brand" href="{{ route('dashboard') }}"><span style="font-weight: bold;color:black;">HaSy</span> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link mx-4"  style="color:black;" href="#">Shop <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mr-4"  style="color:black;" href="#">Service</a>
                </li>
                <div class="input-group rounded mx-5">
                    <input type="search" class="form-control rounded pr-5" placeholder="Search" aria-label="Search"
                        aria-describedby="search-addon" />
                    <span class="input-group-text border-0" id="search-addon">
                        <i><img class="img-fluid" src="img/loupe.svg" width=15px></i>
                    </span>
                </div>
                <li class="nav-item">
                    <a class="nav-link ml-4 mr-5"  href="#"><img src="img/heart.svg" width=25px></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ml-4 mr-5" href="#"><img src="img/shopping-bag.svg" width=25px></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ml-4 mr-5" href="{{ route('account') }}"><img src="img/user.svg" width=25px></a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- second main header -->
