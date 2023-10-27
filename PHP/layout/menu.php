<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">Játék Webshop
            </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="index.php">Home</a>
                </li>
                <?php
                if ($_SESSION['login']) {
                    echo '<li class="nav-item">
                        <a class="nav-link ' . ($menu == 'logut' ? ' active' : '') . '" href="index.php?menu=logout">Kilépés</a>
                </li>' . '<li class="nav-item">
                        <a class="nav-link' . ($menu == 'home' ? ' active' : '') . '" aria-current="page" href="home.php?menu=home">Home</a>
                      </li>';
                } else {
                    echo '<li class = "nav-item">
                    <a class = "nav-link ' . ($menu == 'login' ? ' active' : '') . '" href = "index.php?menu=login">Belépés</a>
                    </li>
                    <li class = "nav-item">
                    <a class = "nav-link ' . ($menu == 'regisztracio' ? ' active' : '') . '" href = "index.php?menu=regisztracio">Regisztráció</a>
                    </li>';
                }
                ?>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($menu == 'rolunk' ? ' active' : ''); ?>" href="index.php?menu=rolunk">Rólunk</a>
                </li>             

            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>