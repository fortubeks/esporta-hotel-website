<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function gallery()
    {
        return view('gallery');
    }

    public function reviews()
    {
        return view('reviews');
    }

    public function cuisines()
    {
        return view('cuisines');
    }

    public function hotelIndex($_hotel)
    {
        //get the hotel and navigate to the hotel.idex page with the hotel name
        $hotel = getHotelPropertyInfomation($_hotel);
        $reviews = getHotelReviews($_hotel);
        return view('hotels.index')->with(compact('hotel', 'reviews'));
    }

    public function hotelRooms($_hotel)
    {
        $hotel = getHotelPropertyInfomation($_hotel);
        $categories = getHotelRoomCategories($_hotel);

        return view('hotels.rooms.index')->with(compact('hotel', 'categories'));
    }

    public function hotelGallery($_hotel)
    {
        //get the hotel and navigate to the hotel.idex page with the hotel name
        $hotel = getHotelPropertyInfomation($_hotel);

        return view('hotels.gallery')->with('hotel', $hotel);
    }

    public function hotelReviews($_hotel)
    {
        //get the hotel and navigate to the hotel.idex page with the hotel name
        $hotel = getHotelPropertyInfomation($_hotel);
        $reviews = getHotelReviews($_hotel);

        return view('hotels.reviews')->with(compact('hotel', 'reviews'));
    }

    public function hotelContact($_hotel)
    {
        //get the hotel and navigate to the hotel.idex page with the hotel name
        $hotel = getHotelPropertyInfomation($_hotel);

        return view('hotels.index')->with('hotel', $hotel);
    }

    public function hotelRoomCategory($_hotel, $room)
    {
        //get the hotel and navigate to the hotel.idex page with the hotel name
        $hotel = getHotelPropertyInfomation($_hotel);
        return view('hotels.rooms.show')->with(compact('hotel', 'room'));
    }
}
