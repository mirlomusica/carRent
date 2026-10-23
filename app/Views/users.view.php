<?php include "partials/header.view.php"; ?>
    <h1>THIS IS THE USERS PAGE</h1>
    <table>
        <tr>
        <th>id</th><th>name</th><th>email</th>
        </tr>
    <?php
        foreach($users as $user){
            echo "<tr>";
            echo "<td>{$user["id"]}</td>";
            echo "<td>{$user["name"]}</td>";
            echo "<td>{$user["email"]}</td>";
            echo "</tr>";
        }
        
    ?>

    </table>
    <style>
    th{
        border: 1px solid black;
    }
    td{
        border: 1px solid black;
    }
    </style>
</body>
</html>
