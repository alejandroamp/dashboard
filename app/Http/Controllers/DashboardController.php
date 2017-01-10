<?php

namespace App\Http\Controllers;

<<<<<<< HEAD

use Illuminate\Http\Request;
use App\Http\Requests;
use App\DocumentInfo;
use Session;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        Session::put('dt1', $request->date1);
        Session::put('dt2', $request->date2);


        $info = DocumentInfo::date($request->date1, $request->date2)->orderBy('id', 'DSC')->paginate(5);


        return view('dashboard.index')->with('info', $info);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        /*
        Excel::create('Report2016', function($excel) {

            // Set the title
            $excel->setTitle('My awesome report 2016');

            // Chain the setters
            $excel->setCreator('Me')->setCompany('Our Code World');

            $excel->setDescription('A demonstration to change the file properties');

            $data = [12,"Hey",123,4234,5632435,"Nope",345,345,345,345];

            $excel->sheet('Sheet 1', function ($sheet) use ($data) {
                $sheet->setOrientation('landscape');
                $sheet->fromArray($data, NULL, 'A3');
            });

        })->store('xlsx', storage_path());
        */
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $info = new DocumentInfo($request->all());
        Session::flash('success', 'Data Upload');
        $info->save();

        return view('dashboard.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $info = DocumentInfo::find($id);
        return view('dashboard.edit')->with('info', $info);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        DocumentInfo::find($id)->update($request->all());
        Session::flash('success', 'Update Success');
        return redirect()->route('dashboard.index');
        /*
        $info = DocumentInfo::find($id);
        $info->sold_to_part_key = $request->sold_to_part_key;
        $info->account_name = $request->account_name;
        $info->business_name = $request->business_name;
        $info->country = $request->country;
        $info->segment = $request->segment;
        $info->b2b = $request->b2b;
        $info->account_manager = $request->account_manager;
        $info->theoldkey1 = $request->theoldkey1;
        $info->user_id = $request->user_id;
        $info->document_id = $request->document_id;
        $info->entity_type = $request->entity_type;

        $info->save();

        Flash::warning('Soldto number '.$info->sold_to_part_key. ' has been modified');
        return redirect()->route('dashboard.index');
        */

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
=======
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function view() {

        return view('dashboard');
>>>>>>> origin/master
    }
}
