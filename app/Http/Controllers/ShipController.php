<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Ship;
use App\Models\User;


class ShipController extends Controller
{
    //
    public function boatData($id)
    {
        //check if user is logged in and if the ship belongs to the company
        if (!Auth::check()) {
            return redirect('/login');
        } else {
            $user = auth()->user();
            $ship = Ship::find($id);
            if ($user->company_id == $ship->company_id) {
                $hauls = $ship->hauls;
                $ship->hauls = $hauls;
                //get total weight caught by this ship
                $totalWeight = 0;
                foreach ($hauls as $haul) {
                    $totalWeight += $haul->weight;
                }
                $ship->totalWeight = $totalWeight;
                //for each unique fish, get the total weight caught
                $fishCaught = [];
                foreach ($hauls as $haul) {
                    $fish = $haul->fish;
                    if (array_key_exists($fish->name, $fishCaught)) {
                        $fishCaught[$fish->name] += $haul->weight;
                    } else {
                        $fishCaught[$fish->name] = $haul->weight;
                    }
                }
                //array with fish names
                $fishNames = array_keys($fishCaught);
                //combine the hauls of the same date and get the last 10 dates and add the weight of the hauls
                $recentHauls = [];
                $recent = $hauls->sortByDesc('date')->take(10)->reverse();
                foreach ($recent as $haul) {
                    $date = $haul->date;
                    if (array_key_exists($date, $recentHauls)) {
                        $recentHauls[$date] += $haul->weight;
                    } else {
                        $recentHauls[$date] = $haul->weight;
                    }
                }
                $haulDates = array_keys($recentHauls);
                return view('ship', ['ship' => $ship, 'user' => $user, 'hauls' => $hauls, 'fishWeight' => $fishCaught, 'fishNames' => $fishNames, 'recentHauls' => $recentHauls, 'haulDates' => $haulDates]);
            } else {
                return redirect('/');
            }
        }
    }
}
