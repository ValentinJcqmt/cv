<?php

namespace App\Http\Controllers;

use Mail;
use App\UsedCar;
use App\DadAutoReader;
use App\Http\Requests\SendMailRequest;

class MailsController extends Controller {

    protected $destinationMail;

    public function __construct()
    {
        $this->destinationMail = getenv('MAIL_CONTACT');
    }

    public function sendCarMail(SendMailRequest $request)
    {

        if ($this->handle($request))
            return redirect()->back()->with('success', ['success']);

        return redirect()->back()->with('error', ['error']);
    }

    private function handle($request)
    {
        switch ($request->provider) {
            case 'dad-auto':
                return $this->sendDadAutoMail($request);
                break;
            case 'selsia':
                return $this->sendSelsiaMail($request);
                break;
            default:
                return;
                break;
        }
    }

    private function sendDadAutoMail($request)
    {
        $dad = new DadAutoReader();
        $car = $dad->show($request->car_id);
        $datas = array_merge($car, array_except($request->all(), ['car_id', 'email_confirmation']));

        Mail::send('emails.contact-for-dadauto', ['datas' => $datas], function ($m) use ($request) {
            $m->from(env('MAIL_FROM'));

            $m->to($this->destinationMail)->subject('Demande de contact pour un véhicule du fournisseur Dad Auto');
        });

        return true;
    }

    private function sendSelsiaMail($request)
    {
        $usedCar = UsedCar::with('contacts')->first();
        $datas = compact('usedCar');
        $datas = array_merge($datas, array_except($request->all(), ['car_id', 'email_confirmation']));

        Mail::send('emails.contact-for-selsia', ['datas' => $datas], function ($m) use ($request) {
            $m->from(env('MAIL_FROM'));

            $m->to($this->destinationMail)->subject('Demande de contact pour un véhicule du fournisseur Selsia');
        });

        return true;
    }
}
