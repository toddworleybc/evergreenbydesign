<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Inertia\Inertia;
use Illuminate\Support\Facades\Storage;


class sendEmailController extends Controller
{
    //


    public function thankYouPage() {
        return Inertia::render('ThankYou');
    }



    public function sendEmail(Request $request) {




       $request['token'] = $this->googleRecapatchaCheck($request->token);

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required|min:10',
            'token' => 'required|accepted|boolean'
        ]);


        $myEmailWasSent = $this->myEmailSend($request);

        if($myEmailWasSent) {

           $clientEmailSent = $this->sendEmailToClient($request);

           if($clientEmailSent) return to_route('thank.you');

        }

        return response('Error Has Occured');

    }//#

    private function myEmailSend($request) {
        
        
        $emailHtml = "<p style='margin-bottom: 20px'>Name: $request->name</p><p style='margin-bottom: 20px'>Email: $request->email</p><p style='margin-bottom: 20px'>Message <br/><span style='margin-top: 40px;'>$request->message</span></p>";



        $email = new \SendGrid\Mail\Mail(); 
        $email->setFrom("toddworleybc@gmail.com", "Evergreen By Design");
        $email->setSubject("New Client Request");

        $email->addTo("evergreenbydesignwebsites@gmail.com", "Todd Worley");
        $email->addContent(
            "text/html", $emailHtml
        );



        //============
        $sendgrid = new \SendGrid(config('services.sendgrid.key'));
        try {
            $response = $sendgrid->send($email);

            if($response->statusCode() === 202)  {
                return true;
            }
                
        } catch (Exception $e) {
            echo 'Caught exception: '. $e->getMessage() ."\n";
        }


    }//#

    private function sendEmailToClient($request) {


        $emailHtml = "<p style='margin-bottom: 20px'>Hello $request->name</p><p style='margin-bottom:20px'>This is Todd at Evergreen By Design. I just wanted to let you know that I have received your email and will be responding in 1 business day.</p><p>If you have any further questions or have you may reply to this email or you can give me a call. Monday - Friday 9:00 am to 4:00 pm</p><p>Phone: (541) 378.5563</p>";

        $ebdWelcomePacket = storage_path('app/docs/ebd-welcome-packet.pdf');    

        $email = new \SendGrid\Mail\Mail();
         
        
        $email->setFrom("evergreenbydesignwebsites@gmail.com", "Evergreen By Design");
        $email->setSubject("Evergreen By Design Received Your Email!");

        $email->addTo($request->email, $request->name);
        $email->addContent(
            "text/html", $emailHtml
        );


        
        $file_encoded = base64_encode(file_get_contents($ebdWelcomePacket));
        $email->addAttachment(
            $file_encoded,
            "application/pdf",
            "Welcome Packet.pdf",
            "attachment"
        );


        //============
        $sendgrid = new \SendGrid(config('services.sendgrid.key'));
        try {
            $response = $sendgrid->send($email);

            if($response->statusCode() === 202)  {
               return true;
            }
                
        } catch (Exception $e) {
            echo 'Caught exception: '. $e->getMessage() ."\n";
        }

    }//#


    private function googleRecapatchaCheck($token) {

        $response = Http::post( "https://www.google.com/recaptcha/api/siteverify?secret=6LcewFcmAAAAAFMEZZQxQqg-iHSJqF25JmOh6EcK&response=$token");

        return $response['success'];
    }
}
