<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\appointment;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function day_picker($month){
        $year = 2024;
        $firstDay = date('w', strtotime("$year-$month-01"));
        // dd($firstDay);
        $monthName = date('F', mktime(0, 0, 0, $month, 1));
        // dd($month, $monthName);

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

        $firstDayOfMonth = "{$year}-{$month}-01";
        $lastDayOfMonth = date('Y-m-t', strtotime($firstDayOfMonth));
        // Query to retrieve appointments within the specified month
        $appointments = DB::table('appointments')
        ->whereBetween('date', [$firstDayOfMonth, $lastDayOfMonth])
        ->orderBy('date')
        ->orderBy('time')
        ->get();
        return view('welcome', [
            'month' => $monthName,
            'month_no' => $month,
            'day' => $firstDay,
            'no_of_date' => $no_of_date,
            'appointments' => $appointments,
        ]);

    }
    public function store_appointments(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => 'required|max:40',
            'last_name' => 'required|max:40',
            'email' => 'required|email',
            'gender' => 'nullable|in:male,female,other',
            'age' => 'nullable|integer',
            'date' => 'required|date',
            'time' => 'required|date_format:H:i',
        ]);

        // Store data in the database
        appointment::create($validatedData);

        // Redirect with success message
        return redirect()->route('create')->with('success', 'Data submitted successfully!');

    }
}
