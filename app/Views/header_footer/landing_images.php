<div id="landing_page" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">

        <?php foreach (get_news() as $k => $i) : ?>
            <div class="carousel-item <?= ($k == 0 ? 'active' : ''); ?>">
                <img src="<?= base_url('files/'); ?><?= $i['img']; ?>" class="d-block w-100" alt="Gambar Berita <?= $i['judul']; ?>">
                <div class="carousel-caption d-none d-md-block">
                    <h5><?= $i['judul']; ?></h5>
                    <div><?= get_cuplikan_berita($i['berita']); ?>...</div>
                    <a style="font-weight:600;color:aqua" href="<?= base_url('news/public/single/'); ?><?= $i['slug']; ?>">Baca Selengkapnya</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>