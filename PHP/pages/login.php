<?php

if (filter_input(INPUT_POST,
                'belepesiAdatok',
                FILTER_VALIDATE_BOOLEAN,
                FILTER_NULL_ON_FAILURE)) {
    //-- A kapott adatok feldolgozása    
    $username = htmlspecialchars(filter_input(INPUT_POST, 'username'));

    $password = htmlspecialchars(filter_input(INPUT_POST, 'password'));
    $emailcim = filter_input(INPUT_POST, "emailcim", FILTER_VALIDATE_EMAIL);
    $db->login($emailcim, $username, $password);
    
    if($db->login($emailcim, $username, $password)){
        $_SESSION['login'] = true;
        $_SESSION['username'] = '';
        $_SESSION['password'] = '';
    }
}
?>

<div class="container">
    <form action="#" method="post">
        <div class="row">
            <div class="col-md-4">
                <div class="mb-2">
                    <label for="emailcim" class="form-label">Email cím</label>
                    <input type="text" class="form-control" id="emailcim" name="emailcim" minlength="1" aria-describedby="emailHelp">
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-2">
                    <label for="username" class="form-label">Felhasználó név</label>
                    <input type="text" class="form-control" id="username" name="username" minlength="5" maxlength="50" aria-describedby="emailHelp">
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-2">
                    <label for="password" class="form-label">Jelszó</label>
                    <input type="password" class="form-control" id="password" minlength="2" name="password">
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary" name="belepesiAdatok" value="true">Belépés</button>
    </form>
</div>