<?php

namespace App\Http\Controllers;

use App\ConceptAutoReader;
use Mail;
use App\UsedCar;
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

    /*
     * This function doesn't send an email to providers
     * He sends mail to the conceptautomobile's contact email.
     */
    private function handle($request)
    {
        switch ($request->provider) {
            case 'conceptauto':
                return $this->sendConceptAutoMail($request);
                break;
            case 'selsia':
                return $this->sendSelsiaMail($request);
                break;
            default:
                return;
                break;
        }
    }

    private function sendConceptAutoMail($request)
    {
        $concept = new ConceptAutoReader();
        $car = $concept->show($request->car_id);
        $datas = array_merge($car, array_except($request->all(), ['car_id', 'email_confirmation']));

        Mail::send('emails.contact-for-conceptauto', ['datas' => $datas], function ($m) use ($request) {
            $m->from(env('MAIL_FROM'));

            $m->to($this->destinationMail)->subject('Demande de contact pour un véhicule neuf du fournisseur conceptauto');
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

            $m->to($this->destinationMail)->subject('Demande de contact pour un véhicule d\'occasion du fournisseur Selsia');
        });

        return true;
    }
}
