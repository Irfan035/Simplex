<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Career;
use Illuminate\Support\Facades\Mail;
use App\Mail\CareerMail;
use DB;
class careerController extends Controller
{
    public function careerForm(Request $request)
    {
       
        $career = new Career;
        $career->name = $request['name'];
        $career->email = $request['email'];
        $career->cnic = $request['cnic'];
        $career->phone = $request['phone'];
        $career->address = $request['address'];
        $career->position = $request['position'];
        $career->LinkedIn = $request['LinkedIn'];
        $career->aboutUs = $request['aboutUs'];

        $filePath = $request->file('Resume');
        $fileName = time() . '.' . $filePath->getClientOriginalExtension();
    
        $filePath->move('media', $fileName);
        $career->Resume = $fileName;
   
       // $career->Resume = $request['Resume'];
       /*  $fileName = time().'.'.$request->Resume->extension();     
        $career->Resume = $request->file->move(public_path('media'), $fileName); */
        $career->available = $request['available'];
        $career->message = $request['message'];
        $career->save();

  
        Mail::to('simplexoutsourcing@gmail.com')->send(new CareerMail($career));  

        return redirect()->back()->with(['success' => 'Career Form Submit Successfully']);
    }

    public function careerList(Request $request)
    {
            $data = Career::orderBy('id','DESC')->paginate(5);
            return view('admin.careerList',compact('data'))
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
        Career::find($id)->delete();
        return redirect()->route('careerList')
                        ->with('success','User deleted successfully');
    }
}
