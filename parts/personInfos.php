

<figure class="centered-text display-inline">
<span class="display-block"><?= $data->get_role() ?></span>
<a href="<?= $data->get_role()=='Réalisateur' ? "./director.php" : "./actor.php";?>">
    <img class="img-standard" src="<?= $data->get_path() ?>" alt="<?= $data->get_firstname()." ".$data->get_lastname() ?>">
    <figcaption><?= $data->get_firstname()." ".$data->get_lastname() ?></figcaption>
</a>
</figure>
