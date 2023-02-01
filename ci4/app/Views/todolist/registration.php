    <body>
    <div class="container-fluid">
        <div class="jumbotron">
            <h1 class="title">
                Aufgabenplaner: Registrierung
            </h1>
        </div>
    </div>

    <div class="container">
        <?=

        form_open('Login/create', array('role' => 'form')) ?>

        <div class="form-group">
            <label for="name">Username:</label><br>
            <input type="text" class="form-control" id="username" name="username" size="50" ><br>
        </div>

        <div class="form-group">
            <label for="email">Email-Adresse:</label><br>
            <input type="email" class="form-control" id="email" name="email" size="50"><br>
        </div>

        <div class="form-group">
            <label for="password">Passwort:</label><br>
            <input type="password" class="form-control" id="password" name="password" size="50"><br>
        </div>

        <button class="bt" id= "btnRegist" type="submit" name="btnRegist">Registrieren</button>
        <button class="bt2" id= "btnAbbrechen" type="submit" name="btnAbbrechen">Abbrechen</button>
        </form>
    </div>
    </body>
    </html>