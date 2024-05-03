<?= $this->extend('guest') ?>

<?= $this->section('content') ?>

<div class="container" style="margin-top: 90px;">
    <div class="row g-4">
        <?php foreach (get_product() as $k => $i) : ?>
            <div class="col-md-3">
                <div class="card" style="height:440px;">
                    <div class="card-body">
                        <div style="overflow: hidden;height:340px;">
                            <img style="width: 100%;margin-top:-50px;" src="<?= base_url('files'); ?>/<?= $i['img']; ?>" alt="Harga Emas">
                        </div>

                        <div style="position:absolute;bottom:20px">
                            <div class="d-flex justify-content-between gap-5">
                                <div>
                                    <div><?= $i['gram']; ?> Gram</div>
                                    <div style="font-weight: 700;"><?= rupiah($i['harga']); ?></div>
                                </div>
                                <div>
                                    <div>Beli</div>
                                    <a class="btn_main" style="font-size:10px;" href="whatsapp://send/?phone=<?= settings()['no_wa']; ?>&amp;text=Selamat malam.%0aSaya ingin menanyakan produk di bawah ini.%0a%0a<?= base_url('product/public/single/'); ?><?= $i['id']; ?>"><i class="fa-brands fa-whatsapp" style="font-size:large;color:green" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?= $this->endSection() ?>