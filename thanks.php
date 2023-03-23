<?php	
$data = array_map('trim',$_POST );
$data = array_map('htmlentities', $data);
$errors = [];

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!isset($data['user_firstname']) || empty($data['user_firstname'])) {
        $errors[] = 'Le champ prénom est obligatoire';
    } if (!isset($data['user_name']) || empty($data['user_name'])) {
        $errors[] = 'Le champ nom est obligatoire';
    } if (!isset($data['object-message']) || empty($data['object-message'])) {
        $errors[] = 'Le champ sujet du mail est obligatoire';
    } if (!filter_var($data['user_email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Le champ email est obligatoire'; 
    } if (!isset($data['phone']) || empty($data['phone'])) {
        $errors[] = 'Le champ numéro de téléphone est obligatoire';    
    } if (!isset($data['user_message']) || empty($data['user_message'])) {
        $errors[] = 'Le champ message est obligatoire';
    }    
}

$object_message = [
    'remboursement',
    'information',
    'rendez-vous',
    'document'
];

if (!in_array($data['object-message'], $object_message)) {
    $errors[] = 'Vous n\'avez pas sélectionné le bon sujet';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php   if (count($errors) > 0) : ?>
                 <ul>
                    <?php foreach ($errors as $error) : ?>
                        <li><?= $error ?></li>
                    <?php endforeach; ?>
                </ul>
  <?php else : ?>              
    <p> Merci <?= $data['user_firstname'] . ' ' . $data['user_name'] ?> de nous avoir contacté à propos de <?= $data['object-message']?>. <br>

    Un de nos conseillers vous contactera soit à l’adresse <?= $data['user_email'] ?> ou par téléphone au <?= $data['phone'] ?> dans les plus brefs délais pour traiter votre demande : </p> <br>

    <p> <?= $data['user_message'] ?> </p>

  <?php endif; ?>
    
</body>
</html>