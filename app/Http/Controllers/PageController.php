<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function gallery(){
        return view('gallery');
    }

    public function reviews(){
        return view('reviews');
    }

    public function cuisines(){
        return view('cuisines');
    }

    public function hotelIndex($_hotel){
        //get the hotel and navigate to the hotel.idex page with the hotel name
        $hotel = [
            'id' => $_hotel,
            'location' => ucwords($_hotel,","),
            'address' => $_hotel.', Lagos, Nigeria',
            'phone' => '+234 706 612 2407',
            'email' => $_hotel.'@esportahotels.com'
        ];
        
        return view('hotels.index')->with('hotel',$hotel);
    }

    public function hotelRooms($_hotel){
        $hotel = [
            'id' => $_hotel,
            'location' => ucwords($_hotel,","),
            'address' => $_hotel.', Lagos, Nigeria',
            'phone' => '+234 706 612 2407',
            'email' => $_hotel.'@esportahotels.com'
        ];
        $categories = [
            ['name' => 'Standard', 'id' => 'ikeja-standard',
            'description' => 'Immerse yourself in the epitome of luxury at Esporta, your premier hotel destination in Nigeria. Our hotel redefines elegance and comfort, offering an exquisite escape for discerning travelers.'],
            ['name' => 'Deluxe', 'id' => 'ikeja-deluxe',
            'description' => 'Immerse yourself in the epitome of luxury at Esporta, your premier hotel destination in Nigeria. Our hotel redefines elegance and comfort, offering an exquisite escape for discerning travelers.']
        ];
        
        return view('hotels.rooms.index')->with(compact('hotel','categories'));
    }

    public function hotelGallery($_hotel){
        //get the hotel and navigate to the hotel.idex page with the hotel name
        $hotel = [
            'id' => $_hotel,
            'location' => ucwords($_hotel,","),
            'address' => $_hotel.', Lagos, Nigeria',
            'phone' => '+234 706 612 2407',
            'email' => $_hotel.'@esportahotels.com'
        ];
        
        return view('hotels.gallery')->with('hotel',$hotel);
    }

    public function hotelReviews($_hotel){
        //get the hotel and navigate to the hotel.idex page with the hotel name
        $hotel = [
            'id' => $_hotel,
            'location' => ucwords($_hotel,","),
            'address' => $_hotel.', Lagos, Nigeria',
            'phone' => '+234 706 612 2407',
            'email' => $_hotel.'@esportahotels.com'
        ];
        $reviews = [
            ['customer_name' => 'James Ikegwuru',
            'body' => 'Immerse yourself in the epitome of luxury at Esporta, your premier hotel destination in Nigeria. Our hotel redefines elegance and comfort, offering an exquisite escape for discerning travelers.'],
            ['customer_name' => 'Rita Iloge',
            'body' => 'Immerse yourself in the epitome of luxury at Esporta, your premier hotel destination in Nigeria. Our hotel redefines elegance and comfort, offering an exquisite escape for discerning travelers.']
        ];
        
        return view('hotels.reviews')->with(compact('hotel','reviews'));
    }

    public function hotelContact($_hotel){
        //get the hotel and navigate to the hotel.idex page with the hotel name
        $hotel = [
            'id' => $_hotel,
            'location' => ucwords($_hotel,","),
            'address' => $_hotel.', Lagos, Nigeria',
            'phone' => '+234 706 612 2407',
            'email' => $_hotel.'@esportahotels.com'
        ];
        
        return view('hotels.index')->with('hotel',$hotel);
    }

    public function hotelRoomCategory($_hotel, $room){
        //get the hotel and navigate to the hotel.idex page with the hotel name
        $hotel = [
            'id' => $_hotel,
            'location' => ucwords($_hotel,","),
            'address' => $_hotel.', Lagos, Nigeria',
            'phone' => '+234 706 612 2407',
            'email' => $_hotel.'@esportahotels.com'
        ];
        return view('hotels.rooms.show')->with(compact('hotel','room'));
    }
}
