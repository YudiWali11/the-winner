@include('layout.header')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center"
        style="background-image: url(img/bg_daftar.jpg);">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

            <h2 class="text-center">Indonesian The Winner</h2>
            <h4><a href="/">Home</a></h4>
            <h6 style="color: white">Silahkan isi data-data dibawah dengan benar!</h6>

        </div>
    </div><!-- End Breadcrumbs -->

    <section class="sample-page">
        <div class="container">
            <form>
                <h3>Silahkan isi data diri anda dengan tepat</h3>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama">
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat Lengkap</label>
                    <input type="text" class="form-control" id="alamat">
                </div>
                <div class="mb-3">
                    <label for="tmp_tgl_lahir" class="form-label">Tempat, Tanggal Lahir</label>
                    <input type="text" class="form-control" id="tmp_tgl_lahir">
                </div>
                <div class="mb-3">
                    <label for="usia" class="form-label">Usia</label>
                    <input type="text" class="form-control" id="usia">
                </div>
                <div class="mb-3">
                    <label for="agama" class="form-label">Agama</label>
                    <input type="text" class="form-control" id="agama">
                </div>
                <div class="mb-3">
                    <label for="tinggi_bdn" class="form-label">Tinggi Badan</label>
                    <input type="number" class="form-control" id="tinggi_bdn">
                </div>
                <div class="mb-3">
                    <label for="berat_bdn" class="form-label">Berat Badan</label>
                    <input type="number" class="form-control" id="berat_bdn">
                </div>
                <div class="mb-3">
                    <label for="no_telp" class="form-label">No. Telephone</label>
                    <input type="text" class="form-control" id="no_telp">
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat Lengkap</label>
                    <input type="text" class="form-control" id="alamat">
                </div>
                <br><br>
                <h3>Silahkan isi data diri orang tua anda dengan tepat</h3>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama">
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="alamat">
                </div>
                <div class="mb-3">
                    <label for="pekerjaan" class="form-label">Pekerjaan</label>
                    <input type="text" class="form-control" id="pekerjaan">
                </div>
                <div class="mb-3">
                    <label for="no_telp" class="form-label">No. Telephone</label>
                    <input type="text" class="form-control" id="no_telp">
                </div>
                <button type="submit" class="btn btn-success">Selesai</button>
            </form>
        </div>
    </section>

</main><!-- End #main -->
@include('layout.footer')
