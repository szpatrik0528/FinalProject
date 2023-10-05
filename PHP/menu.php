<nav class="navbar">
            <ul>
                <div class="row">
                    <div class="col-5">
                        <li><a href="index.php">Főoldal</a></li>
                        <li><a href="termek.php">Termékek</a></li>
                        <li><a href="jatek.php">Játék letöltése</a></li>
                        <li><a href="rolunk.php">Rólunk</a></li>
                        <li><a href="elerheto.php">Elérhetőség</a></li>
                        <li class="logo"><button onclick="openCartPage()"><i class="fa-solid fa-cart-shopping"></i></button></li>
                    </div>
                    <div class="regform col-7">
                        <form action="">
                            <div class="input-group">
                                <label for="nev">Név:</label><br>
                                <input type="text" id="nev">
                            </div>
                            <div class="input-group">
                                <label for="jelszo">Jelszó:</label><br>
                                <input type="password" id="jelszo">
                            </div>
                            <button onclick="">Bejelentkezés</button>
                            <li><a id="regisztralas" href="regisztralas.html" onclick="window.open(this.href, '_blank', 'width=500,height=500'); return false;">Regisztráció</a></li>
                        </form>
                    </div>
                </div>
            </ul>
        </nav>