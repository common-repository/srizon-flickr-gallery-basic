<?php
$j=0;
foreach($photos as $photo){
    $photos[$j]['txt'] = $photos[$j]['title'];
    $photos[$j]['thumb'] = $photos[$j]['url_s'];
    $photos[$j]['src'] = $photos[$j]['url_l'];
    $photos[$j]['width'] = $photos[$j]['width_s'];
    $photos[$j]['height'] = $photos[$j]['height_s'];
    $j++;
}
$json_data = htmlspecialchars( json_encode($photos) );
$data .= <<<EOL
	<div class="full-size-image">
		<div class="loading-wrap">
			<ul class="elastislide-list"  id="{$scroller_id}"
			data-targetheight="{$srz_album['targetheight']}"
			data-maxheight="{$srz_album['maxheight']}"
	        data-animationspeed="{$srz_album['animationspeed']}"
	        data-hovercaption="{$srz_album['hovercaption']}"
	        data-jsondata = "{$json_data}"
	        data-scroll_interval="{$srz_album['autoslideinterval']}">
EOL;
$i = 0;
foreach ($photos as $image) {
    $caption = nl2br($image['title']);
    $data .= <<<EOL
				<li>
					<a href="javascript:;" data-index="{$i}">
						<img src="{$image['url_s']}" alt="{$caption}" width="{$image['width_s']}" height="{$image['height_s']}" />
					</a>
				</li>

EOL;
    $i++;
}
$data .= <<<EOL
			</ul>
		</div>
		<div class="full-size-image-container srz-clearfix">
			<div class="full-image-with-thumb" data-listid="#{$scroller_id}" id="full-{$scroller_id}"></div>
			<span class="srz-prev"></span>
			<span class="srz-next"></span>
		</div>
	</div>
EOL;

