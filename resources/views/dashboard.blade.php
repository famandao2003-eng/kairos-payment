@extends('layouts.app')

@section('content')

<h1 style="color:red;font-size:60px;">
TEST FAMA 999
</h1>


<div class="student-card">

    <img 
        src="{{ asset('images/lucas.jpg') }}" 
        alt="Lucas"
        class="student-photo"
    >

    <div>
        <h2>Ma Sithou Routiou</h2>

        <p>ID : 2026-UCAO-001</p>

        <p>Informatique de Gestion</p>
    </div>

</div>

<div class="grid">
    <div class="card">
        <p>SOLDE TOTAL DÛ</p>
        <div class="big-text">1 295 000 FCFA</div>
    </div>

    <div class="card">
        <p>PROCHAINE ÉCHÉANCE</p>
        <div class="big-text">15 Avril 2026</div>
    </div>
</div>

<div class="card">
    <h2>FACTURES</h2>

    <table>
        <tr>
            <th>Type</th>
            <th>Description</th>
            <th>Montant</th>
            <th>Date</th>
            <th>Statut</th>
            <th>Actions</th>
        </tr>

        <tr>

    <td>Inscription</td>

    <td>Frais d'inscription</td>

    <td>850 000 FCFA</td>

    <td>18 novembre 2025</td>

    <td>
        <span class="paid-status">
            PAYÉ
        </span>
    </td>

    <td class="actions">

        <a href="/confirmation" class="receipt-btn">
          Voir reçu
        </a>

    </td>

</tr>

        <tr>
            <td>Scolarité</td>
            <td>Frais S1</td>
            <td>850 000 FCFA</td>
            <td>15 Avril 2026</td>
            <td><span class="status-red">EN RETARD</span></td>
            <td>
                <a href="/payment-method" class="btn btn-primary">Payer</a>
                <a href="/installment" class="btn btn-outline">Étaler</a>
            </td>
        </tr>

        <tr>
            <td>Frais</td>
            <td>Frais S2</td>
            <td>125 000 FCFA</td>
            <td>1 Avril 2026</td>
            <td><span class="status-orange">EN ATTENTE</span></td>
            <td>
                <a href="/payment-method" class="btn btn-primary">Payer</a>
                <a href="/installment" class="btn btn-outline">Étaler</a>
            </td>
        </tr>

    </table>
</div>

@endsection