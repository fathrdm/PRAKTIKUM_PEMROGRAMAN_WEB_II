<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Admin Layout</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<style>
    body {
        display: flex;
        height: 100vh;
        justify-content: center;
        align-items: center;
        background: url('<?= base_url('images/bg.jpg') ?>');
        background-size: cover;
        color: white;
    }
</style>
<body>
    <div class="container">
        <?= $this->include('layout/navbar') ?>
        <?= $this->renderSection('content') ?>

    </div>
</body>
</html>