<?php
    $logo =  get_template_directory_uri() . '/assets/imgs/fasvs-logo.png';
    $locations = get_nav_menu_locations();

    function fasvs_get_menu_items($menu_name){
        if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
            $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
            return wp_get_nav_menu_items($menu->term_id);
        }
    }

    $menu_items = fasvs_get_menu_items('fasvs_menu');
    $menu_items_pages = fasvs_get_menu_items('fasvs_menu_pages');



?>

<div class="nav-container">
    <nav class="fasvs-nav">
        <div class="fasvs-nav__menu--button">
            <div>
                <svg width="48px" height="48px" viewBox="0 0 48 48" version="1.1" xmlns="http://www.w3.org/2000/svg">
                    <g>
                        <line x1="0" y1="18" x2="48" y2="18" stroke-width="2" />
                        <line x1="0" y1="29" x2="48" y2="29" stroke-width="2" />
                    </g>
                    <g>
                        <line x1="0" y1="24" x2="48" y2="24" stroke-width="2" />
                        <line x1="0" y1="24" x2="48" y2="24" stroke-width="2" />
                    </g>
                </svg>
            </div>
            <h6>Menu</h6>
        </div>
        <div class="fasvs-nav__logo">
            <img src="<?= esc_url($logo) ?>" />
        </div>
        <div class="fasvs-nav__language">PT | EN</div>
    </nav>
</div>

<?php if(isset($menu_items)): ?>
    <div class="fasvs-menu">
        <div class="fasvs-menu__primary">
            <ul>
                <?php foreach ( (array) $menu_items as $key => $menu_item ): ?>
                    <li>
                        <a class="menu-item" href="<?= esc_html($menu_item->url) ?>"><?= esc_html($menu_item->post_title) ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <?php if(isset($menu_items_pages)): ?>
            <div class="fasvs-menu__secondary">
                    <ul>
                        <?php foreach ( (array) $menu_items_pages as $key => $item ): ?>
                            <li>
                                <a class="menu-item" href="<?= esc_html($item->url) ?>"><?= esc_html($item->title) ?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
        <?php endif; ?>
     </div>
<?php endif; ?>

