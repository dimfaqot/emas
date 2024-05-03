<?= $this->extend('guest') ?>

<?= $this->section('content') ?>

<div class="container" style="margin-top: 90px;">
    <div class="row g-4">
        <div class="col-md-5">
            <h3>
                Dapatkan Bantuan dari Tim Kami
            </h3>

            <div>Hubungi Kami</div>
            <div>(Pukul 08.30 - 16.00 WIB)</div>
            <div>Telepon</div>
            <a href="whatsapp://send/?phone=<?= settings()['no_wa']; ?>&amp;text=Selamat malam.%0aSaya ingin menanyakan produk di bawah ini.%0a%0aSaya minta info produk..."><?= settings()['no_wa']; ?></a>
            <div>Email</div>
            <div>email@gmail.com</div>
        </div>
        <div class="col-md-7">
            <h3>
                Atau Tinggalkan Pesan
            </h3>

            <div class="card">
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>