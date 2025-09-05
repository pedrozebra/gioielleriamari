<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Nuovo Messaggio dal Sito Web</title>
    <style>
        body { font-family: sans-serif; line-height: 1.6; color: #333; }
        .container { padding: 20px; border: 1px solid #ddd; border-radius: 5px; max-width: 600px; margin: 20px auto; }
        .strong { font-weight: bold; }
    </style>
</head>
<body>
<div class="container">
    <h2>Nuovo Messaggio dal Form di Contatto</h2>
    <p>Hai ricevuto un nuovo messaggio dal sito web.</p>
    <hr>
    <p><span class="strong">Nome:</span> {{ $submission->first_name }} {{ $submission->last_name }}</p>
    <p><span class="strong">Email:</span> {{ $submission->email }}</p>
    <p><span class="strong">Messaggio:</span></p>
    <p>{{ $submission->message }}</p>
</div>
</body>
</html>
