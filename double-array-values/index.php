<?php
/**
 * Takes an array and doubles all of the values
 *
 * @author Matthew Conk <mattconk@gmail.com>
 * @version Feb, 25 2014
 * @package Puzzles
 */

require_once('../classes/formating_arrays.php');
require_once '../classes/formating_html.php';
$formating_html = new Formating_Html();
$formating_arrays = new Formating_Arrays();

$puzzle_name = 'double-array-values';

$input = array(1,2,3,4,'Q');
// $input = 'Hello World!';

/**
 * Doubles elements within an array if they are INT values
 * 
 * @param array $new The Array which will have its values doubled
 * @return array $new The new array, with each INT element doubled | FALSE
 */
function double_values($new)
{
    if ( !is_array($new))
    {
        return 'Not an Array';
    }
    
    $index = count($new);

    for ($i=0; $i<$index; $i++)
    {
        if (is_int($new[$i]))
        {
            $new[$i] = $new[$i] * 2;
        }
    }
    return $new;
}

echo $formating_html->page_open($puzzle_name);
echo $formating_html->puzzle_image($puzzle_name);

    echo $formating_arrays->display_array($input, 'Input');
    echo '<br>';
    echo $formating_arrays->display_array(double_values($input), 'Output');

    echo '<br><script src="https://gist.github.com/mattconk/9786384.js"></script>';
    
echo '</body>';