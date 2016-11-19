<?php 
	$args = array(
		'theme_location'  => 'center_left_menu',
		'menu'            => '',
		'container'       => '',
		'container_class' => '',
		'container_id'    => '',
		'menu_class'      => 'menu',
		'menu_id'         => '',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s </ul>',
		'depth'           => 0,
		'walker' => new Kameleon_Mega_Menu()	
		
	);
	if (has_nav_menu('center_left_menu')) {
		wp_nav_menu( $args ); 
	}else
	echo "<span class='ass-menu'>Please assign a left menu on <strong>Appearance/Menus</strong></span>"; 
?>