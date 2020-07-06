<?php

/*
 * This file is part of snfansclub/vlive-flarum-embed.
 *
 * Copyright (c) 2020 snfans.club.
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

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
             $config->BBCodes->addCustom(
               '[oneindex src={URL?}][/oneindex]',
               '<video preload="" controls="" width="100%"><source src="{URL}" type="video/mp4"></video>'
            );
        })
];
