<?php 

$motDePasse = 'fifthelement';

echo mb_strlen(password_hash ($motDePasse, PASSWORD_BCRYPT, array('cost => 10')));

?>


<!-- status :

abonné : 0
admin : 1

themes :
0 : Economie
1 : Philosophie
2 : Histoire
3 : People
4 : Géographie
5 : Politique


mdps utilisateur : 

Jdupont : azerty
Admin : admin
Leelo27 : fifthelement


 -->
