<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function day_picker($month){
        $year = 2024;
        $firstDay = date('w', strtotime("$year-$month-01"));
        // dd($firstDay);
        $monthName = date('F', mktime(0, 0, 0, $month, 1));
        $month = date('w', mktime(0, 0, 0, $month, 1));
        switch ($month) {
            case 1:
                $no_of_date = 31;
                break;
            case 2:
                $no_of_date = 29;
                break;
            case 3:
                $no_of_date = 31;
                break;
            case 4:
                $no_of_date = 30;
                break;
            case 5:
                $no_of_date = 31;
                break;
            case 6:
                $no_of_date = 30;
                break;
            case 7:
                $no_of_date = 31;
                break;
            case 8:
                $no_of_date = 31;
                break;
            case 9:
                $no_of_date = 30;
                break;
            case 10:
                $no_of_date = 31;
                break;
            case 11:
                $no_of_date = 30;
                break;
            default:
                $no_of_date = 31;
                break;
        }
        return view('welcome', [
            'month' => $monthName,
            'day' => $firstDay,
            'no_of_date' => $no_of_date,
        ]);
    }
}
