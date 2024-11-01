<?php

$data_hovercaption = ( $srz_album['hovercaption'] ) ? $srz_album['hovercaptiontype'] : '';

$data .= '<div class="collage-layout jfbalbum jfb-big"  id="' . $scroller_id . '"
	data-hovercaption="' . $data_hovercaption . '"
    data-collagepartiallast="' . $srz_album['collagepartiallast'] . '"
    data-maxheight="' . $srz_album['maxheight'] . '"
    data-collagepadding="' . $srz_album['collagepadding'] . '"
>';
foreach ($photos as $image) {
	$caption = nl2br($image['title']);
	$data .= <<<EOL
		<div class="Image_Wrapper" data-caption="{$caption}">
			<a href="javascript:;">
				<img alt="{$caption}" src="{$image['url_l']}" data-width="{$image['width_l']}" data-height="{$image['height_l']}" width="{$image['width_l']}" height="{$image['height_l']}" />
			</a>
		</div>
EOL;
}
$data .= '</div>';

