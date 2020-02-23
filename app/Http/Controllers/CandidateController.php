<?php

namespace App\Http\Controllers;
use App\Candidate;

use Illuminate\Http\Request;

class CandidateController extends Controller
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
        return view('submit.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'firstname'     => 'required',
            'lastname'      => 'required',
            'birthday'      => 'required',
            'gender'        => 'required',
            'identifyCard'  => 'required',
            'phoneNumber'   => 'required',
            'priority'      => 'required',
            'admissionForm' => 'required',
            'highSchool'    => 'required',
            'province'      => 'required',
            'district'      => 'required',
            'ward'          => 'required'
            // 'major1'        => 'required'
            // 'subject1_1'    => 'required',
            // 'subject1_2'    => 'required',
            // 'subject1_3'    => 'required',
            // 'major1'        => 'required',
            // 'subject1_1'    => 'required',
            // 'subject1_2'    => 'required',
            // 'subject1_3'    => 'required',
            // 'major2'        => 'required',
            // 'subject2_1'    => 'required',
            // 'subject2_2'    => 'required',
            // 'subject2_3'    => 'required',
            // 'major3'        => 'required',
            // 'subject3_1'    => 'required',
            // 'subject3_2'    => 'required',
            // 'subject3_3'    => 'required'
        ]);
        $candidate = new Candidate([
            'firstname'     => $request->get('firstname'),
            'lastname'      => $request->get('lastname'),
            'birthday'      => $request->get('birthday'),
            'gender'        => $request->get('gender'),
            'identifyCard'  => $request->get('identifyCard'),
            'phoneNumber'   => $request->get('phoneNumber'),
            'priority'      => $request->get('priority'),
            'admissionForm' => $request->get('admissionForm'),
            'highSchool'    => $request->get('highSchool'),
            'province'      => $request->get('province'),
            'district'      => $request->get('district'),
            'ward'          => $request->get('ward')

            // 'major1'        => $request->get(''),
            // 'subject1_1'    => $request->get(''),
            // 'subject1_2'    => $request->get(''),
            // 'subject1_3'    => $request->get(''),
            // 'major2'        => $request->get(''),
            // 'subject2_1'    => $request->get(''),
            // 'subject2_2'    => $request->get(''),
            // 'subject2_3'    => $request->get(''),
            // 'major3'        => $request->get(''),
            // 'subject3_1'    => $request->get(''),
            // 'subject3_2'    => $request->get(''),
            // 'subject3_3'    => $request->get(''),
        ]);
        $candidate->save();
        return redirect()->route('candidate.create')->with('success','Theem thanh coong');
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
}
