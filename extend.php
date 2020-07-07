<?php

namespace snfansclub\vliveflarum;

use Flarum\Extend;
use s9e\TextFormatter\Configurator;
return [
    (new Extend\Formatter)
        ->configure(function (Configurator $config) {
             $config->BBCodes->addCustom(
               '[vlive id={NUMBER1?}][/vlive]',
               '<iframe style="height: 416px; width: 100%" src="//www.vlive.tv/embed/{NUMBER1}" scrolling="no" border="0" frameborder="no" framespacing="0" allowfullscreen="true"></iframe>'
            );
        })
];
