<?php
/*
Plugin Name:  Take Away
*/
function name_TakeAway_init()
{
    function name_TakeAway($atts = [], $content = null)
    {
        
        $content .= "Mango Protein Shake : $2.50 <br/>Vanilla Protein Shake : $2.50 <br/>Choco Protein Shake : $2.50 <br/> Iced Tea : $2.50<br />DASANI Water : $2.00<br />Wheat Pasta : $6.50<br />Sweet Corn    : $3.99<br />Any Juice : $2.50<br />Coconut Water : $2.50<br />Fruit Salad : $5.99<br />Green Tea : $2.50";
        
        return $content;
    }
    add_shortcode('name_TakeAway', 'name_TakeAway');
}
add_action('init', 'name_TakeAway_init');
/*echo("Iced Tea      : $2.50<br />");
echo("DASANI Water  : $2.00<br />");
echo("Wheat Pasta   : $6.50<br />");
echo("Sweet Corn    : $3.99<br />");
echo("Any Juice     : $2.50<br />");
echo("Coconut Water : $2.50<br />");
echo("Fruit Salad   : $5.99<br />");
echo("Green Tea     : $2.50");*/
