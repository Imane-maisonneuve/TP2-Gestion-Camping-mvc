{{ include('layouts/header.php', {title:'reservation Create'})}}
<div>

    <form class="form-base" method="post">

        <h2>{{ site.siteNom }}</h2>

        <label>Date d'arrivee</label>
        <input type="date" name="dateArrivee" value="{{ reservation.dateArrivee }}">

        <label>Date de depart</label>
        <input type="date" name="dateDepart" value="{{ reservation.dateDepart }}">


        <label>Nombre de personnes</label>
        <input type="text" name="nbrDePersonnes" value="{{ reservation.nbrDePersonnes }}">

        <label>Votre Courriel</label>
        <input type="email" name="courriel" value="{{ reservation.courriel }}">

        <input type="hidden" name="siteId" value="{{ site.id }}">

        <input type="submit" class="boutton-submit" value="Enregistrer la reservation">
    </form>
</div>
{{ include('layouts/footer.php')}}