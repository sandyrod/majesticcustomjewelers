<!DOCTYPE html>
<html>
<head>
    <title>Nuevo mensaje de contacto</title>
</head>
<body>
    <h2>Has recibido un nuevo mensaje de contacto</h2>
    
    <p><strong>Nombre:</strong> {{ $message->name }}</p>
    <p><strong>Email:</strong> {{ $message->email }}</p>
    <p><strong>Asunto:</strong> {{ $message->subject }}</p>
    <p><strong>Mensaje:</strong></p>
    <p>{{ $message->message }}</p>
    
    <p>Puedes gestionar este mensaje desde el panel de administración.</p>
</body>
</html>