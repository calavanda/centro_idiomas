<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Firebase Credentials
    |--------------------------------------------------------------------------
    |
    | Ruta al archivo JSON de credenciales de Firebase que descargaste desde
    | la consola de Firebase (Service Account).
    |
    */

    'credentials_file' => env('FIREBASE_CREDENTIALS', storage_path('firebase/firebase_credentials.json')),

    /*
    |--------------------------------------------------------------------------
    | Firebase Realtime Database URL
    |--------------------------------------------------------------------------
    |
    | La URL de tu base de datos en tiempo real. Por ejemplo:
    | https://centro-idiomas-default-rtdb.firebaseio.com
    |
    */

    'database_url' => env('FIREBASE_DATABASE_URL', 'https://centro-idiomas-default-rtdb.firebaseio.com'),

    /*
    |--------------------------------------------------------------------------
    | Firebase Project ID
    |--------------------------------------------------------------------------
    |
    | Opcional, el ID de tu proyecto Firebase.
    |
    */

    'project_id' => env('FIREBASE_PROJECT_ID', 'centro-idiomas'),

];
