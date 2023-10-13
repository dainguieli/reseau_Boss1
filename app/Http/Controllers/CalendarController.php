<?php

namespace App\Http\Controllers;

use App\Models\Tache;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function calendar()
    {
    //    $events = array();
      //  $bookings = Booking::all();
      $event = Tache::all();
      $tachesIds = auth()->user()->taches()->pluck('id');
        foreach($event as $booking) {

            $events[] = [
                'id'   => $tacheId = $booking->id,
                'title' => $booking->title,
                'start' => $booking->starts_at->format('Y-m-d H:i:s'),
                'end' => $booking->ends_at->format('Y-m-d H:i:s'),
                'color' => $booking->colour,
                'borderColor' => $tachesIds->contains($tacheId) ? 'green' : 'yellow',
            ];
        }
        
        return view('calendar', ['events' => $events]);
    }

    public function calendarAdmin()
    {
    //    $events = array();
      //  $bookings = Booking::all();
      $event = Tache::all();
      //$tachesIds = auth()->user()->taches()->pluck('id');
        foreach($event as $booking) {

            $events[] = [
                'id'   =>  $booking->id,
                'title' => $booking->title,
                'start' => $booking->starts_at->format('Y-m-d H:i:s'),
                'end' => $booking->ends_at->format('Y-m-d H:i:s'),
                'color' => $booking->colour,
               // 'borderColor' => $tachesIds->contains($tacheId) ? 'green' : 'yellow',
            ];
        }

        return view('admin.dashboard.home.calendar', ['events' => $events]);
    }
}
