<?php

namespace App\Http\Controllers;

use App\MembershipPlan;
use Illuminate\Http\Request;

class MembershipPlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members=MembershipPlan::all();
        return view('admin.memberships.index', compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.memberships.create');
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
            'title_en'=>'required',
            'title_sp'=>'required'
            

            
            

        ]);
        $member= new MembershipPlan();
        $member->title_en=$request->title_en;
        $member->title_sp=$request->title_sp;
        $member->description_en=$request->description_en;
        $member->description_sp=$request->description_sp;
        $member->credits=$request->credits;
        $member->monthly_price=$request->monthly_price;
        $member->yearly_price=$request->yearly_price;
        if($member->save()){
            return redirect()->route('member.index')->with('success',' Member Added successfully.');
        }
        else{
            return redirect()->back()->with('unsuccess','Failed try again.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MembershipPlan  $membershipPlan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MembershipPlan  $membershipPlan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $member=MembershipPlan::where('id', $id)->first();
        return view('admin.memberships.edit', compact('member'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MembershipPlan  $membershipPlan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'title_en'=>'required',
            'title_sp'=>'required'
            

            
            

        ]);
        $member=MembershipPlan::where('id', $id)->first();
        $member->title_en=$request->title_en;
        $member->title_sp=$request->title_sp;
        $member->description_en=$request->description_en;
        $member->description_sp=$request->description_sp;
        $member->credits=$request->credits;
        $member->monthly_price=$request->monthly_price;
        $member->yearly_price=$request->yearly_price;
        if($member->update()){
            return redirect()->route('member.index')->with('success',' Member Added successfully.');
        }
        else{
            return redirect()->back()->with('unsuccess','Failed try again.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MembershipPlan  $membershipPlan
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $member=MembershipPlan::findOrFail($id);
        if($member::where('id',$id)->delete()){
            return redirect()->back()->with('success',' Member deleted successfully.');
        }
        else{
            return redirect()->back()->with('unsuccess','Failed try again.');
        }
    }
}
