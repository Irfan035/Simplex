<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use App\Mail\contactMail;
use DB;

class contactController extends Controller
{
    public function contactForm(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'subject' => 'required',
            'message' => 'required',
        ]);
        $input = $request->all(); 

        $Contact = new Contact;
        $Contact->name = $input['name'];
        $Contact->email = $input['email'];
        $Contact->phone = $input['phone'];
        $Contact->subject = $input['subject'];
        $Contact->message = $input['message'];
        $Contact->save();
        $data = array(
            
            'name' => $input['name'],
            'email' => $input['email'],
            'phone' => $input['phone'],
            'subject' => $input['subject'],
            'message' => $input['message']
        );
        Mail::to('simplexoutsourcing@gmail.com')->send(new contactMail($data));        

       /* Contact::create($input);

        //  Send mail to admin
        \Mail::send('pages.contactMail', array(
            'name' => $input['name'],
            'email' => $input['email'],
            'phone' => $input['phone'],
            'subject' => $input['subject'],
            'message' => $input['message'],
        ), function($message) use ($request){
            $message->from($request->email);
            $message->to('irfangujjar035@gmail.com', 'Admin')->subject($request->get('subject'));
        }); */

        return redirect()->back()->with(['success' => 'Contact Form Submit Successfully']);
    }

    public function contacts(Request $request)
    {
            $data = Contact::orderBy('id','DESC')->paginate(5);
            return view('admin.contacts',compact('data'))
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
        Contact::find($id)->delete();
        return redirect()->route('contacts')
                        ->with('success','User deleted successfully');
    }




    public function Newsletter(Request $request)
    {
        
        $newsletter->email = $request['email'];
        Mail::to('simplexoutsourcing@gmail.com')->send(new newsletterMail($newsletter));
       

        return redirect()->back()->with(['success' => 'Subscribe Successfully']);
    }
}
