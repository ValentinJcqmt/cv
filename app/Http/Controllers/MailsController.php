<?php

namespace App\Http\Controllers;

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

        $car = $this->getCarDatas($request->provider, $request->car_id, $request->slug);

        $datas = array_merge($car, array_except($request->all(), ['car_id', 'email_confirmation']));

        Mail::send('emails.contact-for-car', ['datas' => $datas], function ($m) use ($request) {
            $m->from($request->email);

            $m->to($this->destinationMail)->subject('Demande de contact pour un véhicule');
        });
        return redirect()->back()->with('success', ['success']);
    }

    private function getCarDatas($provider, $carId, $slug)
    {
        switch ($provider) {
            case 'dad-auto':
                $dad = new DadAutoReader();
                return $dad->show($slug, $carId);
                break;
            case 'selsia':
                break;
            default:
                break;
        }
    }
}
