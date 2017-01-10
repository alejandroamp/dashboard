<?php

namespace App\Http\Controllers;

use App\Http\Controllers\DashboardController;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\DocumentInfo;
use Excel;


class ExcelController extends DashboardController
{

    public function getExport()
    {
        
        $dt1 = \Session::get('dt1');
        $dt2 = \Session::get('dt2');



        
        if ($dt1 != "")
        {
            $data = DocumentInfo::select('sold_to_part_key','account_name','business_name','country','segment','entity_type',
                'b2b','account_manager','geo','theoldkey1','theoldkey2','order_status')->whereBetween('updated_at', [$dt1, $dt2])->get();

            Excel::create('Dashboard ' . date('Y-m-d'), function($excel) use ($data){

                $excel->sheet('d_account_map_updates',  function($sheet) use ($data){

                    $sheet->fromArray($data);

                });
            })->export('xls');
        }else
        {
            $data = DocumentInfo::select('sold_to_part_key','account_name','business_name','country','segment','entity_type',
                'b2b','account_manager','geo','theoldkey1','theoldkey2','order_status')->get();

            Excel::create('Dashboard ' . date('Y-m-d'), function($excel) use ($data){

                $excel->sheet('d_account_map_updates',  function($sheet) use ($data){

                    $sheet->fromArray($data);

                });
            })->export('xls');
        }


    }

}
