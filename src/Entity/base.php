<?php
$servername = 'localhost';
$dbname ='formulaire';
$username = 'root';
$password ='';

try{
    $dbco =new PDO("mysql:host=$servername;dbname=$dbname", $user,$pass);
    $dbco->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql1 = "INSERT INTO
    information equipement(nom,marque,prix,description,quantité)
    VALUES('chaussure','nike','cinquante eurox','chaussure blance avec un tigre dessus','vinght')";
    $dbco->exec($sql1);

    $sql2 = "INSERT INTO
    equipementier('nom','quantité)
    VALUES('ballon','trente')";
    $dbco->exec($slq2);


}

$dsn ='localhost;dbname=formulaire;port=8000;charset=utf8';
$conn = mysqli_connect($servername, $username, $password);
if($con){
    die('Erreur : ' .mysqli_connect_error());
}
echo 'connexion réussie';
use App\Kernel;

require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

return function (array $context) {
    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};

{


$form = "Create TABLE form(
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nom,
    marque,
    prix,
    description,
    quantité,)";
    $dbco->exec($form);
}

catch(PDOException $e) {
    echo 'Erreur : '.$e->getMessage();
}
?>