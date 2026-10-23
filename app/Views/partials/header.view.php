<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title??"App" ?></title>

</head>
<body>
    <header>
        <h1 class="h-8"><?= env("APP_NAME") ?></h1>
    </header>
    <style>
        nav{
            display: flex;
            flex-direction: column;
            width: 100%;
            background-color: aqua;
        }

        header{
            display: flex;
            flex-direction: column;
            width: 100%;
            background-color: black;
            color: white;
        }
        
    </style>

