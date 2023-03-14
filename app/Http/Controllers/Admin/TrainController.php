<?php

namespace App\Http\Controllers\Admin;
use App\Models\Train;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index() {
        $trains = Train::where('departure_time', '>=', date('Y-m-d'))->get();
        return view('welcome', [
            'trains' => $trains
        ]);
    }
}
