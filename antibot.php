<?php
// On fait apparaitre le nom du navigateur utilisé
$navigateur = $_SERVER["HTTP_USER_AGENT"];
// On fait une array() des aspirateurs
$bannav =Array('HTTrack','MJ12bot','Baiduspider','SurveyBot','AboutUsBot','Semager','dotbot','httrack','WebCopier','HTTPClient','websitecopier','webcopier');

// On fait une foreach de l'Array() contenant les navigateurs interdits (définition d'une array(): http: http://php.net/manual/fr/control-structures.foreach.php)
foreach($bannav as $banni){
// On verifie si le navigateur utilisé est présent dans le tableau array()
$comparaison = strstr($navigateur, $banni);

// S'il est présent
if($comparaison !==false){
// On créer un fichier qui contiendras l'IP de la personne qui a aspirer notre site
$fichier ='webcopiers.txt';
$contenu_de_fichier = file_get_contents($fichier);
$contenu_de_fichier .= $_SERVER['REMOTE_ADDR']."\n\n";


file_put_contents($fichier, $contenu_de_fichier);

// contenu du fichier que l'aspirateur va avoir
echo '<center>slt toi t&eacute;m bien utilizer '.$navigateur.' pour telecharj&eacute; mon site tu s&eacute; koi ntm</center>';


exit;
}
}
?>