<?php

// Script para enviar un correo de prueba desde el entorno de la aplicación
chdir(__DIR__ . '/..');

require __DIR__ . '/../vendor/autoload.php';

$app = require_once __DIR__ . '/../bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

try {
    $data = [
        'name' => 'Prueba CLI',
        'phone' => '0000000000',
        'email' => 'prueba@example.com',
        'message' => 'Mensaje de prueba enviado desde scripts/send_test_mail.php'
    ];

    \Illuminate\Support\Facades\Mail::to('garciaarenasluis53@gmail.com')->send(new \App\Mail\ContactFormMail($data));

    echo "Correo de prueba enviado. Revisa logs o la bandeja de entrada.\n";
} catch (\Exception $e) {
    echo "Error enviando correo de prueba: " . $e->getMessage() . "\n";
    // también registrar en log
    \Illuminate\Support\Facades\Log::error('Error en send_test_mail.php: ' . $e->getMessage());
}
