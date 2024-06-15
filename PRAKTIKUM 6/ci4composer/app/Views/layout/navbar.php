<nav class="navbar navbar-expand-lg custom-navbar">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('buku/index') ?>">Buku</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="<?= base_url('buku/create') ?>" class="btn btn-outline-primary ">Tambah</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-outline-danger" href="<?= base_url('/logout') ?>">Logout</a>
                </li>
            </ul>
        </div>
</nav>
