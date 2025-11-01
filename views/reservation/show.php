{{ include('layouts/header.php', {title:'Reservations show'})}}

<section>
    <h2>Mes reservations :</h2>

    {% for reservation in reservations %}
    <div class="reservation">
        {% for site in sites %}
        {% if site.id == reservation.siteId %}
        <picture><img src="{{asset}}{{ site.urlImage }}" alt=""></picture>
        <div>
            <h4>{{ site.siteNom }}</h4>
            {% endif %}
            {% endfor %}
            <p>Date de reservation : {{ reservation.dateReservation }}</p>
            <p>Date d'arrivee : {{ reservation.dateArrivee }} </p>
            <p>Date de depart : {{ reservation.dateDepart }}</p>
            <p>Nombre de personnes : {{ reservation.nbrDePersonnes }} </p>
            {% for statut in statuts %}
            {% if statut.id == reservation.statutId %}
            <p>Statut : {{ statut.statutDescription }}</p>
            {% endif %}
            {% endfor %}
            <a href="{{base}}/reservation/edit?id={{ reservation.id }}" class="boutton-submit">Modifier</a>
            <form action="{{base}}/reservation/delete" method="post">
                <input type="hidden" name="id" value="{{ reservation.id }}">
                <input type="hidden" name="courriel" value="{{ reservation.courriel }}">
                <input type="submit" class="boutton-submit" value="Supprimer">
            </form>
        </div>
    </div>
    {% endfor %}
</section>

{{ include('layouts/footer.php')}}