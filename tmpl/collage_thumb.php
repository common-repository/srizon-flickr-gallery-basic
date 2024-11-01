<?php
$extraclass = '';
if ( $srz_album['showhoverzoom'] ) {
    $extraclass .= ' zoom';
}
$data_hovercaption = ( $srz_album['hovercaption'] ) ? $srz_album['hovercaptiontype'] : '';

$data .= '<div class="collage-layout jfbalbum' . $extraclass . '"  id="' . $scroller_id . '"
	data-hovercaption="' . $data_hovercaption . '"
    data-collagepartiallast="' . $srz_album['collagepartiallast'] . '"
    data-maxheight="' . $srz_album['targetheight'] . '"
    data-collagepadding="' . $srz_album['collagepadding'] . '"
>';
foreach ($photos as $image) {
	$caption = nl2br($image['title']);
	$data .= <<<EOL
		<div class="Image_Wrapper" data-caption="{$caption}">
			<a href="{$image['url_l']}" data-title="{$caption}" {$lightbox_attribute}>
				<img alt="{$caption}" src="{$image['url_s']}" data-width="{$image['width_s']}" data-height="{$image['height_s']}" width="{$image['width_s']}" height="{$image['height_s']}" />
			</a>
		</div>
EOL;
}
$data .= '</div>';
