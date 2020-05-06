<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    function index() {
        return view("form", ["arrangements" => \App\arrangements::all()]);
    }

    function addBooking(Request $request) {
        $booking = new \App\bookings();

        $booking -> date = $request -> input("Date");
        $booking -> customername = $request -> input("Name");
        $booking -> email = $request -> input("E-mail");
        $booking -> catname = $request -> input("Cat");
        $booking -> arrangement_id = $request -> input("Arrangement");

        $booking -> save();

        $date = \app\bookings::find($booking -> date);
        $name = \app\bookings::find($booking -> customername);

        return view("thank-you", ["bookingdate" => $date, "customerName" => $name ]);
    }
}
