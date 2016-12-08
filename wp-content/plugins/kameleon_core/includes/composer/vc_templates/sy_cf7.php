<?php 
/* ================================================================== *\
   ==                                                              ==
   ==                                                              ==
   ==============     C O N T A C T     F O R M 7  	   ============== 
   ==                                                              ==
   ==  															   ==
\* ================================================================== */

function sy_cf7_shortC($atts) {  
	//Contact Form 7 Attributes
 	extract(shortcode_atts(array(						
		'cf7_id' => '',
		'cf7_style' => 'default'
 	), $atts));

 	$styleName ='default'; $styleType ='qaswara'; $styleButton ='qaswara'; 
 	$style =''; 

 	$kmcf7_styles = kameleon_get_single_option('kmcf7_styles'); 
 	if(is_array($kmcf7_styles)){
 		if(array_key_exists($cf7_style,$kmcf7_styles)){
 			$styleName = $kmcf7_styles[$cf7_style]['styleName']; 
 			$styleType = $kmcf7_styles[$cf7_style]['styleType']; 
 			$styleButton =$kmcf7_styles[$cf7_style]['styleButton']; 
 			$style = $kmcf7_styles[$cf7_style]['theStyle']; 
 		}
 		
 	}

 	$outPut = '<div class="kameleon-cf7-container" data-style-name="'.$styleName.'"  data-style="'.$styleType.'" data-button-style="'.$styleButton.'" style="'.$style.'">'.do_shortcode( '[contact-form-7 id="'.$cf7_id.'"]' ).'</div>';
 	return $outPut;
 }
add_shortcode( 'sy_cf7', 'sy_cf7_shortC' );


?>