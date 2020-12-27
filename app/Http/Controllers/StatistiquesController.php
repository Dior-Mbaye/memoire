<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail ;
use resources\views\statistiques\form1 ;
class StatistiquesController extends Controller
{
    //
    public function mail(Request $req){
        $to_name =$req->to_name ; 
        $to_email = $req->to_email ;
        $etu = $req->etu ; 
        $data = array ('name' => "Bonjour {$to_name} , Veillez cliquer sur ce lien ci-dessous pour remplir le formulaire de rapport de stage de l'étudiant(e) {$etu} envoyé(e) à votre entreprise", "body" => "https://www.esmt.sn/fr/esmt-en-bref");
        Mail::send ('statistiques.mail', $data, 
            function ($message) use ($to_name, $to_email) {
                $message-> to ($to_email, $to_name)
                -> subject (' Rapport de Stage ');
                $message-> from ('esmtmemoire2020@gmail.com', 'Formulaire à Remplir');
            });
        return 'E-mail envoyé avec succès' ;
    }
    
}
