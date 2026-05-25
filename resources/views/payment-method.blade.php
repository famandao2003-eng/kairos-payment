@extends('layouts.app')

@section('content')

<h1>Sélection du Moyen de Paiement</h1>

<div class="card blue-card">
    <p>Montant à payer</p>

    <div class="big-text">
        850 000 FCFA
    </div>
</div>

<div class="grid">

<div class="payment-method" onclick="selectMethod(this)">
    <h2>🟠</h2>
    <h3>Orange Money</h3>
</div>

<div class="payment-method" onclick="selectMethod(this)">
    <h2>🔵</h2>
    <h3>Wave</h3>
</div>

<div class="payment-method" onclick="selectMethod(this)">
    <h2>🟣</h2>
    <h3>Free Money</h3>
</div>

<div class="payment-method" onclick="selectMethod(this)">
    <h2>⬛</h2>
    <h3>Carte Bancaire</h3>
</div>

</div>

<br>

<a href="/" class="btn btn-outline">Annuler</a>

<a href="/payment-validation" class="btn btn-primary">
    Continuer
</a>

<script>

function selectMethod(element){

    document.querySelectorAll('.payment-method')
    .forEach(card => {
        card.classList.remove('selected');
    });

    element.classList.add('selected');

}

</script>

@endsection