<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nuevo mensaje de contacto</title>
</head>
<body>
    <h2>Nuevo mensaje de contacto desde ClearMind</h2>

    <p><strong>Nombre:</strong> {{ $data['name'] ?? 'N/A' }}</p>
    <p><strong>Teléfono:</strong> {{ $data['phone'] ?? 'N/A' }}</p>
    <p><strong>Correo (usuario):</strong> {{ $data['email'] ?? 'N/A' }}</p>

    <h3>Mensaje:</h3>
    <p>{!! nl2br(e($data['message'] ?? '')) !!}</p>

    <hr>
    <p>Este correo fue enviado automáticamente desde ClearMind.</p>
</body>
</html>
