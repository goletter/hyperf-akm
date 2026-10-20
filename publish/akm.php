<?php

declare(strict_types=1);

use function Hyperf\Support\env;

return [
    'base_uri' => env('AKM_BASE_URL', env('CKM_BASE_URL', 'https://akms-openapi.bluemediagroup.cn')),
    'timeout' => (float) env('AKM_TIMEOUT', 10),
    // 'default_headers' => [],
];
