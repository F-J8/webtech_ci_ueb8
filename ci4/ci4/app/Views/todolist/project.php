 <body>
    <div class="container-fluid">
        <div class="jumbotron">
            <h1 class="title">
                    Aufgabenplaner: Projekte
                </h1>
            </div>
        </div>
        <div class="row">
            <?php
            include(APPPATH . '/Views/templates/sidebar.php');
            ?>
            <div class="col-md-10">
                <div>
                    <h2>
                        Projekt Auswählen:
                    </h2>
                    <select name ="selects" id="selects">
                            <option value=""disabled selected>- bitte auswählen -</option>
                            <option >test1</option>
                            <option >test2</option>
                    </select>
                    <br>
                    <br>
                    <button class = "bt" type="button" name="but1">Auswählen</button>
                    <button class = "bt" type="button" name="but1">Bearbeiten</button>
                    <button class = "bt2" type="button">Löschen</button>
                </div>
                <br>
                <div>
                    <h2>
                        Projekt bearbeiten/erstellen:
                    </h2>
                    <form>
                        <div class="form-group">
                            <label for="name">Projektname:</label><br>
                            <input type="text" id="name" name="fname" size="81" placeholder="Projekt"><br>
                        </div>
                        <div class="form-group">
                            <label for="bes">Projektbeschreibung:</label><br>
                            <textarea id="bes" rows="5" cols="50" placeholder="Beschreibung"></textarea>
                        </div>
                        <button class = "bt" type="button" name="but1">Speichern</button>
                        <button type="button" name="but3">Reset</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>