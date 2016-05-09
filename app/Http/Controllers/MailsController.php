<?php

namespace App\Http\Controllers;

use App\UsedCar;
use Mail;
use App\DadAutoReader;
use App\Http\Requests\SendMailRequest;

class MailsController extends Controller {

    protected $destinationMail;

    public function __construct()
    {
        $this->destinationMail = 'aymeric.aveline@gmail.com';
    }

    public function sendCarMail(SendMailRequest $request)
    {
        $this->handle($request);

        return redirect()->back()->with('success', ['success']);
    }

    private function handle($request)
    {
        switch ($request->provider) {
            case 'dad-auto':
                return $this->sendDadAutoMail($request);
                break;
            case 'selsia':
                return $this->sendSELSIAMail($request);
                break;
            default:
                break;
        }
    }

    private function sendDadAutoMail($request){

        $dad = new DadAutoReader();
        $car = $dad->show($request->car_id);

        $datas = array_merge($car, array_except($request->all(), ['car_id', 'email_confirmation']));

        Mail::send('emails.contact-for-car', ['datas' => $datas], function ($m) use ($request) {
            $m->from($request->email);

            $m->to($this->destinationMail)->subject('Demande de contact pour un véhicule');
        });
    }
}
