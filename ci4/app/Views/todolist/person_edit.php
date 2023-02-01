<body>
<div class="container-fluid">
    <div class="jumbotron">
        <?php if (isset($_POST['btnLoeschen'])) {

            echo('
        <h1 class="title">
            Aufgabenplaner: Löschen
        </h1>');
        }
        else if (isset($_POST['btnBearbeiten'])) {
            echo('
        <h1 class="title">
            Aufgabenplaner: Bearbeiten
        </h1>');
        }
        else {
            echo('
        <h1 class="title">
            Aufgabenplaner: Neu
        </h1>');
        }?>
    </div>
</div>

<div class="container">
    <?=form_open('Personen/index', array('role' => 'form')) ?>

            <div class="form-group">
                <label for="name">Username:</label><br>
                <?php
                if(isset($pers)) {
                    echo('<input type="text" class="form-control" id="username" name="username" size="50" value="' . $pers['username'] . '"><br>');
                } else {
                    echo('<input type="text" class="form-control" id="username" name="username" size="50"><br>');
                }
                ?>
            </div>

            <div class="form-group">
                <label for="email">Email-Adresse:</label><br>
                <?php
                if(isset($pers)) {
                    echo('<input type="email" class="form-control" id="email" name="email" size="50" value="' . $pers['email'] . '"><br>');
                } else {
                    echo('<input type="email" class="form-control" id="email" name="email" size="50"><br>');
                }
                ?>
            </div>

            <?php
                if(isset($_POST['btnNeu'])) {
                    echo('
                        <div class="form-group">
                            <label for="password">Passwort:</label><br>
                            <input type="password" class="form-control" id="password" name="password" size="50" ><br>
                        </div>
                    ');
                }
                if(isset($_POST['btnBearbeiten'])) {
                    if(isset($pers))
                    //if($_SESSION['id'] == $pers['id']) 
                    {
                        echo('
                        <div class="form-group">
                            <label for="password">Passwort:</label><br>
                            <input type="password" class="form-control" id="password" name="password" size="50" ><br>
                        </div>
                    ');
                    }
                }
            ?>

        <?php if (isset($_POST['btnLoeschen'])) {
            if(isset($pers))
            echo('<button class = "bt" id= "btnBestaetigen" type="submit" name="btnBestaetigen" value="'.$pers['id'].'">Bestätigen</button>');
        }?>
        <?php if (isset($_POST['btnBearbeiten'])) {
            if(isset($pers))
            echo('<button class = "bt" id= "btnSpeichern" type="submit" name="btnSpeichern" value="'.$pers['id'].'">Speichern</button>');
        }?>
        <?php if (isset($_POST['btnNeu'])) {
            echo('<button class = "bt" id="btnErstellen" type="submit" name="btnErstellen">Erstellen</button>');
        }?>
            <button class="bt2" id= "btnAbbrechen" type="submit" name="btnAbbrechen">Abbrechen</button>
    </form>
</div>
</body>
</html>