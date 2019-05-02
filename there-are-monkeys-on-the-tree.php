<?php
/**
 
Plugin Name: There are monkeys on the tree
Plugin URI: #
Description: Un semplice plug-in che aggiunge del testo nel piè pagina del sito
Author: Mario B
Version: 1.0
Author URI: #
*/

// Hook the 'wp_footer' action hook, add the function named 'there_are_monkeys' to it
add_action("wp_footer", "there_are_monkeys", 9);
 
// Define 'there_are_monkeys'
function there_are_monkeys()
{
  echo "<p style='color: white; text-align:center'>There are monkeys on the tree</p>";
}
