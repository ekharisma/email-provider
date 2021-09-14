<?php

namespace App\Http\Controllers;

use App\Mail\EmailConfirmation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function confirmationEmailService(Request $request) {
        $recipient = $request->email;
        Mail::to($recipient)->send(new EmailConfirmation($request));
        return response()->json([
            'status' => true,
        ]);
    }
}
