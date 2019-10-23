<?php

namespace App\Http\Controllers;

use\App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function create() {
        return view('contact.create');
        }

    public function store() {

        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // Send an email

        Mail::to('test@test.com')->send(new ContactFormMail($data));

        // sometimes the return redirect message below could be rewritten with session flash (commented out) 

        // session()->flash('message', 'Thanks for your message. We\'ll be in touch.');

        return redirect('contact')->with('message', 'Thanks for your message. We\'ll be in touch.');

        // return redirect('contact')->with('message', 'Thanks for your message. We\'ll be in touch.');

        // dd(request()->all());
    }
}

// encountering Expected response code 250 but got code "530", with message "530 5.7.1 Authentication required "
// solution is your mail.php on config you declare host as smtp.mailgun.org and port is 587 while on env is different. you need to change your mail.php to

// 'host' => env('MAIL_HOST', 'mailtrap.io'),

// 'port' => env('MAIL_PORT', 2525),

// after the changes, run the command below
// php artisan config:cache
// or stop your local server and restart it.
