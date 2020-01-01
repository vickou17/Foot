<?php
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS','');
$database = "db_symfony";
$db_handle = mysqli_connect(DB_SERVER,DB_USER,DB_PASS);
$db_found = mysqli_select_db($db_handle,$database);
$Nom = isset($_POST["Nom"])? $_POST["Nom"]: "";
$Buts = isset($_POST["Buts"])? $_POST["Buts"]: "";
$Lettre = isset($_POST["Letter"])? $_POST["Letter"]: "";
//$mdp = isset($_POST["pseudo"])? $_POST["pseudo"]: "";

//nom	prenom	age	pseudo	admin	date_création	niveau_etude	domaine	mail
    
if($db_found){
    /*$sql = ('SELECT * FROM equipe');
    
    
    $sql = ('INSERT INTO books(nom, prenom, mail, pseudo) VALUES (\'Acina\', \'Vick\', \'vick.acina@edu.ece.fr\'vickou\')');
    $result = mysqli_query($db_handle,$sql);
    echo"Add successful.";*/
    
    $sql = ('SELECT * FROM equipe');
    $result = mysqli_query($db_handle,$sql);
    while ($row = mysqli_fetch_array($result,MYSQLI_BOTH)){
        printf("Nom : %s<br /> Buts : %d<br /> Lettre : %s", $row['Nom'], $row['Buts'], $row['Letter']);
        echo '<br>';
        
    }
}
else{
    echo"Base de données non trouées";
}
mysqli_close($db_handle);
?>