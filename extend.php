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
        'extract' => "!vlive\\.tv/video\\(?'ClipId'[-0-9]+)!",
        'iframe'  => [
            'width'  => 544,
            'height' => 306,
            'src'    => 'https://www.vlive.tv/embed/{@ClipId}'
        ]
    ]
);
	   })
];
