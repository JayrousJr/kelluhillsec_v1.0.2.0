<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use App\Mail\MessageReceived;
use App\Mail\MessageSent;
use App\Mail\MessageToCustomer;
use App\Mail\MessageToSchool;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class MessageController extends Controller
{
    function message(Request $request)
    {
        $rules = [
            'name' => 'required|min:5|max:255|string',
            'email' => 'required|email|min:5|max:255',
            'message' => 'required|min:5|max:255|string',
            'subject' => 'required|string|min:3|max:255',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect('/contact#contact')->withErrors($validator)->withInput();
        } else {
            try {
                //code...
                DB::beginTransaction();

                $data = new Message();

                $data->name = $request->input('name');
                $data->email = $request->input('email');
                $data->message = htmlspecialchars($request->input('message'));
                $data->subject = htmlspecialchars($request->input('subject'));

                $data->save();

                DB::commit();
                $mailto = 'info@kellusec.ac.tz';
                Mail::to($mailto)->send(new MessageToSchool($data));
                Mail::to($data->email)->send(new MessageToCustomer($data));
                session()->flash('success', 'Your Message has been sent successiful, We will come back to you soon');
                return redirect()->route('contact');
            } catch (\Exception $e) {

                DB::rollBack();

                return redirect('contact')->with('error', 'Sorry, your message could not be sent rightnow, we are under maintenance');
            }
        }
    }
}