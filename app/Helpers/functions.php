<?php

use Sqids\Sqids;

function hotelId()
{
    $hotel_id = env('HOTEL_ID');
    $sqids = new Sqids();
    $id = $sqids->encode([$hotel_id]); // "86Rf07"
    return $id;
    //return $sqids->decode($id); // [1, 2, 3]
}
function getHotelPropertyInfomation($_hotel)
{
    $hotel = [
        'id' => $_hotel,
        'location' => ucwords($_hotel, ","),
        'address' => $_hotel . ', Lagos, Nigeria',
        'phone' => '+234 706 612 2407',
        'whatsapp' => '+2347066122407',
        'email' => $_hotel . '@esportahotels.com'
    ];
    switch ($_hotel) {
        case 'ikeja':
            $hotel = [
                'id' => $_hotel,
                'location' => ucwords($_hotel, ","),
                'address' => '15 Fajuyi Ikeja, Lagos, Nigeria',
                'phone' => '+234 704 003 0519',
                'whatsapp' => '+234 704 003 0519',
                'email' => $_hotel . '@esportahotels.com',
                'reviews' => [
                    [
                        'customer_name' => 'James Ikegwuru',
                        'body' => 'The staff are excellent in service delivery. I slept like a baby and I enjoyed every second of my stay. Their meal is very nice. Keep up the good work. Thanks.'
                    ],
                    [
                        'customer_name' => 'Rita Iloge',
                        'body' => 'Safe, peaceful area with top notch service! Excellent price point and very clean rooms. I would highly recommend this hotel!'
                    ],
                ]
            ];
            break;
        case 'magodo':
            $hotel = [
                'id' => $_hotel,
                'location' => ucwords($_hotel, ","),
                'address' => '8B C M D Rd, Magodo GRA Extension, Lagos, Nigeria',
                'phone' => '+234 704 003 0511',
                'whatsapp' => '+234 704 003 0511',
                'email' => $_hotel . '@esportahotels.com'
            ];
            break;
        case 'agidingbi':
            $hotel = [
                'id' => $_hotel,
                'location' => ucwords($_hotel, ","),
                'address' => 'Off Lateef Jakande Rd, beside FIRS, By Anchor Event Center, Agidingbi, Lagos, Nigeria',
                'phone' => '+234 704 003 0517',
                'whatsapp' => '+234 704 003 0517',
                'email' => $_hotel . '@esportahotels.com'
            ];
            break;
        case 'lekki':
            $hotel = [
                'id' => $_hotel,
                'location' => ucwords($_hotel, ","),
                'address' => '71 Admiral Ayinla, Freedom Way, Ikate, Lekki, Lagos, Nigeria',
                'phone' => '+234 704 003 0520',
                'whatsapp' => '+234 704 003 0520',
                'email' => $_hotel . '@esportahotels.com'
            ];
            break;
        case 'ondo':
            $hotel = [
                'id' => $_hotel,
                'location' => ucwords($_hotel, ","),
                'address' => '32 Ondo- Ife Rd Beside Magodo Brooks Estate, Ondo, Nigeria',
                'phone' => '+234 704 003 0521',
                'whatsapp' => '+234 704 003 0521 ',
                'email' => $_hotel . '@esportahotels.com'
            ];
            break;

        default:
            # code...
            break;
    }
    return $hotel;
}

