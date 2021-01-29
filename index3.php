<?php
    $StudentData = [
        ["Jonathan","Jonathan","Bari","4284",25,"C'est la moutarde de trop qui fait déborder le nez."],
        ["Antoine","Antoine","Guyader","4288",32,"Le gras, c'est la vie !"],
        ["Mariana","Mariana","Moron","4291",20,"- What do we say to bugs?<br/>- Not today."],
        ["Abdellatif","Abdellatif","el Mandili","4293",28,"C'est la mer noir."],
        ["Anthony","Anthony","Bizien Salaun","4296",31,"Never have more children than you have car windows."],
        ["Sophie","Sophie","Raveu","4298",24,"Vers l'infini et au-delà."],
        ["Magali","Magali","Martin","4300",40,"En route pour l'aventure."],
        ["Radhwa","Radhwa","Marzouk","4303",26,"Les performances individuelles, ce n'est pas le plus important. On gagne et on perd en équipe."],
        ["Sebastien","Sébastien","Boulanger","4305",39,"A touché le fond mais creuse encore."],
        ["Tim","Tim K.","Robb","4309",48,"Beam me up, Scotty! There's no intelligent life down here."],
        ["Dimitri","Dimitri","Gaillot","4310",31,"Après réflexion, je n'aurais pas dû installer ubuntu sur la trotinette."],
        ["Isabelle","Isabelle","de Latour","4314",43,"Keep it simple."],
        ["Damien","Damien","Chailloleau-Granato","4320",26,"À vaincre sans péril, on triomphe sans gloire."],
        ["Maxence","Maxence","Wilmes","4323",27,"All your base are belong to us!"],
        ["Alexis","Alexis-Mathieu","Hubert","4324",25,"We are what we repeatedly do. Excellence, then, is not an act, but a habit."],
        ["Anaelle","Anaëlle","Alenda","4332",29,"La vie c'est comme une boîte de chocolats : on ne sait jamais sur quoi on va tomber."],
        ["Marie","Marie Amandine","Delalondre","4338",26,"Mieux vaut avoir la folie des grandeurs que le goût de la médiocrité."],
        ["Jim","James","Ross","4340",39,"I only popped out for a pint!"],
        ["Younes","Younes","Temar","4344",26,"Lorsque l'on se cogne la tête contre un pot et que cela sonne creux, ça n'est pas forcément le pot qui est vide."],
        ["Dilyana","Dilyana","Stefanova","4345",26,"Carpe Diem."]
    ];
$renduHTML = "";
$renduHTML.='<!DOCTYPE html><html lang="fr"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><title>Trombi 3</title><link rel="stylesheet" href="css/style.css"></head><body><header>Trombinoscope</header><section class="trombi">';
foreach($StudentData as $Student) {
    $renduHTML.='<figure class="apprenant"><img src="images/photos/MAD_'.$Student[3].'.jpg" alt="'.$Student[0].'"><figcaption>'.ucfirst(strtolower($Student[1])).' '.strtoupper($Student[2]).' <br>('.$Student[4].' ans)<br><br>'.$Student[5].'</figcaption></figure>';
}
$renduHTML.='</section></body></html>';
echo $renduHTML;