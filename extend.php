<?php

namespace snfansclub/vlive-flarum-embed;

use Flarum\Extend;
use s9e\TextFormatter\Configurator;
return [
    (new Extend\Formatter)
        ->configure(function (Configurator $config) {
            $config->MediaEmbed->add(
                'vlive',
                [
                    'host'	  => 'vlive.tv',
                    'extract' => "!vlive\.tv/video/('ClipId')!",
                    'iframe' => [
			'width' => 320,
                        'height' => 200,
                        'src'  => '//https://vlive.tv/embed/{@ClipId}',
                    ]
                ]
        })
];
