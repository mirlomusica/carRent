<?php include "partials/header.view.php"; ?>
<?php include "partials/nav.view.php"; ?>
<h1>Create a Car</h1>

<form method="post" action="/createCar" enctype="multipart/form-data">
    <label for="name">Name: </label>
    <input type="text" id="name" name="name"></input>
    <label for="description">Description: </label>
    <input type="text" id="description" name="description"></input>
    <input type="file" name="imgBlob">
    <input type="submit" value="CREATE">
</form>

<style>
form{
    display: flex;
    flex-direction: column;
    width: 20vh;
}
</style>
