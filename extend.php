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
					'host'	  => 'vlive.tv',
					'extract' => "!vlive\.tv/video/(?'ClipId'[-0-9]+)!",
					'iframe' => [
						'src'  => '//www.vlive.tv/embed/{@ClipId}'
					]
				]
			);
		$config->BBCodes->addCustom(
               '[snfans src={URL?}][/snfans]',
               '<video preload="" controls="" width="100%"><source src="{URL}" type="video/mp4"></video>'
            );
	   })
];
