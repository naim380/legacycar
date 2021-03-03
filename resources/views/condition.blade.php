<form action="/condition" method="post">
    @csrf
<input type="text" name="text">
<button type="submit">calculer</button>
</form>
@if(session("statut"))
    <p>{{session("statut")}}</p>
@endif
