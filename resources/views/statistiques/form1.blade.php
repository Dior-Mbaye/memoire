<form action="{{ url('statistiques') }}" method="post">
@csrf
    <div>
        <label for="">Nom de l'Entreprise</label>
        <input type="text" name="to_name">
    </div>
    <div>
        <label for="">Email de l'Entreprise</label>
        <input type="email" name="to_email" id="" placeholder="Veillez renseignez l'email de l'entreprise qui devrait recevoir le formulaire de rapport de stage">
    </div>
    <div>
        <label for="">Nom de l'Etudiant en stage</label>
        <input type="text" name="etu" id="">
    </div>
    <div>
        
            <input type="submit" value="Envoyer">
        
    </div>
</form>