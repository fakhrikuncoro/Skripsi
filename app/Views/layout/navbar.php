<nav class="navbar navbar-expand-lg" style="background-color:white  ;" >
    <div class="container">
      <div class="row">
        <div class="col">
        <a class="navbar-brand" href="#">Penjadwalan Mata Kuliah Otomatis</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link active" href="<?= base_url("/Angkatan"); ?>">Home</a>
          <a class="nav-item nav-link" href="<?= base_url("/TambahKelas"); ?>">Tambah Kelas</a>
          <a class="nav-item nav-link" href="<?= base_url("/TambahDosen"); ?>">Tambah Dosen</a>
          <a class="nav-item nav-link" href="<?= base_url("/TambahPelajaran"); ?>">Tambah Pelajaran</a>
          <li class="nav-item">
                        <a class="nav-link" href="<?= base_url(); ?>/logout">Logout</a>
                    </li>
        </div>
      </div>
        </div>
  </div>
  </div>
</nav>