
<h1><?= $unResto['nomR']; ?>
</h1>

<span id="note">
</span>
<section>
    Cuisine <br />
    <ul id="tagFood">
        <?php for ($j = 0; $j < count($lesTypesCuisine); $j++) { ?>
            <li class="tag"><span class="tag">#</span><?= $lesTypesCuisine[$j]["libelleTC"] ?></li>
        <?php }
        
         ?>
        

    </ul>

</section>
<p id="principal">
    <?php if (count($lesPhotos) > 0) { ?>
        <img src="photos/<?= $lesPhotos[0]["cheminP"] ?>" alt="photo du restaurant" />
    <?php } ?>
    <br />
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
<?= $unResto['horairesR'];?>


<h2 id="crit">Critiques</h2>


<ul id="critiques">

</ul>



    