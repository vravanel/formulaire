<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="thanks.php"  method="post">
       <div>
            <label  for="nom">Nom :</label>
            <input  type="text"  id="nom"  name="user_name" required>
        </div>
        <div>
            <label for="firstname">Prénom</label>
            <input type="text" id="firstname" name="user_firstname" required>
        </div>
        <div>
            <label  for="courriel">Courriel :</label>
            <input  type="email"  id="courriel"  name="user_email" required>
        </div>
        <div>
            <label for="phone">Numéro de téléphone</label>
            <input type="tel" id="phone" name="phone" required> 
        </div>    
        <div>
            <label for="object">Sujet du mail</label>
            <select name="object-message" id="object" required>
                <option value="">Choissisez le sujet</option>
                <option value="remboursement">Demande de remboursement</option>
                <option value="information">Demande de renseignements</option>
                <option value="rendez-vous">Demande de rendez vous</option>
                <option value="document">Demande de documents</option>
            </select>                
        </div>
        <div>
            <label  for="message">Message :</label>
            <textarea  id="message"  name="user_message" required></textarea>
        </div>
        <div  class="button">
            <button  type="submit">Envoyer votre message</button>
        </div>

</body>
</html>