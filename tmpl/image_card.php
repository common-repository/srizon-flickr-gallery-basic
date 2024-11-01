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
	<div class="full-size-card-image-container srz-clearfix" id="{$scroller_id}"
	        data-maxheight="{$srz_album['maxheight']}"
	        data-hovercaption="{$srz_album['hovercaption']}"
	        data-jsondata = "{$json_data}"
	        data-scrollinterval="{$srz_album['autoslideinterval']}">
		<p class="current-caption"></p>
		<span class="srz-next"></span>
	</div>
EOL;
