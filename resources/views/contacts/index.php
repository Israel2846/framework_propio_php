<!DOCTYPE html>
<html lang="es-es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactos</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <h1 class="text-2xl bont-bold mb-2">Listado de contactos</h1>

    <a href="/contacts/create">Crear contácto</a>

    <ul class="list-disc list-inside">

        <?php foreach ($contacts['data'] as $contact) : ?>

            <li>
                <a href="/contacts/<?= $contact['id'] ?>">
                    <?= $contact['name'] ?>
                </a>
            </li>

        <?php endforeach ?>
        
    </ul>

    <?php

    $paginate = 'contacts';

    include_once '../resources/views/assets/pagination.php'

    ?>

</body>

</html>