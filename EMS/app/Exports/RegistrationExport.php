<?php

namespace App\Exports;

use App\Models\Registration;
use DB;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class RegistrationExport implements FromView
{
    /**
     * @return \Illuminate\Support\Collection
     */
    // public function collection()
    // {
    //     $reg=DB::table('registrations')->rightJoin('events','registrations.event_id','=','events.id')->get();

    //     return $reg;
    // }

    use Exportable;
    private $reg;
    public function __construct()
    {
        // $this->reg = DB::table('registrations')->rightJoin('events', 'registrations.event_id', '=', 'events.id')->get();
        $this->reg = DB::table('registrations')
            ->rightJoin('events', 'registrations.event_id', '=', 'events.id')
            ->select('registrations.*', 'events.title as title')
            ->get();
    }

    public function view(): View
    {
        return view('registrations', [
            'reg' => $this->reg,
        ]);
    }
    /*public function heading(){
        return [
            'Name',
            'Email',
            'Phone',
            'Event Title',
        ];
    }*/
}
