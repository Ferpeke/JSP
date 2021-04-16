<!DOCTYPE html>
<html lang='es'>
  <head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0, shrink-to-fit=no'>
    <title>FerPeke</title>
    <?php
      
      require_once 'app/config.php';
      require_once 'app/dependencias.php';
      
    ?>
  </head>
  <body>
    
    <?php
      
      if (isset($_GET['vista_solicitada'])) {
        switch ($_GET['vista_solicitada']) {
          case 'login':
            require_once 'view/login.php';
            break;
          case 'navegador':
            require_once 'view/navbar.php';
            break;
          default:
            require_once 'index.php';
            break;
        }
      } else {
        include_once 'view/login.php';
      }
      
    ?>
    
  </body>
</html>