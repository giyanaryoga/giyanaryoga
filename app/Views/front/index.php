<?= $this->extend('front/template/index'); ?>

<?= $this->section('page'); ?>
<!-- Page Content-->
<div class="container px-4 px-lg-5 pt-4">
    <!-- Heading Row-->
    <div class="row gx-4 gx-lg-5 align-items-center my-5">
        <div class="col-lg-7"><img class="img-fluid rounded mb-4 mb-lg-2" src="<?= base_url(); ?>/img/cover.jpg" alt="..." />
        </div>
        <div class="col-lg-5">
            <h1 class="font-weight-light text-md-center">Gya Cafe And Creative Space</h1>
            <p class=" text-center">Selamat datang di Gya Cafe And Creative Space, silahkan klik tombol Pesan Sekarang! untuk melakukan pemesanan.</p>
            <div class="d-flex justify-content-center">
                <a class="btn btn-primary m-0 my-2" href="/order">Pesan Sekarang ya!</a>
            </div>
        </div>
    </div>
    <!-- Call to Action-->
    <div class="card text-white bg-secondary my-3 py-2 text-center">
        <div class="card-body">
            <p class="text-white m-0"><b><i>RAPID, TACTICAL, QUICK</i></b></p>
        </div>
    </div>
    <!-- Content Row -->
    <div class="row gx-4 gx-lg-5">
        <div class="col-md-4 mb-5">
            <div class="card h-100">
                <div class="card-body">
                    <h2 class="card-title">Card One</h2>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem magni quas ex numquam, maxime minus quam molestias corporis quod, ea minima accusamus.</p>
                </div>
                <div class="card-footer"><a class="btn btn-primary btn-sm" href="#!">More Info</a></div>
            </div>
        </div>
        <div class="col-md-4 mb-5">
            <div class="card h-100">
                <div class="card-body">
                    <h2 class="card-title">Card Two</h2>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod tenetur ex natus at dolorem enim! Nesciunt pariatur voluptatem sunt quam eaque, vel, non in id dolore voluptates quos eligendi labore.</p>
                </div>
                <div class="card-footer"><a class="btn btn-primary btn-sm" href="#!">More Info</a></div>
            </div>
        </div>
        <div class="col-md-4 mb-5">
            <div class="card h-100">
                <div class="card-body">
                    <h2 class="card-title">Card Three</h2>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem magni quas ex numquam, maxime minus quam molestias corporis quod, ea minima accusamus.</p>
                </div>
                <div class="card-footer"><a class="btn btn-primary btn-sm" href="#!">More Info</a></div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>