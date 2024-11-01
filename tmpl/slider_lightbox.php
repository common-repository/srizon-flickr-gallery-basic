<?php
$data .= '<div class="loading-wrap"><ul class="elastislide-list jfbalbum"  id="' . $scroller_id . '"
	data-targetheight="' . $srz_album['targetheight'] . '"
	data-animationspeed="' . $srz_album['animationspeed'] . '"
	data-scroll_interval="' . $srz_album['autoslideinterval'] . '"

>';
foreach ( $photos as $image ) {
	$caption = nl2br( $image['title'] );
	$data .= <<<IMGLINK
	<li>
		<a href="{$image['url_l']}" data-title="{$caption}" {$lightbox_attribute}>
			<img src="{$image['url_s']}" alt="{$caption}" width="{$image['width_s']}" height="{$image['height_s']}" />
		</a>
	</li>
IMGLINK;
}
$data .= '</ul></div>';

