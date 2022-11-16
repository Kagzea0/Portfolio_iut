<!DOCTYPE html>
<html>
  <head>
  <title>réponse du serveur</title>
  </head>
  <body bgcolor="#222436">
        <?php print "Merci pour votre message ";
        print $_POST["nom"] ;
        print " ";
        print $_POST["prenom"];
        ?>
    <p style="display: flex; justify-content: center; vertical-align:middle;">
      <a href='index.html' 
      style="text-decoration: underline #d679ed; 
      font-size: 25px; 
      color: #c4bcbc; 
      font-family: Gill Sans, sans-serif;
      font-weight: 900;
      font-size: 60px;
      position: absolute;
      top: 40%;"> 
      Back to the homepage</a>
    </p>
  </body>
</html> 