
<h1>Mon profil</h1>

Mon adresse électronique : <?= $util["mailU"] ?> <br />
Mon pseudo : <?= $util["pseudoU"] ?> <br />

<hr>

les restaurants que j'aime : <br>
    <a href="./?action=detail&idR=4"><?php $mesTypeCuisineAimes[]</a><br>
    <a href="./?action=detail&idR=6">Le Bistrot Sainte Cluque</a><br>
    <a href="./?action=detail&idR=8">La table de POTTOKA</a><br>
<hr>
les types de cuisine que j'aime : 
<ul id="tagFood">		
    <li class="tag"><span class="tag">#</span>sud ouest</li>
    <li class="tag"><span class="tag">#</span>viande</li>
    <li class="tag"><span class="tag">#</span>grillade</li>
</ul>


<hr>
<a href="./?action=deconnexion">se deconnecter</a>
<br><br>

<?php
var_dump($mesRestosAimes);
foreach($mesRestosAimes as $t){
        echo $t["nomR"]; ?> <br><?php
    }

?>