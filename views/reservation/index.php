{{ include('layouts/header.php', {title:'reservations'})}}
<div>

    <form class="form-base" action="{{base}}/reservation/show?courriel={{courriel}}">
        <label>Votre Courriel</label>
        <input type="email" name="courriel" value="">
        <input type="submit" class="boutton-submit" value="Voir mes reservations">
    </form>
</div>
{{ include('layouts/footer.php')}}