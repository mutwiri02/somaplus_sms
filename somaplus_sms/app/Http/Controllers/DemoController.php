<?php

namespace App\Http\Controllers;

use App\Mail\BookDemo;
use App\Mail\DemoBooked;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Exception;

class DemoController extends Controller
{
    public function showBookingPage()
    {
        return view('features.book-a-demo');
    }

    public function showDateTimePage()
    {
        return view('features.select-date-time');
    }

    public function showDetailsPage(Request $request)
    {
        $selectedDateTime = $request->input('selected_datetime');
        return view('features.bookDemo', compact('selectedDateTime'));
    }

    public function bookDemo(Request $request)
    {
        // try {
        //     // Validate the request
        //     $validated = $request->validate([
        //         'name' => 'required|string|max:255',
        //         'email' => 'required|email|max:255',
        //         'message' => 'nullable|string',
        //         'selected_datetime' => 'required|string',
        //     ]);



        //     // Create the booking
        //     $booking = Booking::create($validated);

        //     // Send email notification
        //     Mail::to($booking->email)->send(new DemoBooked($booking));

        //     // Redirect to a thank you page
        //     return redirect()->route('book-demo')->with('success', 'Your demo has been booked successfully!');
        // } catch (Exception $e) {
        //     // Log the error
        //     \Log::error('Booking error: ' . $e->getMessage());

        //     // Redirect back with error message
        //     return back()->withInput()->with('error', 'An error occurred while booking your demo. Please try again.');
        // }

             $data=$request->validate( [
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',

                'phone' => 'required|string',
                'message' => 'nullable|string',
                'selected_datetime'=>'required | string'
             ]);
             $booking=new Booking;
             $booking->name=$data['name'];
             $booking->email=$data['email'];
             $booking->phone=$data['phone'];
             $booking->message=$data['message'];
             $booking->selected_datetime=$data['selected_datetime'];
             $booking->save();
        $data = $booking;

            Mail::to('mutwiric00@gmail.com')->send(new BookDemo
        ($data));



             return redirect()->route('book-demo')->with('success', 'Your demo has been booked successfully');

             

    }

    public function showConfirmation()
    {
        return view('features.bookDemo');
    }
}