<figure class="centered-text display-inline">
<span class="display-block"><?php echo $data->get_role() ?></span>
<a href="./director.php">
    <img class="img-standard" src="<?php var_dump($data->get_path()); echo $data->get_path() ?>" alt="<?php echo $data->get_firstname()." ".$data->get_lastname() ?>">
    <figcaption><?php echo $data->get_firstname()." ".$data->get_lastname() ?></figcaption>
</a>
</figure>
