<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use Illuminate\Support\Carbon;

class BookingController extends Controller
{
    public function index() {
        $bookings = Booking::all();

        return view('bookings.index', compact('bookings'));
    }
    
    public function about() {
        return "this is the About Page";
    }

    public function create() {
        return view('bookings.create');
    }

    public function store(Request $request) {
        $request->validate([
            'booking_title' => 'required',
            'booking_description' => 'required',
            'booking_date' => 'required'
        ]);

        $current_date = Carbon::now();

        if ($request->booking_date < $current_date) {
            return redirect()->route('bookings.index')->with('error', 'Booking cannot be before the current date!');
        }

        Booking::create($request->all());

        return redirect()->route('bookings.index')->with('success', 'Booking successfully created!');
    }

    public function edit(Booking $booking) {
        return view('bookings.edit', compact('booking'));
    }

    public function update(Booking $booking, Request $request) {
        $request->validate([
            'booking_title' => 'required',
            'booking_description' => 'required',
            'booking_date' => 'required'
        ]);

        $booking->update($request->all());

        return redirect()->route('bookings.index')->with('success', 'Booking information updated!');
    }

    public function destroy(Booking $booking) {
        $booking->delete();

        return redirect()->route('bookings.index')->with('success', 'Booking deleted successfully!');
    }
}
