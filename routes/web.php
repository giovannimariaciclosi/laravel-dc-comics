<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $linksList = [
        'CHARACTERS',
        'COMICS',
        'MOVIES',
        'TV',
        'GAMES',
        'COLLECTIBLES',
        'VIDEOS',
        'FANS',
        'NEWS',
        'SHOP',
    ];

    $iconsList = [
        [
            "text" => "DIGITAL COMICS",
            "image" => "buy-comics-digital-comics.png",
        ],
        [
            "text" => "DC MERCHANDISE",
            "image" => "buy-comics-merchandise.png",
        ],
        [
            "text" => "SUBSCRIPTION",
            "image" => "buy-comics-subscriptions.png",
        ],
        [
            "text" => "COMIC SHOP LOCATOR",
            "image" => "buy-comics-shop-locator.png",
        ],
        [
            "text" => "DC POWER VISA",
            "image" => "buy-dc-power-visa.svg",
        ]
    ];

    $footerLinksList =
        [
            [
                "title" => "DC COMICS",
                "contents" => [
                    "Characters",
                    "Comics",
                    "Movies",
                    "TV",
                    "Games",
                    "Videos",
                    "News",
                ]
            ],
            [
                "title" => "SHOP",
                "contents" => [
                    "Shop DC",
                    "Shop DC Collectibles"
                ]
            ],
            [
                "title" => "DC",
                "contents" => [
                    "Terms Of Use",
                    "Privacy Policy (New)",
                    "Ad Choices",
                    "Advertising",
                    "Jobs",
                    "Subscriptions",
                    "Talent Workshops",
                    "CPSC Certificates",
                    "Ratings",
                    "Shop Help",
                    "Contact Us"
                ]
            ],
            [
                "title" => "SITES",
                "contents" => [
                    "DC",
                    "MAD Magazine",
                    "DC Kids",
                    "DC Universe",
                    "DC Power Visa"
                ]
            ],
        ];

    $socialIcons = [
        "footer-facebook.png",
        "footer-twitter.png",
        "footer-youtube.png",
        "footer-pinterest.png",
        "footer-periscope.png",
    ];

    $comics = config('comics');
    // dd($footerLinksList);


    return view(('home'), compact('linksList', 'comics', 'iconsList', 'footerLinksList', 'socialIcons'));
})->name('home');


Route::get('/comic', function () {
    $linksList = [
        'CHARACTERS',
        'COMICS',
        'MOVIES',
        'TV',
        'GAMES',
        'COLLECTIBLES',
        'VIDEOS',
        'FANS',
        'NEWS',
        'SHOP',
    ];

    $footerLinksList =
        [
            [
                "title" => "DC COMICS",
                "contents" => [
                    "Characters",
                    "Comics",
                    "Movies",
                    "TV",
                    "Games",
                    "Videos",
                    "News",
                ]
            ],
            [
                "title" => "SHOP",
                "contents" => [
                    "Shop DC",
                    "Shop DC Collectibles"
                ]
            ],
            [
                "title" => "DC",
                "contents" => [
                    "Terms Of Use",
                    "Privacy Policy (New)",
                    "Ad Choices",
                    "Advertising",
                    "Jobs",
                    "Subscriptions",
                    "Talent Workshops",
                    "CPSC Certificates",
                    "Ratings",
                    "Shop Help",
                    "Contact Us"
                ]
            ],
            [
                "title" => "SITES",
                "contents" => [
                    "DC",
                    "MAD Magazine",
                    "DC Kids",
                    "DC Universe",
                    "DC Power Visa"
                ]
            ],
        ];

    $socialIcons = [
        "footer-facebook.png",
        "footer-twitter.png",
        "footer-youtube.png",
        "footer-pinterest.png",
        "footer-periscope.png",
    ];

    $comics = config('comics');
    // dd($footerLinksList);


    return view(('comic'), compact('linksList', 'comics', 'footerLinksList', 'socialIcons'));
})->name('comic');
