<?php namespace Views;

  $template = new Template();

/**
 *
 */
class Template
{
    public function __construct()
    {
        ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Administración de estudiantes</title>
    <link rel="stylesheet" href="<?php echo URL;?>Views/template/css/bootstrap.css">
  </head>
  <body>
<?php

    }

    public function __destruct()
    {
        ?>
  </body>
  </html>

    <?php

    }
}


?>
