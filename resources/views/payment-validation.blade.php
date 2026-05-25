@extends('layouts.app')

@section('content')

<h1>Validation du Paiement</h1>

<div class="card blue-card">

    <p>Montant à confirmer</p>

    <div class="big-text">
        850 000 FCFA
    </div>

</div>

<div class="card">

<label>Numéro de téléphone</label>

<input type="text">

<label>Code PIN</label>

<div style="position:relative;">

<input type="password" id="pin">

<button
type="button"
onclick="togglePin()"
style="position:absolute; right:10px; top:20px;">
👁️
</button>

</div>

<h2>
Montant Total : 850 000 FCFA
</h2>

<a href="/payment-method" class="btn btn-outline">
Annuler
</a>

<a href="/confirmation" class="btn btn-primary">
Confirmer le paiement
</a>

</div>

<script>

function togglePin(){

    let pin = document.getElementById('pin');

    if(pin.type === 'password'){
        pin.type = 'text';
    }else{
        pin.type = 'password';
    }

}

</script>

@endsection