<?= $this->extend('guest') ?>

<?= $this->section('content') ?>

<div class="container" style="margin-top: 90px;">
    <div class="row g-5 mb-5">
        <div class="col-md-6">
            <?= view('header_footer/landing_images'); ?>
        </div>
        <div class="col-md-6">
            <h1 class="mb-4"><?= get_text()['judul']; ?></h1>

            <p class="mb-5"><?= get_text()['text']; ?></p>

            <a style="font-weight: 700;" class="btn btn-lg btn-warning" href="<?= base_url('product/public'); ?>">Mulai Sekarang</a>
        </div>
    </div>

    <div class="m-auto" style="width:200px;border-bottom: 3px solid #ffc107;"></div>
    <h4 class="mt-4" style="text-align: center;"><?= upper_first(get_text('landing_body_top')['judul']); ?></h4>

    <div class="row g-5" style="margin-bottom: 80px;">
        <?php foreach (get_text('landing_body_middle', 'arr') as $k => $i) : ?>
            <?php if ($k == 0) : ?>

                <!-- isi 1 -->
                <div class="col-md-6">
                    <div style="position:relative;top:40%;left:20%;width:60%">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-center">
                                    <div>
                                        <div style="color:#848F89;font-size:small">Nilai Emas</div>
                                        <div style="border: 1px solid #848F89;padding:5px 10px;border-radius:7px;color:black">
                                            Rp10.000
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <div class="pt-2" style="text-align:center;height: 40px;width:40px;border:1px solid grey;border-radius:50%">
                                            <i class="fa-solid fa-arrow-right-arrow-left"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div style="color:#848F89;font-size:small">Jumlah Emas</div>
                                        <div style="border: 1px solid #848F89;padding:5px 10px;border-radius:7px;color:#848F89">
                                            0,000 gr
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex" style="height: 200px;">
                        <div class="p-5 align-self-center" style="width:250px;height:250px;border:1px dashed grey;border-radius:50%">
                            <div class="d-flex justify-content-center" style="height: 150px;">
                                <div class="align-self-center" style="background-color: #B4F4D1;border-radius:50%;height:160px;width:160px">

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex justify-content-center" style="height: 100%;">
                        <div class="align-self-center">
                            <h3><?= upper_first($i['judul']); ?></h3>
                            <p><?= $i['text']; ?></p>

                        </div>

                    </div>

                </div>

                <!-- isi 2 -->
            <?php elseif ($k == 1) : ?>
                <div class="col-md-6">
                    <div style="padding:2px;text-align:center;position: relative;color:#FF0066; top:250px;left:120px;font-size: 30px;width:50px;height:50px;border:1px solid #FF0066;border-radius:50%">
                        <i class="fa-regular fa-clock"></i>
                    </div>
                    <div style="padding:2px;text-align:center;position: relative;color:#12FF8D; top:140px;left:160px;font-size: 40px;width:70px;height:70px;border:1px solid #12FF8D;border-radius:50%">
                        <i class="fa-solid fa-bag-shopping"></i>
                    </div>
                    <div style="padding:2px;text-align:center;position: relative;color:#17D3FD; top:0px;left:220px;font-size: 50px;width:90px;height:90px;border:1px solid #17D3FD;border-radius:50%">
                        <i class="fa-solid fa-shop"></i>
                    </div>
                    <div class="d-flex" style="height: 200px;">
                        <div class="p-5 align-self-center" style="width:250px;height:250px;border:1px dashed grey;border-radius:50%">
                            <div class="d-flex justify-content-center" style="height: 150px;">
                                <div class="align-self-center" style="background-color: #B4F4D1;border-radius:50%;height:160px;width:160px">

                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-md-6">
                    <div class="d-flex justify-content-center" style="height: 100%;">
                        <div class="align-self-center">
                            <h3><?= upper_first($i['judul']); ?></h3>
                            <p><?= $i['text']; ?></p>

                        </div>

                    </div>

                </div>
                <!-- isi 3 -->
            <?php elseif ($k == 2) : ?>
                <div class="col-md-6">
                    <div class="d-flex justify-content-center" style="height: 100%;">
                        <div class="align-self-center">
                            <h3><?= upper_first($i['judul']); ?></h3>
                            <p><?= $i['text']; ?></p>

                        </div>

                    </div>

                </div>
                <div class="col-md-6">
                    <div style="position:relative;top:40%;left:20%;width:60%;font-size:90px;color:#ffc107">
                        <i class="fa-solid fa-people-robbery"></i>
                    </div>

                    <div class="d-flex" style="height: 200px;">
                        <div class="p-5 align-self-center" style="width:250px;height:250px;border:1px dashed grey;border-radius:50%">
                            <div class="d-flex justify-content-center" style="height: 150px;">
                                <div class="align-self-center" style="background-color: #B4F4D1;border-radius:50%;height:160px;width:160px">

                                </div>
                            </div>
                        </div>

                    </div>
                </div>


            <?php endif; ?>

        <?php endforeach; ?>
    </div>

    <div class="m-auto" style="width:200px;border-bottom: 3px solid #ffc107;"></div>
    <h4 class="mt-4" style="text-align: center;">Testimoni</h4>

    <div class="row g-3">
        <?php foreach (get_testimoni() as $k => $i) : ?>
            <div class="col-md-4">
                <div class="card" style="height:250px;">
                    <div class="card-body">
                        <?= get_cuplikan_berita($i['testimoni'], 50); ?>

                        <div style="position:absolute;bottom:10px">
                            <div class="d-flex gap-3">
                                <i style="font-size:50px;" class="fa-regular fa-circle-user"></i>
                                <div>
                                    <div style="font-weight: 700;"></i> <?= $i['nama']; ?></div>
                                    <div style="font-size:small;"><?= $i['alamat']; ?></div>

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