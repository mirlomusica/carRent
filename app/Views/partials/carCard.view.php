<section class="car-card">
    <h1><?=$carProp["name"];?></h1>
    <h2>BY: <?=$carProp["user_name"];?></h2>
    <?php
        $base64 = base64_encode($carProp["image"]);
    ?>
    <img src="data:image/jpeg;base64,<?=$base64 ?>" alt="Image">
<p><?=$carProp["description"];?></p>
</section>

<style>

.car-card{
    background-color: black;
    color: white;
    margin: 10px;
    padding: 10px;
}
    
</style>
