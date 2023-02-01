<body>
        <div class="container-fluid">
            <div class="jumbotron">
                <h1 class="title">
                    Aufgabenplaner: Todos (Aktuelles Projekt)
                </h1>
            </div>
        </div>

        <div class="row">
            <?php
            include(APPPATH . '/Views/templates/sidebar.php');
            ?>
            <div class="col-md-10">
                <div class="row">
                    <?php
                        $cards = array(
                            array(
                                "ToDo",
                                "test2", "test3"
                            ),
                            array(
                                "Erledigt",
                                 "test4",
                            ),
                            array(
                                "Verschoben",
                                 "test5",
                                 "test6"
                            )
                        );

                        if(isset($cards) && is_array($cards)) {
                            for ($i = 0; $i < count($cards); $i++) {
                                echo '
                                <div class ="col">
                                    <div class="card">
                                        <div class="card-header">'
                                    . $cards[$i][0] . '
                                        </div>
                                        <ul class="list-group">';
                                for ($j = 1; $j < count($cards[$i]); $j++) {
                                    echo(
                                        '<li class="list-group-item">' .
                                        $cards[$i][$j] . '
                                            </li>');
                                }
                                echo '
                                </ul>
                            </div>
                        </div>';
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>