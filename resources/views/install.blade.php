@extends('layouts.app')

@section('content')

<a href="/" class="btn btn-outline">← Retour</a>

<div class="card blue-card">
    <h2>Scolarité</h2>
    <p>Frais de scolarité - Semestre 1</p>

    <div class="big-text">
        850 000 FCFA
    </div>
</div>

<div class="card">

    <h2>Configuration de l'Échéancier</h2>

    <label>Nombre de mensualités</label>

    <input type="range" min="2" max="12" value="6" id="months">

    <h1 id="monthsText">6 mois</h1>

    <h3>Montant mensuel</h3>

    <div class="big-text" id="monthly">
        141 667 FCFA
    </div>

    <label>Date du premier paiement</label>

    <input type="date">

    <br><br>

    <a href="/" class="btn btn-outline">Annuler</a>

    <a href="/payment-method" class="btn btn-primary">
        Valider
    </a>

</div>

<script>
let slider = document.getElementById('months');
let monthly = document.getElementById('monthly');
let monthsText = document.getElementById('monthsText');

slider.addEventListener('input', function(){

    let months = this.value;

    let total = 850000;

    let result = Math.round(total / months);

    monthly.innerHTML = result.toLocaleString('fr-FR') + ' FCFA';

    monthsText.innerHTML = months + ' mois';

});
</script>

@endsection