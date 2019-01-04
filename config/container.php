<?php

return [
    Base\Base::class => DI\create()
        ->constructor(
            BASE_NAME,
            BASE_VERSION,
            DI\get('Base\Loader'),
            DI\get('Base\Internationalization')
        )
];
