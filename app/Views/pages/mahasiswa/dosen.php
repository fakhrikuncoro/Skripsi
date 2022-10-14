<?= $this-> extend ('layout/template'); ?>
<?= $this-> section ('content'); ?>


<div class="container">
  <div class="col">
    <div class="row">
      <div class="py-3 col card-header">
        <h1 class="m-10 font-weight-bold text-primary">Informasi Dosen</h1>
      </div>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Nama Dosen</th>
            <th scope="col">No Telfon</th>
            <th scope="col">Email</th>
          </tr>
        </thead>
          <tbody>
            <?php foreach($penjadwalan as $k) : ?>
            <tr>
              </td>
              <td><?= $k ['nama_dosen']; ?></td>
              <td><?= $k ['contact']; ?></td>
              <td><?= $k ['email']; ?></td>
              <td>
              <a href="/Home/<?= $k['slug'] ?>"class='btn btn-success'>Detail</a>
			  <td href="/Home/delete/<?= $k['jurusan']; ?>"class="btn btn-danger">Delete</td>
              </td>
            </tr>
            <?php endforeach; ?>
          </tbody>
      </table>
        </div>
    </div>
</div>

<?= $this->endsection(); ?>



