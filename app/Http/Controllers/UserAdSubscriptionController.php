<?php

namespace App\Http\Controllers;

use App\UserAdSubscription;
use Illuminate\Http\Request;

class UserAdSubscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_subscriptions=UserAdSubscription::all();
        return view('admin.user_subscriptions.index', compact('user_subscriptions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user_subscriptions.create');
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

            'start_date'=> 'required',
            'end_date'=> 'required',
            'bought_on'=> 'required',
            

            
            

        ]);
        $user_subscription= new UserAdSubscription();
        $user_subscription->user_id=$request->user_id;
        $user_subscription->ad_subscription_id=$request->ad_subscription_id;
        $user_subscription->start_date=$request->start_date;
        $user_subscription->end_date=$request->end_date;
        $user_subscription->bought_on=$request->bought_on;
        if($user_subscription->save()){
            return redirect()->route('user_subscription.index')->with('success',' User Subscription Added successfully.');
        }
        else{
            return redirect()->back()->with('unsuccess','Failed try again.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UserAdSubscription  $userAdSubscription
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserAdSubscription  $userAdSubscription
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user_subscription=UserAdSubscription::where('id', $id)->first();
        return view('admin.user_subscriptions.edit', compact('user_subscription'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserAdSubscription  $userAdSubscription
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'start_date'=> 'required',
            'end_date'=> 'required',
            'bought_on'=> 'required',
            

            
            

        ]);
        $user_subscription=UserAdSubscription::where('id', $id)->first();
        $user_subscription->user_id=$request->user_id;
        $user_subscription->ad_subscription_id=$request->ad_subscription_id;
        $user_subscription->start_date=$request->start_date;
        $user_subscription->end_date=$request->end_date;
        $user_subscription->bought_on=$request->bought_on;
        if($user_subscription->update()){
            return redirect()->route('user_subscription.index')->with('success',' User Subscription update successfully.');
        }
        else{
            return redirect()->back()->with('unsuccess','Failed try again.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserAdSubscription  $userAdSubscription
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $user_subscription=UserAdSubscription::findOrFail($id);
        if($user_subscription::where('id',$id)->delete()){
            return redirect()->back()->with('success',' User subscription deleted successfully.');
        }
        else{
            return redirect()->back()->with('unsuccess','Failed try again.');
        }
    }
}
