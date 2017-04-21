<?php
/*
Plugin Name: Hello World
Description: Une simple extension Hello World!!
*/

/* This calls hello_world() function when wordpress initializes.
/* Note that the hello_world doesnt have brackets.*/
add_action('init','hello_world');
function hello_world(){
    echo "<h1>Hello World</h1>";
}
