
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact</title> 
    </head>
    <body>

    <?php 
    
       (isset($_POST['user_lastname'])); 
       (isset($_POST['user_firstname'])); 
       (isset($_POST['user_mail']));
       (isset($_POST['user_phone']));
       (isset($_POST['subject']));

    ?>



<form action="cible.php" method="post">
    <h1>Nous contacter</h1>
    <div>
        <label for="lastname">Nom :</label>
        <input type="text" id="lastname" name="user_lastname" required >
               
    </div>

    <div>
        <label for="firstname">Prenom :</label>
        <input type="text" id="firstname" name="user_firstname" required>
               

    <div>
        <label for="mail">e-mail :</label>
        <input type="email" id="mail" name="user_mail" required>
    </div>


    <div>
        <label for="phonenumber">Téléphone :</label>
        <input type="tel" id="phonenumber" name="user_phone" required>
    </div>

    <p><label>Type d'information </label>
          <select  name="subject" required>
               <option value="" selected>...</option>
               <option value="information">information </option>
               <option value="formation">formation</option>
               <option value="Accompagnement">accompagnement</option>
               <option value="Dev">dev</option>
               <option value="Job">job</option>
          </select> 
       </p>

     <div>
        <label for="msg">Votre demande :</label>
        <textarea id="msg"name="message"minlength="5"maxlength="256"required placeholder="Votre message ici"></textarea>
    </div>  

    
    <div class="button">
        <button type="submit">Envoyer</button>
    </div>
</form>
</body>
</html>

