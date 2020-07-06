<?php

namespace snfansclub\vliveflarum;

use Flarum\Extend;
use s9e\TextFormatter\Configurator;
return [
    (new Extend\Formatter)
        ->configure(function (Configurator $configurator) {
		$configurator->MediaEmbed->add(
    		'vlive',
    		[
        	'host'    => 'vlive.tv',
       	 	'extract' => "!vlive\.tv/(?:video/[^#]+#video=)(?'Clipid'[-0-9]+)!",
        	'flash'   => [
            		'width'  => 560,
            		'height' => 315,
			'src'    => 'https://www.vlive.tv/embed/{@Clipid}'
        ]
    ]
);
	   })
];
