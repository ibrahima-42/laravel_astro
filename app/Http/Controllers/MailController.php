<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailController extends Controller
{
    //
    public function receiveEmail(Request $request)
    {
        // Traitez les données du mail ici
        $data = $request->all();

        // Stockez les mails dans la base de données ou faites ce que vous devez faire avec les données

        return response()->json(['message' => 'Email received successfully']);
    }
}
