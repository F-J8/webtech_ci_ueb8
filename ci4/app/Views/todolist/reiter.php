 <body>
    <div class="container-fluid">
        <div class="jumbotron">
            <h1 class="title">
                    Aufgabenplaner: Reiter
                </h1>
            </div>
        </div>
        <div class="row">
            <?php
            include (APPPATH . '/Views/templates/sidebar.php');
            ?>
            <div class="col-md-10">
                <?php
                $reiter = array(
                    array(
                        "name" => "ToDo",
                        "beschreibung" => "Dinge, die erledigt werden müssen."
                    ),
                    array(
                        "name" => "Erledigt",
                        "beschreibung" => "Dinge, die erledigt sind.",
                    ),
                    array(
                        "name" => "Verschoben",
                        "beschreibung" => "Dinge, die später erledigt werden.",
                    )
                );

                ?>
                <div>
                    <table>
                        <thead>
                            <tr id="tab">
                                <th>Name</th>
                                <th>Beschreibung</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        if(isset($reiter) && is_array($reiter)) {
                            foreach ($reiter as $minarray) {
                                echo '<tr>';
                                if(isset($minarray) && is_array($minarray)) {
                                    foreach ($minarray as $i => $item) {
                                        echo('<td>');
                                        if ($i == "beschreibung") {
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
                            <label for="bez">Bezeichnung des Reiters:</label><br>
                            <input type="text" id="bez" name="fname" size="81" placeholder="Reiter"><br>
                        </div>
                        <div class="form-group">
                            <label for="bes" >Beschreibung:</label><br>
                            <textarea id="bes" rows="5" cols="50" placeholder="Beschreibung"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="project">Zugehöriges Projekt:</label><br>
                            <select id="project" name="selects">
                                <option value=""disabled selected>- bitte auswählen -</option>
                                <option >Projekt 1</option>
                                <option >Projekt 2</option>
                            </select>
                        </div>
                        <button class = "bt" type="button" name="but1">Speichern</button>
                        <button type="button" name="but3">Reset</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>