<?php

    
return[
    "dsn"=>$_ENV["DB_DRIVER"].":dbname=".$_ENV["DB_NAME"].";"."host=".$_ENV["DB_HOST"],
    "user"=>$_ENV["DB_USER"],
    "password"=>$_ENV["DB_PASSWORD"]
];