function getHotelReviews($_hotel)
{
    $reviews = [
        [
            'customer_name' => 'James Ikegwuru',
            "body" => "It's the location for me. Not far from the airport and it's in a very secured part of town. Very clean and classy rooms, environment is nice and the food was awesome. The bar by the pool side kept me busy. Kudos of the management."
        ],
        [
            'customer_name' => 'Rita Iloge',
            'body' => "It was a very nice experience, the grilled fish was really cool. I didn't take any drink so I am unable to rate the drinks but overall it was cool and we enjoyed ourselves there is a pool for those who can swim."
        ],
    ];
    switch ($_hotel) {
        case 'ikeja':
            $reviews = [
                [
                    'customer_name' => 'James Ikegwuru',
                    "body" => "It's the location for me. Not far from the airport and it's in a very secured part of town. Very clean and classy rooms, environment is nice and the food was awesome. The bar by the pool side kept me busy. Kudos of the management."
                ],
                [
                    'customer_name' => 'Rita Iloge',
                    'body' => "It was a very nice experience, the grilled fish was really cool. I didn't take any drink so I am unable to rate the drinks but overall it was cool and we enjoyed ourselves there is a pool for those who can swim."
                ],
            ];
            break;
        case 'magodo':
            $reviews = [
                [
                    'customer_name' => 'Mr. Adelaja',
                    "body" => "Lovely place for a good family get away with a good pool facility...with one of the biggest catfish I ever had"
                ],
                [
                    'customer_name' => 'Mr. Adebiyi',
                    'body' => "All round relaxation center. Everything you need is just a call away. There is the lodge, sit out, swimming pool, gaming area, good park car and well equipped security system. You will definitely enjoy your vacation here if you come to Lasgidi. There rooms are affordable and 24/7 electricity either on gen or direct. I had a wonderful mini vacation here."
                ],
            ];
            break;
        case 'agidingbi':
            $reviews = [
                [
                    'customer_name' => 'Ms Favour',
                    "body" => "Nice hangout. The cool and serene environment makes you feel at home like having a party with your folks.
You need to visit and experience it yourself.
Order the well-prepared fish pepper soup/ Grilled fish and enjoy the homemade taste that will keep you coming back."
                ],
                [
                    'customer_name' => 'Rita Iloge',
                    'body' => "Serene environment! Good music , good food , lovely staffs . Home away from home!"
                ],
            ];
            break;
        case 'lekki':
            $reviews = [
                [
                    'customer_name' => 'Ms Beauty',
                    "body" => "The environ suits your classy style for a desired comfort of home away from home
The pool's view is a beach breezy relaxation lounge for a feel of natural air and oxygen. You don't want to miss the tranquil feeling of life and sumptuous meals there."
                ],
                [
                    'customer_name' => 'Mr Alakija',
                    'body' => "If you need tasty Grilled Fish in Lekki at a good price, Esporta Suites is the place to go to! "
                ],
            ];
            break;
        case 'ondo':
            $reviews = [
                [
                    'customer_name' => 'Mr Emmanuel ',
                    "body" => "Esporta Suites is simply the best! Location is easily accessible, with very attractive ambience and clean environment. The staffs are professional, courteous and very polite. Rooms are neat and properly maintained. Free WiFi and cable TV channels available to keep you updated. Enjoy the best of African meals!"
                ],
                [
                    'customer_name' => 'Mr Olalekan',
                    'body' => "Quite a decent hotel in the neighbourhood. Provides complementary breakfast - for one. Receptive staffs. Had them change a TV channel (when I needed to watch a favourite match). Sumptuous meals as well. Remarkably good!"
                ],
            ];
            break;

        default:
            # code...
            break;
    }
    return $reviews;
}

