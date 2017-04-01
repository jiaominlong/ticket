<?php

namespace App\Http\Controllers;

use App\Area;
use App\Meetingplace;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;

class VoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
//    会场列表
    public function meetingplace()
    {
        return view('vo.list_meetingplace');
    }
//    添加会场
    public function getAddMeetingplace()
    {
             return view('vo.add_meetingplace');
    }
    public function postAddMeetingplace(Request $request)
    {
        $meetingplace_name = $request['meetingplaseName'];
        $area_name_arr = $request['area_name'];
        $seat_number_arr = $request['seat_number'];
        for ($i = 0; $i < count($area_name_arr); $i++){
            $area[$i] = new Area();
            $area[$i] ->area_name = $area_name_arr[$i];
            $area[$i] ->seat_number = $seat_number_arr[$i];
        }
        $meetingplace = Meetingplace::create(['meetingplace'=>$meetingplace_name]);
        $meetingplace->area()->saveMany($area);
    }
}
