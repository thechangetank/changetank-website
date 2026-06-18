<?php
/**
 * Credential Strip — reusable include.
 *
 * A horizontal bar of 6 quick-hit credentials displayed below
 * the hero section on the homepage. Cream background, eyebrow
 * text style, orange vertical dividers between items.
 *
 * Usage (in any page template or template part):
 *   get_template_part( 'inc/credential-strip' );
 *
 * @package ChangeTank
 * @version 2.0
 */

$credentials = array(
	array(
		'stat'  => '25+',
		'label' => 'Years Experience',
	),
	array(
		'stat'  => '15+',
		'label' => 'Industries',
	),
	array(
		'stat'  => '&#x2713;',
		'label' => 'World-First Projects',
	),
	array(
		'stat'  => '10+',
		'label' => 'ASX-listed Clients',
	),
	array(
		'stat'  => '5+',
		'label' => 'Countries Delivered In',
	),
	array(
		'stat'  => '100+',
		'label' => 'Projects Delivered',
	),
);
?>

<!-- ============================================================
     CREDENTIAL STRIP
     Sits immediately below the hero section.
     ============================================================ -->
<div class="credential-strip section--cream" aria-label="<?php esc_attr_e( 'Key credentials', 'changetank' ); ?>">
	<div class="container">
		<ul class="credential-strip__list" role="list">
			<?php foreach ( $credentials as $index => $item ) : ?>
			<li class="credential-strip__item">
				<?php if ( $index > 0 ) : ?>
				<span class="credential-strip__divider" aria-hidden="true"></span>
				<?php endif; ?>
				<div class="credential-strip__content">
					<span class="credential-strip__stat"><?php echo esc_html( $item['stat'] ); ?></span>
					<span class="credential-strip__label"><?php echo esc_html( $item['label'] ); ?></span>
				</div>
			</li>
			<?php endforeach; ?>
		</ul>
	</div><!-- /.container -->
</div><!-- /.credential-strip -->

