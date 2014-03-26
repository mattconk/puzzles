<?php 
/**
 * list of puzzles available to look at
 *
 * @author Matthew Conk <mattconk@gmail.com>
 * @version Sep 22, 2013
 * @package Puzzle App
 */
require_once 'classes/formating_html.php';
$formating_html = new Formating_Html();
$name = 'List of Puzzles';

echo '<body style="width: 90%; margin: 50px auto;">';
echo '<h1 style="text-align: center;" >'.$formating_html->title($name).'</h1>';

$directories = glob('./*' , GLOB_ONLYDIR);

foreach ($directories as $dir)
{
    if ( $dir != './classes')
    {
        echo '<a href="'.$dir.'">'.$formating_html->title($dir).'</a><br>';
    }    
}

echo '</body>';