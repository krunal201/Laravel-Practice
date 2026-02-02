<?php

namespace App\Http\Controllers;
use App\Exports\RegistrationExport;
use Maatwebsite\Excel\Facades\Excel;

use DB;
use Illuminate\Http\Request;
// use Maatwebsite\Excel\Excel;

class ExportController extends Controller
{
    public function exportCSV(){
        $reg=DB::table('registrations')->rightJoin('events','registrations.event_id','=','events.id')->get();

        $filename = "registration" . now()->format('Y-m-d_H-i-s') . ".csv";

        $handle = fopen('php://output', 'w');
        
        header('Content-Type: text/csv');
        header('Content-Disposition: attachment; filename="' . $filename . '"');
        header('Pragma: no-cache');
        header('Expires: 0');

        fputcsv($handle, ['Name', 'Email', 'Phone', 'Event']);

        foreach ($reg as $row) {
            fputcsv($handle, [
                $row->name,
                $row->email,
                $row->phone,
                $row->title,
            ]);
        }

        fclose($handle);
        exit();
    }

    public function exportExcel(){
        return Excel::download(new RegistrationExport(), 'registration.xlsx');
    }
}
