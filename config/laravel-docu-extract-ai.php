<?php

return [
    'enabled' => env('LARAVEL_DOCU_EXTRACT_AI_ENABLED', true),
    'timeout' => env('LARAVEL_DOCU_EXTRACT_AI_TIMEOUT', 30),
    'log_channel' => env('LARAVEL_DOCU_EXTRACT_AI_LOG', 'stack'),
];
