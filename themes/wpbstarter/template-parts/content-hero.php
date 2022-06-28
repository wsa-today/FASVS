<?php
    $ID = $args;
    $hero_post = get_post($ID);
    $post_category = get_the_category($ID)[0] -> name;
    $title = $hero_post->post_title;
    $subtitle = get_post_meta($ID, 'subtitle', true);
    $btn = get_post_meta($ID, 'button', true);
    $btn_text = get_post_meta($ID, 'button_btn_text', true);
    $btn_link = esc_url(get_post_meta($ID, 'button_btn_link', true));
	setlocale(LC_TIME, "pt_PT");
    $start_date = strtotime(get_post_meta($ID, 'start_date', true));
    $end_date = strtotime(get_post_meta($ID, 'end_date', true));
    $start = date_i18n('d M', $start_date);
    $end = date_i18n('d M', $end_date);
    $location = get_post_meta($ID, 'location', true)
?>

<section class="row no-gutters fasvs-home__hero">
    <div class="col-12 col-lg-6">
        <div class="fasvs-home__hero--content">
            <h6 class="category-tag"><?= $post_category ?></h6>
            <h1><?= $title ?></h1>
            <h3><?= $subtitle ?></h3>
            <div class="fasvs-home__hero--action">
                <a href="<?= get_permalink($ID) ?>" class="btn btn__primary">Saber mais</a>
                <a href="<?= $btn_link ?>" class="btn btn__primary"><?= $btn_text ?></a>
                <div class="fasvs-home__hero--action__location">
                    <span><?= $start ?> - <?= $end ?></span>
                    <span><?= esc_html($location -> name) ?></span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-6">
        <img class="fasvs-post__featured-image" src="http://fasvs.local/wp-content/uploads/2022/06/Reportagem-FASVS-Fev-2018-©Jorge-Carmona-Antena-2-42-1.png"/>
    </div>
</section>