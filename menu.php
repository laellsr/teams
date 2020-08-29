<nav class="navbar navbar-expand-lg">
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
    	<ul class="navbar-nav ml-auto">
				<?php
					//wp_nav_menu(array('theme_location' => 'nav-menu'));
				/* Para ser mais rapido, preferi não utilizar esta função
				pois a saida vem formatada e tentei utilizar argumentos
				e outras funções e não deu certo, preciso averiguar melhor */
				$menu = wp_get_nav_menu_object( $menu );
				$items = get_objects_in_term( $menu->term_id, 'nav-menu' );
				echo $items;

				$current_menu = 'nav-menu';
				$array_menu = wp_get_nav_menu_items($current_menu);
    $menu = array();
    foreach ($array_menu as $m) {
        if (empty($m->menu_item_parent)) {
            $menu[$m->ID] = array();
            $menu[$m->ID]['ID']      =   $m->ID;
            $menu[$m->ID]['title']       =   $m->title;
            $menu[$m->ID]['url']         =   $m->url;
            echo $menu[$m->ID]['url'];
        }
    }
				?>

            <li class="nav-item">
                <a class="nav-link" href="http://laelteste-com.umbler.net/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://laelteste-com.umbler.net/teams/">Teams</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://laelteste-com.umbler.net/standing/">Standing</a>
            </li>
		</ul>
	</div>		
</nav>