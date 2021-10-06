<?php

return [
        'entities' => [
                [
                        'type' => 'object',
                        'subtype' => 'IntegracionElgg',
                        'searchable' => true,
                ],
        ],
        'actions' => [
                'IntegracionElgg/save' => [],
        ],
        'routes' => [
                'view:object:blog' => [
                        'path' => '/IntegracionElgg/view/{guid}/{title?}',
                        'resource' => 'IntegracionElgg/view',
                ],
                'add:object:blog' => [
                        'path' => '/IntegracionElgg/add/{guid?}',
                        'resource' => 'IntegracionElgg/add',
                ],
                'edit:object:blog' => [
                        'path' => '/IntegracionElgg/edit/{guid}/{revision?}',
                        'resource' => 'IntegracionElgg/edit',
                        'requirements' => [
                                'revision' => '\d+',
                        ],
                ],
                'all:object:blog' => [
                        'path' => '/IntegracionElgg/all/{guid?}',
                        'resource' => 'IntegracionElgg/all',
                ],
        ],
];