
<h1><?= $unResto['nomR']; ?></h1>

<span id="note"></span>
<section>
    Cuisine <br />
</section>
<p id="principal">
    <?= $unResto['descR']; ?>
</p>
<h2 id="adresse">
    Adresse
</h2>
<p>
    <?= $unResto['numAdrR']; ?>
    <?= $unResto['voieAdrR']; ?><br />
    <?= $unResto['cpR']; ?>
    <?= $unResto['villeR']; ?>
</p>

<h2 id="photos">
    Photos
</h2>
<ul id="galerie">
</ul>

<h2 id="horaires">
    Horaires
</h2> 
<?= $unResto['horairesR']; ?>

<h2 id="crit">Critiques</h2>
<?php var_dump($menuBurger) ?>
<ul id="critiques">
</ul>

