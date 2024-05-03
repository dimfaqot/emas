<div class="fixed-top">
    <nav class="navbar navbar-expand-lg bg-warning">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <svg class="d-inline-block align-text-top" width="35" height="29" viewBox="0 0 500 500" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="0.5" y="114.5" width="115" height="271" fill="#FBE8C4" stroke="#666666" />
                    <rect x="144.5" y="0.5" width="211" height="499" fill="#fff" stroke="#666666" />
                    <rect x="384.5" y="114.5" width="115" height="271" fill="#FBE8C4" stroke="#666666" />
                </svg>

                <b><?= settings()['nama_logo']; ?></b>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <?php foreach (menus() as $i) : ?>
                        <a class="nav-link <?= (url() == $i['controller'] ? 'active' : ''); ?>" aria-current="page" href="<?= base_url(); ?><?= $i['controller'] . ($i['controller'] !== '' ? '/public' : ''); ?>"><i class="<? $i['icon']; ?>"></i> <?= $i['menu']; ?></a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </nav>

</div>