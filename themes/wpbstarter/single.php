<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package wpbstarter
 */

get_header();
?>

	<?php while ( have_posts() ) : the_post(); ?>
		<?php
			setlocale(LC_TIME, "pt_PT");
			$start_date = strtotime(get_field('start_date'));
			$end_date = strtotime(get_field('end_date'));
			$start = date_i18n('d M', $start_date);
			$end = date_i18n('d M', $end_date);
			$ID = get_the_ID();
			$title = get_the_title();
			$subtitle = get_post_meta($ID, 'subtitle', true);
			$description = get_post_meta($ID, 'description', true);
			$location = get_field('location');
			$btn = get_field('button');
			$btn_text = $btn['btn_text'];
			$btn_link = esc_url($btn['btn_link']);
			$featured_image = get_post_meta($ID, 'featured_image', true,);
			$image_gallery = get_field('image_gallery');
		?>
		<main class="fasvs-post">
			<section class="row no-gutters fasvs-post__article">
				<div class="col-12 col-lg-6">
					<article>
						<h1><?= $title ?></h1>
						<h3><?= $subtitle ?></h3>
						<div class="article__content">
							<div class="article__content--action">
								<a href="<?= $btn_link ?>" class="btn btn__primary"><?= $btn_text ?></a>
								<div class="article__content--action__location">
									<span><?= $start ?> - <?= $end ?></span>
									<span><?= esc_html($location -> name) ?></span>
								</div>
							</div>
							<div class="article__content--text">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed euismod lacus. Aliquam lobortis urna vitae placerat scelerisque. Aliquam mattis aliquam neque, id cursus magna tincidunt in. Proin a mauris sit amet lorem malesuada vulputate. Etiam bibendum enim vitae consequat auctor. Phasellus ut urna in lectus accumsan finibus. Phasellus dignissim, leo sed pellentesque accumsan, est mauris aliquet massa, imperdiet vulputate enim mi vitae diam. Maecenas euismod placerat lacus, in tristique felis dapibus a. Vestibulum dui libero, molestie eget eleifend at, interdum eu ante. Maecenas dignissim tellus nec facilisis accumsan. Fusce ut pellentesque ligula. Cras et arcu venenatis, ornare magna in, aliquam nunc. Integer sed lectus ut mi facilisis sollicitudin sed et ligula. Nunc efficitur non elit vel tempor. Aenean ac pellentesque massa, quis varius orci.
								<p>Sed facilisis volutpat ipsum, in convallis lectus luctus eu. Integer in purus in velit iaculis fermentum. In nec est nec nisl dapibus elementum vitae sit amet velit. Phasellus rutrum metus in lorem maximus, sed malesuada elit mattis. Nam tellus mauris, vulputate vitae purus non, aliquam scelerisque augue. Donec mollis nulla ante. Fusce sit amet neque sem. Praesent eu tempus sem. Proin ultricies iaculis tellus, id suscipit turpis porttitor ut.</p>
								<p>Curabitur viverra quis nisl at efficitur. Nunc a magna ex. Ut convallis elementum volutpat. Cras congue mollis rhoncus. Quisque eget venenatis tortor. Sed cursus, magna sed pretium tristique, sem tellus sodales lacus, non faucibus eros lorem non dui. Curabitur nec est eu nisl varius semper. Fusce viverra aliquam libero, a faucibus neque eleifend a. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec vitae ante sem. Sed eu lacus ut nunc accumsan tristique. Aenean blandit placerat lorem, a finibus libero. Maecenas luctus nulla eu risus molestie, nec placerat eros ullamcorper.</p>
								<p>Sed egestas venenatis hendrerit. Praesent non luctus dui, vitae lobortis tortor. Morbi mattis dignissim massa. Aliquam suscipit mi ac sodales venenatis. Aliquam eu arcu non orci efficitur fringilla ac at orci. Donec eu interdum felis. Pellentesque placerat purus eget metus rutrum feugiat. Quisque congue ultricies neque, porta gravida risus bibendum vitae. Etiam lorem odio, ultricies et sapien vitae, fringilla congue leo. Praesent non eleifend turpis.</p></p>
							</div>
						</div>
					</article>
				</div>
				<div class="col-12 col-lg-6">
					<img class="fasvs-post__featured-image" src="http://fasvs.local/wp-content/uploads/2022/06/Reportagem-FASVS-Fev-2018-©Jorge-Carmona-Antena-2-42-1.png"/>
				</div>
			</section>
			<?php if( $image_gallery ): ?>
				<section class="row fasvs-post__gallery">
					<ul>
						<?php foreach( $image_gallery as $image ): ?>
							<li>
								<a href="<?php echo esc_url($image['full_image_url']); ?>">
									<figure>
										<img src="<?php echo esc_url($image['full_image_url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
										<figcaption>
											<p><?php echo esc_html($image['title']); ?>,  <?php echo esc_html($image['caption']); ?></p>
										</figcaption>
									</figure>
								</a>
							</li>
						<?php endforeach; ?>
					</ul>
				</section>
			<?php endif; ?>
			<section>
				<?php the_content() ?>
			</section>
		</main>

	<?php endwhile; // End of the loop. ?>

<?php
get_footer();
