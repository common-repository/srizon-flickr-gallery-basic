<?php
$j = 0;
foreach($photos as $photo){
    $photos[$j]['txt'] = $photos[$j]['title'];
    $photos[$j]['thumb'] = $photos[$j]['url_s'];
    $photos[$j]['src'] = $photos[$j]['url_l'];
    $photos[$j]['width'] = $photos[$j]['width_s'];
    $photos[$j]['height'] = $photos[$j]['height_s'];
    $j++;
}
$json_data = htmlspecialchars( json_encode( $photos ) );
$data .= <<<EOL
	<div class="full-size-image-container srz-clearfix">
		<div class="single-image-slider full-size-single-image" id="{$scroller_id}"
		    data-targetheight="{$srz_album['targetheight']}"
			data-maxheight="{$srz_album['maxheight']}"
	        data-animationspeed="{$srz_album['animationspeed']}"
	        data-hovercaption="{$srz_album['hovercaption']}"
	        data-jsondata = "{$json_data}"
	        data-scrollinterval="{$srz_album['autoslideinterval']}"></div>
		<span class="srz-prev"></span>
		<span class="srz-next"></span>
	</div>
EOL;

