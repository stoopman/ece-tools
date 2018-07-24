<?php

return [
    'MAGENTO_CLOUD_RELATIONSHIPS' => base64_encode(json_encode(
        [
            'database' => [
                [
                    'host' => 'db',
                    'path' => 'magento2',
                    'password' => 'magento2',
                    'username' => 'magento2',
                    'port' => '3306',
                ],
            ],
            'redis' => [
                [
                    'host' => 'redis',
                    'port' => '6379'
                ]
            ],
        ]
    )),
    'MAGENTO_CLOUD_ROUTES' => base64_encode(json_encode(
        [
            'http://localhost/' => [
                'type' => 'upstream',
                'original_url' => 'http://{default}',
            ],
            'https://localhost/' => [
                'type' => 'upstream',
                'original_url' => 'https://{default}',
            ],
        ]
    )),
    'MAGENTO_CLOUD_VARIABLES' => base64_encode(json_encode([
            'ADMIN_EMAIL' => 'admin@example.com',
            'ADMIN_PASSWORD' => '123123q',
        ]
    )),
];