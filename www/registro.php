<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>LAMP-PUNTO 5</title>
        <link rel="stylesheet" href="/assets/css/bulma.min.css">
    </head>
    <body>
        <section class="hero is-medium is-info is-bold">
            <div class="hero-body">
                <div class="container has-text-centered">
                    <h1 class="title">
                        Formulario de resgistro
                    </h1>
                </div>
            </div>
        </section>
        <section class="section">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <h3 class="title is-3 has-text-centered">resgistro</h3></h3>
                        <hr>
                        <div class="content">
                            <ul>
                                <li><?= apache_get_version(); ?></li>
                                <li>PHP <?= phpversion(); ?></li>                             
                                <li>
                                    <?php                                         
                                        $link = mysqli_connect("database", "root", $_ENV['MYSQL_ROOT_PASSWORD'], null);

                                        /* check connection */
                                        if (mysqli_connect_errno()) {
                                            printf("MySQL connecttion failed: %s", mysqli_connect_error());
                                        } else {
                                            /* print server version */
                                            printf("MySQL Server %s", mysqli_get_server_info($link));
                                        }
                                        /* close connection */
                                        mysqli_close($link);
                                    ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- <div class="column">
                        <h1>aqui van cosas</h1>
                    </div> -->

                    <div id="container">
                        <form action="db.php" method="post">
                            <div class="form-group">
                                <!-- name -->
                                <label>Nombre:</label>
                                <input type="name" name="name" id="name">
                            </div>
                            <div class="form-group">
                                <!-- cedula -->
                                <br>
                                <label>Cedula:</label>
                                <input type="text" name="cc" id="cc">
                            </div>
                            <div class="form-group">
                                <!-- email  -->
                                <br>
                                <label>Email:</label>
                                <input type="email" name="email" id="email">
                            </div>
                            <div class="form-group">
                                <!-- contraseña -->
                                <br>
                                <label>Contraseña:</label>
                                <input type="password" name="password" id="password">            
                            </div>
                            <div class="form-group">
                                <!-- Submit Button -->
                                <br>
                                <input type="submit" value="Registrarse" id="submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>
