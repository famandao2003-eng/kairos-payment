<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function home()
    {
        $student = [
            'prenom' => 'Ma Sithou',
            'nom' => 'Routiou',
            'matricule' => '2026-UCAO-001',
            'filiere' => 'Informatique de Gestion',
            'classe' => 'Licence 3'
        ];

        $payments = [
            [
                'type' => 'Inscription',
                'montant' => '320 000 FCFA',
                'date' => '15 Mai 2026'
            ],
            [
                'type' => 'Scolarité',
                'montant' => '850 000 FCFA',
                'date' => '20 Juin 2026'
            ]
        ];

        return view('home', compact('student', 'payments'));
    }

    public function payment()
    {
        return view('payment');
    }

    public function storeMethod(Request $request)
    {
        session([
            'method' => $request->input('method')
        ]);

        return redirect('/validation');
    }

    public function validation()
    {
        $method = session('method');

        return view('validation', compact('method'));
    }

    public function success(Request $request)
    {
        $phone = $request->phone;
        $method = session('method');

        $date = now()->format('d/m/Y');
        $heure = now()->format('H:i');

        return view('success', compact(
            'phone',
            'method',
            'date',
            'heure'
        ));
    }
}