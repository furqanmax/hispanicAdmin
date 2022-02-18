<?php

namespace App\Http\Controllers;

use App\AdSubscription;
use Illuminate\Http\Request;

class AdSubscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subscriptions=AdSubscription::all();
        return view('admin.subscriptions.index', compact('subscriptions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.subscriptions.create');
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
        $subscription= new AdSubscription();
        $subscription->title_en=$request->title_en;
        $subscription->title_sp=$request->title_sp;
        $subscription->description_en=$request->description_en;
        $subscription->description_sp=$request->description_sp;
        $subscription->credits=$request->credits;
        $subscription->monthly_price=$request->monthly_price;
        $subscription->yearly_price=$request->yearly_price;
        if($subscription->save()){
            return redirect()->route('subscription.index')->with('success',' Subscription Added successfully.');
        }
        else{
            return redirect()->back()->with('unsuccess','Failed try again.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AdSubscription  $membershipPlan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AdSubscription  $membershipPlan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subscription=AdSubscription::where('id', $id)->first();
        return view('admin.subscriptions.edit', compact('subscription'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AdSubscription  $membershipPlan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'title_en'=>'required',
            'title_sp'=>'required'
            

            
            

        ]);
        $subscription=AdSubscription::where('id', $id)->first();
        $subscription->title_en=$request->title_en;
        $subscription->title_sp=$request->title_sp;
        $subscription->description_en=$request->description_en;
        $subscription->description_sp=$request->description_sp;
        $subscription->credits=$request->credits;
        $subscription->monthly_price=$request->monthly_price;
        $subscription->yearly_price=$request->yearly_price;
        if($subscription->update()){
            return redirect()->route('subscription.index')->with('success',' Subscription Added successfully.');
        }
        else{
            return redirect()->back()->with('unsuccess','Failed try again.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AdSubscription  $membershipPlan
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $subscription=AdSubscription::findOrFail($id);
        if($subscription::where('id',$id)->delete()){
            return redirect()->back()->with('success',' Subscription deleted successfully.');
        }
        else{
            return redirect()->back()->with('unsuccess','Failed try again.');
        }
    }
}
