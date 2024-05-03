<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4,
            'image' => 'https://cf.bstatic.com/xdata/images/hotel/max1024x768/491562103.jpg?k=5e302e67774344141b44e08ee5810fee39cf7e03f46801077d20a2c7fc25d2bd&o=&hp=1'
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2,
            'image' => 'https://cf.bstatic.com/xdata/images/hotel/max1024x768/434709237.jpg?k=bcd8863620c467931261c7d0c374408f243d88244489cbce84bc2772c2176fda&o=&hp=1'
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1,
            'image' => 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/05/26/d2/fe/rivamare-hotel.jpg?w=700&h=-1&s=1'
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5,
            'image' => 'https://cf.bstatic.com/xdata/images/hotel/max1024x768/14350963.jpg?k=c995f273d8843f5635d341d881d24ad94e674b83e763f33407e578408efde7dd&o=&hp=1'
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50,
            'image' => 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/29/25/78/50/quark-hotel-milano.jpg?w=700&h=-1&s=1'
        ],

    ];

    function getHotelByName($hotels) {
        $hotelData = array_filter($hotels, function ($item) {
            return $item['name'] == $_GET['name'];
        });
        $detail = array_shift($hotelData);
        return($detail);
    }