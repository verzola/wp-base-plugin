<?php

return [
    'pluginName' => '_base',
    'pluginVersion' => '1.0.0',

    Base\Base::class => DI\create()
        ->constructor(
            DI\get('pluginName'),
            DI\get('pluginVersion'),
            DI\get('Base\Loader'),
            DI\get('Base\Internationalization')
        )
];
