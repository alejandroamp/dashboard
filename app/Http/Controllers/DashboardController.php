<?php

namespace App\Http\Controllers;

use App\DocumentInfo;
use Request;

class DashboardController extends Controller
{
    public function view() {

        return view('dashboard');
    }

    /**
     * Create a new document_info instance.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */

    public function create(Request $request)
    {
        DocumentInfo::create(Request::all());
        return 'dashboard';
        /* DocumentInfo::create([
            'sold_to_part_key' => $data['sold_to_part_key'],
            'account_name' => $data['account_name'],
            'business_name' => $data['business_name'],
            'country' => $data['country'],
            'segment' => $data['segment'],
            'entity_type' => $data['entity_type'],
            'b2b' => $data['b2b'],
            'account_manager' => $data['account_manager'],
            'geo' => $data['geo'],
            'theoldkey1' => $data['theoldkey1'],
            'user_id' => $data['user_id'],
            'document_id' => $data['document_id'],
        ]);*/
    }
}
