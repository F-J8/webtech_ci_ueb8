 <body>
        <div class="container-fluid">
            <div class="jumbotron">
                <h1 class="title">
                    Aufgabenplaner: Personen
                </h1>
            </div>
        </div>

        <div class="row">
            <?php
            include (APPPATH . '/Views/templates/sidebar.php');
            ?>
            <div class="col-md-10">
                <form action="<?= base_url('Personen/index') ?>" method="post">
                    <div>
                        <div id="toolbar">
                            <button class="bt" type="submit" name="btnNeu" id="btnNeu" value="neu">Neu</button>
                        </div>
                        <table class="table table-responsive table-bordered w-100 d-block d-md-table"
                        data-show-columns = "true" showColumnsToggleAll = "true" data-show-toggle="true" data-toggle="table" data-search="true" data-toolbar="#toolbar">
                            <thead>
                                <tr id="tab">
                                    <th>Name</th>
                                    <th>E-Mail</th>
                                    <th>Löschen/Bearbeiten</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            if(isset($personen) && is_array($personen)) {
                                foreach ($personen as $person) {
                                    echo '<tr>';
                                    if(isset($person) && is_array($person)) {
                                            echo('<td>');
                                                echo($person['username']);
                                            echo('</td>');
                                            echo('<td>');
                                                echo($person['email']);
                                            echo('</td>');
                                            echo('<td>');
                                                echo('<button class="btn" name="btnLoeschen" type ="submit" id="btnLoeschen" value="' . $person['id'] . '"><i class="fa fa-trash"></i></button>');
                                                echo('<button class="btn" name="btnBearbeiten" type ="submit" id="btnBearbeiten" value="' . $person['id'] . '"><i class="fa fa-pencil"></i></button>');
                                            echo('</td>');
                                    }
                                    echo '</tr>';
                                }
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>