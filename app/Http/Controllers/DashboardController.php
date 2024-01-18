<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function getData(){
        if(!auth()->check()){
            return redirect('/login');
        }
        $user = auth()->user();
        $company = $user->company;
        $ships = $company->ships;
        $hauls = [];
        //combine the hauls of the same date and get the last 10 dates and add the weight of the hauls for each ship
        foreach ($ships as $ship) {
            $shipHauls = $ship->hauls;
            $recentHauls = [];
            $recent = $shipHauls->sortByDesc('date')->take(10)->reverse();
            foreach ($recent as $haul) {
                $date = $haul->date;
                if (array_key_exists($date, $recentHauls)) {
                    $recentHauls[$date] += $haul->weight;
                } else {
                    $recentHauls[$date] = $haul->weight;
                }
            }
            $hauls[$ship->name] = $recentHauls;
        }
        //get top 5 ships based on the weight of their hauls
        $topships = $ships->sortByDesc(function($ship){
            return $ship->hauls->sum('weight');
        })->take(5);

        //for each unique fish, get the total weight caught
        $fishCaught = [];
        foreach ($ships as $ship) {
            $shipHauls = $ship->hauls;
            foreach ($shipHauls as $haul) {
                $fish = $haul->fish;
                if (array_key_exists($fish->name, $fishCaught)) {
                    $fishCaught[$fish->name] += $haul->weight;
                } else {
                    $fishCaught[$fish->name] = $haul->weight;
                }
            }
        }

        return view('dashboard', ['user' => $user, 'company' => $company, 'ships' => $ships, 'topships' => $topships, 'hauls' => $hauls, 'fishCaught' => $fishCaught]);
    }
}
