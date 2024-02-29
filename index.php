<?php
// Load phpdotenv
require __DIR__ . '/vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
?>

<style>
    body {
        background-color: #2d2d2d;
        color: white;
        color-scheme: dark light;
        font-family: system-ui;
    }

    .container {
        max-width: 60%;
        margin: 0 auto;
        padding: 3rem 0rem;
    }

    h3 {
        font-size: 2rem;
        margin-bottom: 1rem;
    }

    .icon {
        display: block;
        text-align: center;
        font-size: 5rem;
    }

    .title {
        text-align: center;
    }

    .subtitle {
        font-size: 1.5rem;
    }

    .result {
        padding: 1rem;
        background-color: #1f1f1f;
        border-radius: .5rem;
        font-weight: lighter;
    }
</style>

<section class="container">
    <span class="icon">🗝️</span>
    <h3 class="title">Ejemplo de variables de entorno (dotenv)</h3>
    <p>
        Este es un ejemplo de variables en torno en PHP y requiere de una instalacion simple desde
        Composer para que funcione. Funciona en cualquier proyecto que ha sido instalado con Composer.
    </p>
    <h3 class="subtitle">Resultado</h3>
    <p class="result"><?= $_ENV['SERVER'] ?></p>
</section>