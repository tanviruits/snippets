In general, shortcode outputs need to be returned instead of echoed. Otherwise the content will 
always stay on top of other page contents and even show up on top of edit page contents. Example:

function good_shortcode_function($atts, $content = null) { 
$string = '<p>This is the output of shortcode</p>'; 
$string .= '<p>This is the second line of output appended to the first string</p>';
$string .= '<p>And the third line</p>';
return $string; 
}
add_shortcode('good-shortcode', 'good_shortcode_function'); 


there are times when you need to include files which might echoes something. 
In this case, you need to use ob_get_clean to flush the output like this:

function friendly_loop_shortcode( $atts, $content = null ) {
     extract( shortcode_atts( array(
         'category' => '',
         'module' => ''
     ), $atts ) );

     ob_start();
     include(locate_template('loop-'.$module.'.php'));
     $output = ob_get_clean();
     //print $output; // debug
     return $output;
}

add_shortcode('test', 'friendly_loop_shortcode' );

**This also works anytime you want to echo something in the middle of your shortcode.
