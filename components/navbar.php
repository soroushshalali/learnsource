<nav id="main-navbar" class="navbar navbar-light navbar-expand-lg mt-3 fixed-top">
    <div class="container">
        <div class="navbar-brand">
            <a href="#"><img src="assets/img/logo.png" alt="logo"></a>
        </div>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbar-content"><span class="navbar-toggler-icon"></span></button>
        <div id="navbar-content" class="collapse navbar-collapse justify-content-between">
            <ul class="navbar-nav justify-content-between">
                <li class="nav-item"><a class="nav-link m-lg-3" href="./index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link m-lg-3" href="./panel.php">Panel</a></li>
                <li class="nav-item"><a class="nav-link m-lg-3" href="./article.php">Article</a></li>
                <li class="nav-item"><a class="nav-link m-lg-3" href="#">Contact</a></li>
                <li class="nav-item"><a class="nav-link m-lg-3" href="./articels.php">Articles</a></li>
            </ul>
            <ul class="dropdown">
                <button class="btn btn-success px-4 signin-btn dropdown-toggle" data-toggle="dropdown">Sign
                    In</button>
                <div class="dropdown-menu rounded">
                    <form class="px-4 py-3">
                        <div class="form-group">
                            <label for="exampleDropdownFormEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com">
                        </div>
                        <div class="form-group">
                            <label for="exampleDropdownFormPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="dropdownCheck">
                                <label class="form-check-label" for="dropdownCheck">
                                    Remember me
                                </label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Sign in</button>
                    </form>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">New around here? Sign up</a>
                    <a class="dropdown-item" href="#">Forgot password?</a>
                </div>

            </ul>
        </div>
    </div>
</nav>

<script>
    $(document).ready(function() {
        $(window).scroll(function() {
            if ($(window).scrollTop() > 50) {
                $('#main-navbar').addClass('header-scrolled');
            } else {
                $('#main-navbar').removeClass('header-scrolled');
            }
        });
    });
</script>