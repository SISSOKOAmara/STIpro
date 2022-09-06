<form method="POST" action="{{route('achat.store', $produit->id)}}">
@csrf
<input type="integer" placeholder="quantite" name="quantite">
<input type="produit_id" placeholder="produit" name="produit_id" value="{{$produit->id}}">
<input type="text" name="nom" placeholder="nom">
<input type="text" name="prenom" placeholder="prenom">

<button type="submit">Valider</button>


</form>