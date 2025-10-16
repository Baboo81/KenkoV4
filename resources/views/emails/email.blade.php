<h2>Nouveau message depuis le site Kenko Web 💌</h2>

<p><strong>Nom :</strong> {{ $contact->name }}</p>
<p><strong>Prénom :</strong> {{ $contact->firstName }}</p>
<p><strong>Téléphone :</strong> {{ $contact->tel ?? 'Non renseigné' }}</p>
<p><strong>Email :</strong> {{ $contact->email }}</p>

<hr>

<p><strong>Message :</strong></p>
<p>{{ $contact->message }}</p>
