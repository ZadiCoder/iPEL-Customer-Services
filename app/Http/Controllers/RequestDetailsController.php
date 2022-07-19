<?php

namespace App\Http\Controllers;
use App\Models\Service;
use App\Models\Customer;
use App\Models\ReqDetails;
use Illuminate\Http\Request;
use Auth;
class RequestDetailsController extends Controller
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
        //dd($request->input('select_services'));

    //    $data = array(
     //       'customer_id'=>Auth::user()->id,
      //      'price'=>'400',
      //      'status'=>'Pending',
      //  );
       // Req::create($data);
     //  $service = json_encode($request->select_services);
     
        $details = new ReqDetails;
        $details->customer_id = Auth::user()->id;
        $details->price = '400';
        $details->service_id = json_encode($request->services);
        $details->status = 'Pending';
        $details->save();
        return redirect()->route('customer.dashboard')->with('status','Thank You For Submit Request, Our technician will contact you within 24 Hours.');
        
    
     //$input = $request->all();
    // $services = $input['services'];
    // $input['select_services'] = implode(',',$services);
    // ReqDetails::create($input);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$customer_id = Auth::user()->id;   
       $request  = ReqDetails::where('customer_id',$id)->get();
       return view('customer.showReq',compact('request'));   
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





