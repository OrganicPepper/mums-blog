<?php

return [
    'production' => false,
    'baseUrl' => 'https://artisanstatic.netlify.app',
    'site' => [
        'title' => 'My Jigsaw Blog',
        'description' => 'Personal blog of John Doe.',
        'image' => 'default-share.png',
    ],
    'owner' => [
        'name' => 'John Doe',
        'twitter' => 'johndoe',
        'github' => 'johndoe',
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
