@extends('layouts.app')

@section('content')

<div class="success-box">

<div class="check">
✓
</div>

<h1>PAIEMENT RÉUSSI</h1>

<p>
Votre transaction a été effectuée avec succès.
</p>

</div>

<div class="card">

<h2>Détails de la Transaction</h2>

<p><strong>ID :</strong> TRX-20260508-ABC123</p>

<p><strong>Date :</strong> 8 Mai 2026 à 14:35</p>

<p><strong>Moyen :</strong> Orange Money</p>

<p><strong>Numéro :</strong> 77 123 45 67</p>

<div class="big-text">
850 000 FCFA
</div>

</div>

<div class="card" id="sms" style="display:none;">

<h2>Confirmation SMS Envoyée</h2>

<p>
[KAIROS UCAO] Bonjour Ma Sithou,
paiement de 850 000 FCFA validé.
</p>

</div>

<a href="/" class="btn btn-primary">
Retour au Tableau de Bord
</a>

<script>

setTimeout(() => {

    document.getElementById('sms').style.display = 'block';

},1000);

</script>

@endsection