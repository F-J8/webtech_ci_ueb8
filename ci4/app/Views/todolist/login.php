    <body>
    <div class="container-fluid">
        <div class="jumbotron">
            <h1 class="title">
                    Aufgabenplaner: Login
                </h1>
            </div>
        </div>

        <div class="container">
            <?php echo form_open('/Login/submit', array('role' => 'form')) ?>

            <legend class="card-header">Login</legend>
            <div class="card-body">
                <div class="form-group pb-2">
                    <label for="email">E-Mail:</label>
                    <input type="email" class="form-control <?php (isset($error['email']))? 'is_invalid' : ''  ?>" id="email" name="email" placeholder="Email hier!"/>
                </div>
                <div class="form-group pb-2">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control <?php (isset($error['password']))? $error['password'] : ''  ?>" id="password" name="password" placeholder="Passwort hier!"/>
                    </div>
                </div>

                <div class="form-check">
                    <input type="checkbox" class="form-check-input <?php (isset($error['checkbox']))? $error['checkbox'] : ''  ?>" id="materialChecked" value='true' checked>
                    <label class="form-check-label" for="materialChecked">AGBs und Datenschutzbedingung akzeptieren</label>
                </div>
                <br>

                <button class="bt btn-primary" value="Sign in" type="submit" name="but1">Einloggen</button>
                <?php echo form_close()?>

            <br>

            <text>
                Noch nicht registriert?
            </text>
            <a href="<?php echo base_url('/Login/regist')?>">
                Registrierung
            </a>
            </div>
        </div>
    </body>
</html>