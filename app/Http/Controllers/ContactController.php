<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
        public function loadPageData($pageName)
    {
        $filePath = resource_path("data/{$pageName}Data.php");

        if (!file_exists($filePath)) {
            abort (404, "Le fichier de données pour {$pageName} est introuvable !");
        }

        return include $filePath;
    }

    public function show()
    {
        //Inclusion des datas :
        $data = $this->loadPageData('contact');

        //Passer les paramètres, inclure les fichiers CSS :
        return view('contact', [
            'resetCss' => "assets/css/resetCss.css",
            'customCss' => "assets/css/contact.css",
            'contactData' => $data,
        ]);

    }

    // Gestion du formulaire de contact :
    public function send(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'firstName' => 'required|string|max:255',
            'tel' => 'nullable|string|max:20',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        try {
            // Enregistrer dans la DB :
            $contact = Contact::create($validated);

            // Envoi de l'email :
            Mail::send('emails.email', ['contact' => $contact], function ($message) use ($contact) {
            $message->to('info@kenko-web.be')
                    ->subject('Nouveau message de Kenko');
                });

             return redirect()->back()->with('success', 'Merci pour votre message ! Je vous répondrai dés que possible !');

            } catch (\Exception $e) {
                Log::error("Erreur lors de l'envoidu formulaire : " . $e->getMessage());

                return redirect()->back()->with('error', 'Une erreur est survenue ! Veuillez réessayer plus tard !');
            }
         }
}
