<?= $this-> extend ('layout/template'); ?>
<?= $this-> section ('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
        <div class="mt-4 card">
        <div class="">
            <div class="py-3 col card-header">
                <h1 class="m-0 font-weight-bold text-primary"><?=$slug ?></h1>
            </div>
            <div class="text-right col card-header">
            <a href="/home/"class='btn btn-primary plus'>Back To Home</a>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                <th style="text-align: center;" scope="col">Angkatan</th>
                <th style="text-align: center;" scope="col">Pembimbing</th>
                <th style="text-align: center;" scope="col">Kelas</th>
                
                </tr>
            </thead>
            <tbody> 
                <?php if ($angkatan): ?>
                    <?php foreach($angkatan as $a) : ?>
                        
                        <tr>
                        <td style="text-align: center;"><?= $a['angkatan'] ?></td>
                        <td style="text-align: center;"><?= $a['pembimbing'] ?></td>
                        <td style="text-align: center;"><?= $a['kelas'] ?></td>
                        <td>
              <a href="/detail/<?= $a['slug'] ?>"class='btn btn-success'>Detail</a>
              <a href="/angkatan/delete/<?= $a['id_angkatan']; ?>"class="btn btn-danger">Delete</a>
              </td>
                        </tr>
                    </tr>
                    <?php endforeach; ?>
                
                <?php else: ?>
                    <tr><td style="text-align: center;" colspan="3">Sory data not found.</td></tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
<?= $this->endsection(); ?>