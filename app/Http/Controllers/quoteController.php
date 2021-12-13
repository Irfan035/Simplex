<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quote;
use Illuminate\Support\Facades\Mail;
use App\Mail\quoteMail;

class quoteController extends Controller
{
    public function quoteForm(Request $request)
    {
        /* $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'country' => 'required',
            'bussiness' => 'required',
            'duration' => 'required',
            'resources' => 'required',
            'callTime' => 'required',
            'message' => 'required',
        ]);
        $input = $request->all();  */

        $quote = new Quote;
        $quote->name = $request['name'];
        $quote->email = $request['email'];
        $quote->country = $request['country'];
        $quote->phone = $request['phone'];
        $quote->bussiness = $request['bussiness'];
        $quote->duration = $request['duration'];
        $quote->resources = $request['resources'];
        $quote->callTime = $request['callTime'];
        $quote->message = $request['message'];
        $quote->save();

    /*   $data = array(
            
            'name' => $request['name'],
            'email' => $request['email'],
            'phone' => $request['phone'],
            'country' => $request['country'],
            'bussiness' => $request['bussiness'],
            'duration' => $request['duration'],
            'resources' => $request['resources'],
            'callTime' => $request['callTime'],
            'message' => $request['message']
        ); */
        Mail::to('simplexoutsourcing@gmail.com')->send(new quoteMail($quote));  

        return redirect()->back()->with(['success' => 'Get A Quote Form Submit Successfully']);
    }
    public function quoteList(Request $request)
    {
            $data = Quote::orderBy('id','DESC')->paginate(5);
            return view('admin.quoteList',compact('data'))
                ->with('i', ($request->input('page', 1) - 1) * 5);
    }
     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Quote::find($id)->delete();
        return redirect()->route('quoteList')
                        ->with('success','User deleted successfully');
    }
}
