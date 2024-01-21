<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Doctor's Appointment</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <script src="https://cdn.tailwindcss.com"></script>

        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/daisyui@4.6.0/dist/full.min.css" rel="stylesheet" type="text/css" />
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body>
        <header>
        <div class="navbar bg-base-100">
            <div class="navbar-start">
                <div class="dropdown">
                <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
                </div>
                <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                    <li>
                    <a>Month</a>
                    <ul class="p-2">
                    @for ($m = 1; $m <= 12; $m++)
                        <li><a href="{{ url('/month/' . $m) }}">{{ date('F', mktime(0, 0, 0, $m, 1)) }}</a></li>
                    @endfor
                    </ul>
                    </li>
                </ul>
                </div>
                <a class="btn btn-ghost text-xl">Doctor's Appointment Calender</a>
            </div>
            <div class="navbar-end hidden lg:flex">
                <ul class="menu menu-horizontal px-1">
                <li>
                    <details>
                    <summary>Month</summary>
                    <ul class="p-2">
                    @for ($m = 1; $m <= 12; $m++)
                        <li><a href="{{ url('/month/' . $m) }}">{{ date('F', mktime(0, 0, 0, $m, 1)) }}</a></li>
                    @endfor
                    </ul>
                    </details>
                </li>
                </ul>
            </div>
        </div>
        </header>
        <main class="mx-8">
            <div class="flex justify-around">
                <div class="text-center text-3xl font-extrabold mb-8 border-black border-solid border-2 rounded-md w-48 py-1">{{$month}}</div>
                <button class="btn"><a href="">Create Appointment</a></button>
            </div>
            <div id="calender-date" class="grid grid-cols-7 gap-4 mb-8">
                <div class="border-black text-2xl font-extrabold text-center py-4 border-black border-2 rounded-md">Sunday</div>
                <div class="border-black text-2xl font-extrabold text-center py-4 border-black border-2 rounded-md">Monday</div>
                <div class="border-black text-2xl font-extrabold text-center py-4 border-black border-2 rounded-md">Tuesday</div>
                <div class="border-black text-2xl font-extrabold text-center py-4 border-black border-2 rounded-md">Wednesday</div>
                <div class="border-black text-2xl font-extrabold text-center py-4 border-black border-2 rounded-md">Thursday</div>
                <div class="border-black text-2xl font-extrabold text-center py-4 bg-red-400 text-white rounded-md">Friday</div>
                <div class="border-black text-2xl font-extrabold text-center py-4 bg-red-400 text-white rounded-md">Saturday</div>
            </div>
            <div id="calender-date" class="grid grid-cols-7 gap-4">
                @for($i=1;$i<=$day;$i++)
                    <div class=" border-slate-300 dark:border-white border-2 h-44 rounded-lg"> </div>
                @endfor
                @for($j=1;$j<=$no_of_date;$j++)
                    <div class=" border-black dark:border-white border-2 h-44 rounded-lg p-4">{{$j}}</div>
                @endfor
            </div>
        </main>
        <footer>

        </footer>
    </body>
</html>
