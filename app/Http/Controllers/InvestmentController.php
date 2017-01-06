<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Investment;
use App\Customer;
use Auth;

class InvestmentController extends Controller
{
     public function index()
    {
        if(Auth::check())
        {
            $Investment=Investment::all();
        return view('Investments.index',compact('Investment'));
         }
         else
        {
            return view('welcome');
        }
    }

    public function show($id)
    {        
         if(Auth::check())
        {
        $Investment = Investment::findOrFail($id);
        return view('Investments.show',compact('Investment'));
        }
        else
        {
            return view('welcome');
        }
    }

    public function create()
    {
         if(Auth::check())
        {
        $customers = Customer::lists('name','id');
        return view('Investments.create', compact('customers'));
        }
        else
        {
            return view('welcome');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)   
    {
	   if(Auth::check())
        {
           $this->validate($request,[
        'category'=>'required',
        'description'=>'required',
        'acquired_value'=>'required',
        'acquired_date'=>'required',
        'customer_id'=>'required',
                  ]);
         
       $Investment= new Investment($request->all());
       $Investment->save();

       return redirect('investments');
       }
        else
        {
            return view('welcome');
        }
    }

    public function edit($id)
    {
          if(Auth::check())
        {
            $investment=Investment::find($id);
        return view('investments.edit',compact('investment'));
         }
        else
        {
            return view('welcome');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id,Request $request)
    {
         if(Auth::check())
        {
         //
                   $this->validate($request,[
        'category'=>'required',
        'description'=>'required',
        'acquired_value'=>'required',
        'acquired_date'=>'required',
        // 'customer_id'=>'required',
                  ]);
        $Investment= new Investment($request->all());
        $Investment=Investment::find($id);
        $Investment->update($request->all());
        return redirect('investments');

         }
        else
        {
            return view('welcome');
        }
    }

    public function destroy($id)
    {
       
        if(Auth::check())
        {
         Investment::find($id)->delete();
        return redirect('investments');
         }
        else
        {
            return view('welcome');
        }
    }
}
