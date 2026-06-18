<?php
/**
 * Credential Strip — reusable include.
 *
 * @package ChangeTank
 * @version 2.0
 */

$credentials = array(
	array( 'stat' => '25+', 'label' => 'Years Experience' ),
	array( 'stat' => '15+', 'label' => 'Industries' ),
	array( 'stat' => '&#x2713;', 'label' => 'World-First Projects' ),
	array( 'stat' => '10+', 'label' => 'ASX-listed Clients' ),
	array( 'stat' => '5+', 'label' => 'Countries Delivered In' ),
	array( 'stat' => '100+', 'label' => 'Projects Delivered' ),
);
?>

<div class="credential-strip section--cream" aria-label="Key credentials">
	<div class="container">
		<ul class="credential-strip__list" role="list">
			<?php foreach ( $credentials as $index => $item ) : ?>
			<li class="credential-strip__item">
				<?php if ( $index > 0 ) : ?><aria-hidden span class="credential-strip__divider"></span><?php endif; ?>
				<div class="credential-strip__content">
					<span class="credential-strip__stat"><?php echo esc_html( $item['stat'] ); ?></span>
					<span class="credential-strip__label"><?php echo esc_html( $item['label'] ); ?></span>
				</div>
			</li>
			<?php endforeach; ?>
		</ul>
	</div>
</div>
