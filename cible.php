<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h1>Merci de nous avoir contacter </h1>
<p id="message">
    Bonjour, <?php echo "<strong>".$_POST['user_firstname'] . " ". $_POST['user_lastname']. "</strong>"; ?> merci de nous avoir contacté à propos
    de “<?php echo $_POST['subject']; ?>”.<br>
    Vous serez contacté très prochainement à l'adresse email  <?php echo "<strong>". $_POST['user_mail'] ."</strong>"; ?> <br>ou par téléphone
    au <?php echo "<strong>". $_POST['user_phone'] ."</strong>"; ?> dans les plus brefs délais pour traiter votre demande :<br><br>
    Très cordialement,<br><br>
    le dev apprenti :-)

    <?php echo "<p>--------------------------------------------------------------------------------</p>";?>
    <?php echo "<strong>[Voici le contenu de votre message ]</strong> <br>". $_POST['message']; ?>
</p>
</body>
</html>