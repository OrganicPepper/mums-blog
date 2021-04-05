<?php

return [
    'production' => false,
    'baseUrl' => 'https://artisanstatic.netlify.app',
    'site' => [
        'title' => 'Word and Heart',
        'description' => 'Cathy\'s Blog',
        'image' => 'default-share.png',
    ],
    'owner' => [
        'name' => 'Cathy Douglas'
    ],
    'services' => [
        'cmsVersion' => '2.10.102',
        'analytics' => 'UA-XXXXX-Y',
        'disqus' => 'organicpepper',
        'formcarry' => 'XXXXXXXXXXXX',
        'cloudinary' => [
            'cloudName' => 'organicpepper',
            'apiKey' => '769243572692717',
        ],
    ],
    'collections' => [
        'posts' => [
            'path' => 'posts/{filename}',
            'sort' => '-date',
            'extends' => '_layouts.post',
            'section' => 'postContent',
            'isPost' => true,
            'comments' => true,
            'tags' => [],
            'hasTag' => function ($page, $tag) {
                return collect($page->tags)->contains($tag);
            },
            'prettyDate' => function ($page, $format = 'M j, Y') {
                return date($format, $page->date);
            },
        ],
        'Collection 2' =>[
            'path' => 'collection2/{filename}',
            'sort' => '-date',
            'extends' => '_layouts.post',
            'section' => 'postContent',
            'isPost' => true,
            'comments' => true,
            'tags' => [],
            'hasTag' => function ($page, $tag) {
                return collect($page->tags)->contains($tag);
            },
            'prettyDate' => function ($page, $format = 'M j, Y') {
                return date($format, $page->date);
            },
        ],
        'tags' => [
            'path' => 'tags/{filename}',
            'extends' => '_layouts.tag',
            'section' => '',
            'name' => function ($page) {
                return $page->getFilename();
            },
        ],
    ],
];
