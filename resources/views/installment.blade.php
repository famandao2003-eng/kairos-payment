<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>KAIROS - Échéancier</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            background: #f5f5f5;
            margin: 0;
        }

        header{
            background: white;
            border-bottom: 4px solid #0A1628;
            padding: 20px;
        }

        h1{
            color: #0A1628;
            margin: 0;
        }

        .container{
            width: 90%;
            margin: 30px auto;
        }

        .card{
            background: #0A1628;
            color: white;
            padding: 25px;
            margin-bottom: 20px;
        }

        .form-box{
            background: white;
            padding: 25px;
        }

        label{
            display: block;
            margin-top: 20px;
            margin-bottom: 10px;
            font-weight: bold;
        }

        input{
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
        }

        .monthly{
            font-size: 30px;
            color: #0A1628;
            font-weight: bold;
            margin-top: 20px;
        }

        .buttons{
            margin-top: 30px;
            display: flex;
            gap: 15px;
        }

        button{
            padding: 15px 25px;
            border: none;
            cursor: pointer;
            font-weight: bold;
        }

        .cancel{
            background: white;
            border: 2px solid #0A1628;
            color: #0A1628;
        }

        .validate{
            background: #0A1628;
            color: white;
        }
    </style>
</head>

<body>

<header>
    <h1>KAIROS</h1>
    <p>Créer un Échéancier</p>
</header>

<div class="container">

    <div class="card">
        <h2>Scolarité</h2>
        <p>Frais de scolarité - Semestre 1</p>

        <h1>850 000 FCFA</h1>
    </div>

    <div class="form-box">

        <label>Nombre de mensualités</label>

        <input 
            type="range" 
            min="2" 
            max="12" 
            value="6"
            id="months"
        >

        <h3 id="monthsText">6 mois</h3>

        <label>Montant Mensuel</label>

        <div class="monthly" id="monthlyAmount">
            141 667 FCFA
        </div>

        <label>Date du premier paiement</label>

        <input type="date">

        <div class="buttons">

            <button class="cancel">
                Annuler
            </button>

            <a href="/payment-method">
                <button class="validate">
                    Valider
                </button>
            </a>

        </div>

    </div>

</div>

<script>

    const slider = document.getElementById('months');

    const monthsText = document.getElementById('monthsText');

    const monthlyAmount = document.getElementById('monthlyAmount');

    const total = 850000;

    slider.addEventListener('input', function(){

        let months = this.value;

        monthsText.innerText = months + ' mois';

        let monthly = total / months;

        monthlyAmount.innerText =
            Math.round(monthly).toLocaleString('fr-FR') + ' FCFA';

    });

</script>

</body>
</html>