<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dailylog;
class DailylogController extends Controller
{
    public function Dailylog();
    {
        $authors = Dailylog::simplePaginate(5);
        return view('Dailylog'['Dailylogs' => $Dailylogs]);
    }
}
