<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Form</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link href="<?= base_url('css/style.css') ?>" rel="stylesheet">
    <style>
        body {
            display: flex;
            height: 100vh;
            justify-content: center;
            align-items: center;
            background: url('<?= base_url('images/bg.jpg') ?>');
            background-size: cover;
        }
    </style>
</head>
<body>
    <div class="container">
        <h3 class="form-title">Login Here</h3>
        <?php if (session()->getFlashdata('msg')): ?>
            <div class="alert alert-danger" role="alert"><?= session()->getFlashdata('msg') ?>
            </div> <?php endif; ?>
        <form action="/login/auth" method="post" class="main-user-info">
            <div class="user-input-box">
                <label for="username">Username</label>
                <input type="text" name="username" placeholder="Email or Phone" id="username"
                    value="<?= set_value('username') ?>">
            </div>
            <div class="user-input-box">
                <label for="email">Email</label>
                <input type="email" name="email" placeholder="Email" id="email" value="<?= set_value('email') ?>">
            </div>
            <div class="user-input-box">
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="Password" id="password">
            </div>
            <div class="form-submit-btn">
                <input type="submit"  value="Log In">
            </div>
        </form>
    </div>
</body>
</html>