function getHotelRoomCategories($_hotel)
{
    $categories = [
        [
            'name' => 'Standard',
            'id' => 'ikeja-standard',
            'description' => 'Immerse yourself in the epitome of luxury at Esporta, your premier hotel destination in Nigeria. Our hotel redefines elegance and comfort, offering an exquisite escape for discerning travelers.'
        ],
        [
            'name' => 'Deluxe',
            'id' => 'ikeja-deluxe',
            'description' => 'Immerse yourself in the epitome of luxury at Esporta, your premier hotel destination in Nigeria. Our hotel redefines elegance and comfort, offering an exquisite escape for discerning travelers.'
        ]
    ];
    switch ($_hotel) {
        case 'ikeja':
            $categories = [
                [
                    'name' => 'Queen Size',
                    'id' => 'ikeja-queen-size',
                    'rate' => 45000,
                    'description' => 'Immerse yourself in the epitome of luxury at Esporta, your premier hotel destination in Nigeria. Our hotel redefines elegance and comfort, offering an exquisite escape for discerning travelers.'
                ],
                [
                    'name' => 'Classic',
                    'id' => 'ikeja-classic',
                    'rate' => 54000,
                    'description' => 'Immerse yourself in the epitome of luxury at Esporta, your premier hotel destination in Nigeria. Our hotel redefines elegance and comfort, offering an exquisite escape for discerning travelers.'
                ],
                [
                    'name' => 'Deluxe',
                    'id' => 'ikeja-deluxe',
                    'rate' => 63000,
                    'description' => 'Immerse yourself in the epitome of luxury at Esporta, your premier hotel destination in Nigeria. Our hotel redefines elegance and comfort, offering an exquisite escape for discerning travelers.'
                ],
                [
                    'name' => 'Diplomatic',
                    'id' => 'ikeja-diplomatic',
                    'rate' => 81000,
                    'description' => 'Immerse yourself in the epitome of luxury at Esporta, your premier hotel destination in Nigeria. Our hotel redefines elegance and comfort, offering an exquisite escape for discerning travelers.'
                ]
            ];
            break;
        case 'magodo':
            $categories = [
                [
                    'name' => 'Double Room',
                    'id' => 'magodo-double-room',
                    'rate' => 43500,
                    'description' => 'Immerse yourself in the epitome of luxury at Esporta, your premier hotel destination in Nigeria. Our hotel redefines elegance and comfort, offering an exquisite escape for discerning travelers.'
                ],
                [
                    'name' => 'Executive',
                    'id' => 'magodo-executive',
                    'rate' => 52500,
                    'description' => 'Immerse yourself in the epitome of luxury at Esporta, your premier hotel destination in Nigeria. Our hotel redefines elegance and comfort, offering an exquisite escape for discerning travelers.'
                ],
                [
                    'name' => 'Luxury',
                    'id' => 'magodo-luxury',
                    'rate' => 53250,
                    'description' => 'Immerse yourself in the epitome of luxury at Esporta, your premier hotel destination in Nigeria. Our hotel redefines elegance and comfort, offering an exquisite escape for discerning travelers.'
                ],
                [
                    'name' => 'Diplomatic',
                    'id' => 'magodo-diplomatic',
                    'rate' => 63750,
                    'description' => 'Immerse yourself in the epitome of luxury at Esporta, your premier hotel destination in Nigeria. Our hotel redefines elegance and comfort, offering an exquisite escape for discerning travelers.'
                ],
                [
                    'name' => 'Royal',
                    'id' => 'magodo-royal',
                    'rate' => 103500,
                    'description' => 'Immerse yourself in the epitome of luxury at Esporta, your premier hotel destination in Nigeria. Our hotel redefines elegance and comfort, offering an exquisite escape for discerning travelers.'
                ]
            ];
            break;
        case 'agidingbi':
            $categories = [
                [
                    'name' => 'Standard',
                    'id' => 'agidingbi-standard',
                    'rate' => 29250,
                    'description' => 'Immerse yourself in the epitome of luxury at Esporta, your premier hotel destination in Nigeria. Our hotel redefines elegance and comfort, offering an exquisite escape for discerning travelers.'
                ],
                [
                    'name' => 'Double',
                    'id' => 'agidingbi-double',
                    'rate' => 36000,
                    'description' => 'Immerse yourself in the epitome of luxury at Esporta, your premier hotel destination in Nigeria. Our hotel redefines elegance and comfort, offering an exquisite escape for discerning travelers.'
                ]
            ];
            break;
        case 'lekki':
            $categories = [
                [
                    'name' => 'Studio',
                    'id' => 'lekki-studio',
                    'rate' => 27750,
                    'description' => 'Immerse yourself in the epitome of luxury at Esporta, your premier hotel destination in Nigeria. Our hotel redefines elegance and comfort, offering an exquisite escape for discerning travelers.'
                ],
                [
                    'name' => 'Standard',
                    'id' => 'lekki-standard',
                    'rate' => 32250,
                    'description' => 'Immerse yourself in the epitome of luxury at Esporta, your premier hotel destination in Nigeria. Our hotel redefines elegance and comfort, offering an exquisite escape for discerning travelers.'
                ],
                [
                    'name' => 'Executive',
                    'id' => 'lekki-executive',
                    'rate' => 47250,
                    'description' => 'Immerse yourself in the epitome of luxury at Esporta, your premier hotel destination in Nigeria. Our hotel redefines elegance and comfort, offering an exquisite escape for discerning travelers.'
                ],
                [
                    'name' => 'Luxury',
                    'id' => 'lekki-luxury',
                    'rate' => 52500,
                    'description' => 'Immerse yourself in the epitome of luxury at Esporta, your premier hotel destination in Nigeria. Our hotel redefines elegance and comfort, offering an exquisite escape for discerning travelers.'
                ],
                [
                    'name' => 'Ambasadorial',
                    'id' => 'lekki-ambasadorial',
                    'rate' => 63000,
                    'description' => 'Immerse yourself in the epitome of luxury at Esporta, your premier hotel destination in Nigeria. Our hotel redefines elegance and comfort, offering an exquisite escape for discerning travelers.'
                ]
            ];
            break;
        case 'ondo':
            $categories = [
                [
                    'name' => 'Standard',
                    'id' => 'ondo-standard',
                    'rate' => 30000,
                    'description' => 'Immerse yourself in the epitome of luxury at Esporta, your premier hotel destination in Nigeria. Our hotel redefines elegance and comfort, offering an exquisite escape for discerning travelers.'
                ],
                [
                    'name' => 'Executive',
                    'id' => 'ondo-executive',
                    'rate' => 40500,
                    'description' => 'Immerse yourself in the epitome of luxury at Esporta, your premier hotel destination in Nigeria. Our hotel redefines elegance and comfort, offering an exquisite escape for discerning travelers.'
                ],
                [
                    'name' => 'Diplomatic',
                    'id' => 'ondo-diplomatic',
                    'rate' => 52500,
                    'description' => 'Immerse yourself in the epitome of luxury at Esporta, your premier hotel destination in Nigeria. Our hotel redefines elegance and comfort, offering an exquisite escape for discerning travelers.'
                ],
                [
                    'name' => 'Senatorial',
                    'id' => 'ondo-senatorial',
                    'rate' => 55500,
                    'description' => 'Immerse yourself in the epitome of luxury at Esporta, your premier hotel destination in Nigeria. Our hotel redefines elegance and comfort, offering an exquisite escape for discerning travelers.'
                ],
                [
                    'name' => 'Ambasadorial',
                    'id' => 'ondo-ambasadorial',
                    'rate' => 57000,
                    'description' => 'Immerse yourself in the epitome of luxury at Esporta, your premier hotel destination in Nigeria. Our hotel redefines elegance and comfort, offering an exquisite escape for discerning travelers.'
                ],
                [
                    'name' => 'Royal',
                    'id' => 'ondo-royal',
                    'rate' => 82500,
                    'description' => 'Immerse yourself in the epitome of luxury at Esporta, your premier hotel destination in Nigeria. Our hotel redefines elegance and comfort, offering an exquisite escape for discerning travelers.'
                ]
            ];
            break;

        default:
            # code...
            break;
    }
    return $categories;
}
