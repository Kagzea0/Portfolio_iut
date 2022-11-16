<!DOCTYPE html>
<html>
  <head>
  <title>rÃ©ponse du serveur</title>
  </head>
  <body>
        <?php print "Merci pour votre message ";
        print $_POST["nom"] ;
        print " ";
        print $_POST["prenom"];
        ?>
    <p><a href='index.html'> Go back to the homepage</a></p>
  </body>
</html> 