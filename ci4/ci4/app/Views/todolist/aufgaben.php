 <body>
    <div class="container-fluid">
        <div class="jumbotron">
            <h1 class="title">
                    Aufgabenplaner: Aufgaben
                </h1>
            </div>
        </div>
        <div class="row">
            <?php
            include (APPPATH . '/Views/templates/sidebar.php');
            ?>
            <div class="col-md-10">
                <?php
                $aufgaben = array(
                    array(
                        "bezeichnung" => "HTML Datei erstellen",
                        "beschreibung" => "HTML Datei erstellen",
                        "reiter" => "ToDo",
                        "zuständig" => "Some Dude",
                    ),
                    array(
                        "bezeichnung" => "CSS Datei erstellen",
                        "beschreibung" => "CSS Datei erstellen",
                        "reiter" => "ToDo",
                        "zuständig" => "Max Mustermann",
                    ),
                );

                ?>
                <div>
                    <table>
                        <thead>
                            <tr id="tab">
                                <th>Aufgabenbezeichnung</th>
                                <th>Beschreibung der Aufgabe</th>
                                <th>Reiter</th>
                                <th>Zuständig</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        if(isset($aufgaben) && is_array($aufgaben)) {
                            foreach ($aufgaben as $aufgabe) {
                                echo '<tr>';
                                if(isset($aufgabe) && is_array($aufgabe)) {
                                    foreach ($aufgabe as $i => $item) {
                                        echo('<td>');
                                        if ($i == "zuständig") {
                                            echo($item . '
                                        <button class="btn" style="float: right;"><i class="fa fa-trash"></i></button>
                                        <button class="btn" style="float: right;"><i class="fa fa-pencil"></i></button>');
                                        } else {
                                            echo($item);
                                        }
                                        echo('</td>');
                                    }
                                }
                                echo '</tr>';
                            }
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
                <br>
                <div>
                    <h2>
                        Bearbeiten/erstellen:
                    </h2>
                    <form>
                        <div class="form-group">
                            <label for="aufgabe">Aufgabenbezeichnung:</label><br>
                            <input type="text" id="aufgabe" name="aufgabe" size="81" placeholder="Aufgabe"><br>
                        </div>
                        <div class="form-group">
                            <label for="bez">Beschreibung der Aufgabe:</label><br>
                            <textarea id="bez" rows="5" cols="50" placeholder="Beschreibung"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="datum1">Erstellungsdatum:</label><br>
                            <input id="datum1" type="text" name="fname" size="81" placeholder="01.01.20"><br>
                        </div>
                        <div class="form-group">
                            <label for="datum2">Fällig bis:</label><br>
                            <input id="datum2"type="text" name="fname" size="81" placeholder="01.01.20"><br>
                        </div>
                        <div class="form-group">
                        <label for="reiter">Zugehöriger Reiter:</label><br>
                            <select id="reiter" name="selects">
                                <option value=""disabled selected>- bitte auswählen -</option>
                                <option >ToDo</option>
                                <option >Erledigt</option>
                                <option >Verschoben</option>
                            </select>
                        </div>
                        <br>
                        <br>
                        <div class="form-group">
                            <label for="person">Zuständig:</label><br>
                            <select id="person" name="selects">
                                <option value=""disabled selected>- bitte auswählen -</option>
                                <option >Max Mustermann</option>
                                <option >Max Mustermann</option>
                            </select>
                        </div>
                        <br>
                        <button class = "bt" type="button" name="but1">Speichern</button>
                        <button type="button" name="but3">Reset</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>