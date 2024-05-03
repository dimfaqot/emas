<?= $this->extend('guest') ?>

<?= $this->section('content') ?>

<div class="container" style="margin-top: 90px;">

    <div class="row g-3">
        <div class="col-md-4">
            <?php foreach (get_news() as $k => $i) : ?>
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="<?= base_url('files/'); ?><?= $i['img']; ?>" class="img-fluid rounded-start" alt="Berita">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h6 class="card-title"><?= $i['judul']; ?></h6>
                                <p style="font-size: small;" class="card-text"><?= get_cuplikan_berita($i['berita'], 10); ?></p>
                                <p style="font-size: small;" class="card-text"><small class="text-muted"><?= date('d-m-Y H:i:s', $i['created_at']); ?></small></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="col-md-8">
            <div class="card">
                <img src="<?= base_url('files/'); ?><?= get_news()[0]['img']; ?>" class="card-img-top" alt="berita">
                <div class="card-body">
                    <h4><?= get_news()[0]['judul']; ?></h4>
                    <p class="card-text"><?= get_news()[0]['berita']; ?></p>
                </div>
            </div>
        </div>
    </div>

</div>

<?= $this->endSection() ?>