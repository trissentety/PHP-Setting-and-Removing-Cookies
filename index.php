<?php
//set cookie
setcookie("favoriteColor", "pink", time() + (86400 * 2), "/"); //2 days of time
setcookie("favoritePop", "strawberry", time() + (86400 * 4), "/");

//delete cookie
// setcookie("favoriteColor", "pink", time() - 0, "/"); 
// setcookie("favoritePop", "strawberry", time() - 0, "/"); 

foreach ($_COOKIE as $key => $value) {
    echo "{$key} , {$value} <br>";
}

if (isset($_COOKIE["fav_food"])) {
    echo "Spray the walls {$_COOKIE["favoriteColor"]}!";
} else {
    echo "Favorite color unspecified";
}
