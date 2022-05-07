<?= $this-> extend ('layout/template'); ?>
<?= $this-> section ('content'); ?>


<div class="container">
  <div class="col">
    <div class="row">
      <div class="py-3 col card-header">
        <h1 class="m-10 font-weight-bold text-primary">Daftar Jurusan</h1>
      </div>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Jurusan</th>
          </tr>
        </thead>
          <tbody>
            <?php foreach( $jurusan as $j) : ?>
            <tr>
              </td>
              <td><?= $j ['jurusan']; ?></td>
              <td>
              <a href="/angkatan/<?= $j['slug'] ?>"class='btn btn-success'>Detail</a>
			  <a href="/Home/delete/<?= $j['id_jurusan']; ?>"class="btn btn-danger">Delete</a>
              </td>
            </tr>
            <?php endforeach; ?>
          </tbody>
      </table>
        </div>
    </div>
</div>

<?= $this->endsection(); ?>



