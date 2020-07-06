<?php

namespace snfansclub\vliveflarum;

use Flarum\Extend;
use s9e\TextFormatter\Configurator;
return [
    (new Extend\Formatter)
        ->configure(function (Configurator $config) {
             $config->MediaEmbed->add(
    'vlive',
    [
        'host'    => ['vlive.tv'],
        'extract' => [
            "!vlive\\.tv/video\\(?'ClipId'[-0-9A-Z_a-z]+)!",
        ],
        'iframe'  => [
            'width'  => 560,
            'height' => 315,
            'src'    => 'http://www.youtube.com/embed/{@ClipId}}'
        ]
    ]
);
	   })
];
