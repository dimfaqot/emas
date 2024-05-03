<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $judul; ?></title>
    <script src="https://kit.fontawesome.com/a193ca89ae.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="<?= base_url(); ?>logo.png" sizes="16x16">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>style.css" />
</head>

<body>




    <!-- loading -->
    <div class="blur waiting" style="display:none">
        <div class="middlecenter">
            <div class="load">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>

        </div>
    </div>


    <!-- sukses php -->
    <?php if (session()->getFlashdata('sukses')) : ?>
        <div class="sukses middlecenter">
            <div class="wrapper"> <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                    <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none" />
                    <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8" />
                </svg>
            </div>
        </div>
    <?php endif; ?>

    <!-- gagal php -->
    <?php if (session()->getFlashdata('gagal')) : ?>

        <div class="gagal blur" style="border-radius: 10px;">
            <div class="middlecenter">
                <div class="d-flex justify-content-between bg-danger px-1" style="border-radius: 10px;width:300px; color:lightpink;font-size:12px;">

                    <div class="toast-body p-2" style="border-radius: 10px; font-size:12px;">
                        <?= session()->getFlashdata('gagal'); ?>
                    </div>
                    <div>
                        <button type="button" class="btn btn-sm m-auto btnclose" style="color:lightpink;"><i class="fa fa-times-circle"></i></button>

                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <!-- sukses js -->
    <div class="sukses middlecenter" style="display: none;">
        <div class="wrapper"> <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none" />
                <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8" />
            </svg>
        </div>
    </div>


    <!-- gagal js -->
    <div class="gagal blur" style="border-radius: 10px; z-index:99999999; display:none">
        <div class="middlecenter">
            <div class="d-flex justify-content-between bg-danger px-1" style="border-radius: 10px;width:300px; color:lightpink;font-size:12px;">

                <div class="toast-body p-2 textGagal" style="border-radius: 10px; font-size:12px;">

                </div>
                <div>
                    <button type="button" class="btn btn-sm m-auto btnclose" style="color:lightpink;"><i class="fa fa-times-circle"></i></button>
                </div>
            </div>
        </div>
    </div>

    <div class="d-none d-md-block shadow shadow-sm">
        <svg style="position:absolute;top:0px;right:0px;width:30%;z-index:-3" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
            <path fill="#F1C21B" d="M62.1,-14.6C71.8,9.6,65,44.8,45.8,57.5C26.6,70.1,-4.9,60.1,-29,42.1C-53.1,24.1,-69.8,-2,-63.7,-21.3C-57.6,-40.6,-28.8,-53.1,-1.3,-52.7C26.2,-52.3,52.5,-38.9,62.1,-14.6Z" transform="translate(100 100)" />
        </svg>
    </div>
    <?= view('header_footer/guest'); ?>


    <?= $this->renderSection('content') ?>


    <nav class="fixed-bottom">
        <div class="m-auto text-center p-3 bg-light">
            <a style="text-decoration: none;" target="_blank" href="https://www.instagram.com/djanasragen/">
                <div class="d-flex gap-2 justify-content-center">
                    <svg width="30" height="30" viewBox="0 0 500 500" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="0.5" y="114.5" width="115" height="271" fill="#FDC557" stroke="#666666" />
                        <rect x="144.5" y="0.5" width="211" height="499" fill="#FFAE12" stroke="#666666" />
                        <rect x="384.5" y="114.5" width="115" height="271" fill="#FDC557" stroke="#666666" />
                    </svg>
                    <div style="color:#FFAE12;font-weight:700;padding-top:2px"><?= settings()['nama_logo']; ?></div>
                    <div style="color:#FFAE12;padding-top: 2px;">© <?= date('Y'); ?></div>

                </div>

            </a>
        </div>
    </nav>
    <svg style="position:relative;bottom:0px;z-index:-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#FFAE12" fill-opacity="1" d="M0,160L40,170.7C80,181,160,203,240,202.7C320,203,400,181,480,165.3C560,149,640,139,720,117.3C800,96,880,64,960,74.7C1040,85,1120,139,1200,165.3C1280,192,1360,192,1400,192L1440,192L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path>
    </svg>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    <script>
        $(".btnclose").click(function() {
            $('.gagal').hide();
        })

        setTimeout(() => {
            $('.sukses').fadeOut();
        }, 1200);
        const loading = (req = true) => {
            if (req === true) {
                $('.waiting').show()
            } else {
                $('.waiting').fadeOut()
            }
        }
        async function post(url = '', data = {}) {
            loading(true);
            const response = await fetch("<?= base_url(); ?>" + url, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(data),
            });
            loading(false);
            return response.json(); // parses JSON response into native JavaScript objects
        }

        $(document).on('keyup', '.cari_sertifikat', function(e) {
            e.preventDefault();

            cari_sertifikat($(this).val());

        });

        const myCarouselElement = document.querySelector('#landing_page')
        const carousel = new bootstrap.Carousel(myCarouselElement, {
            interval: 5000,
            wrap: false
        })
    </script>
</body>

</html>