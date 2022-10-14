<?= $this-> extend ('layout/template'); ?>
<?= $this-> section ('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
        <div class="mt-4 card">
        <div class="">
            <div class="py-3 col card-header">
                <h1 class="m-0 font-weight-bold text-primary"><?='KELAS'?></h1>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                <th style="text-align: center;" scope="col">Jurusan</th>
                <th style="text-align: center;" scope="col">Angkatan</th>
                <th style="text-align: center;" scope="col">Kelas</th>
                <th style="text-align: center;" scope="col">Pembimbing</th>
                
                </tr>
            </thead>
            <tbody> 
                
                <?php if ($angkatan): ?>
                    <?php foreach($angkatan as $a) : ?>
                        
                        <tr>
                        <td style="text-align: center;"><?= $a['jurusan'] ?></td>
                        <td style="text-align: center;"><?= $a['angkatan'] ?></td>
                        <td style="text-align: center;"><?= $a['kelas'] ?></td>
                        <td style="text-align: center;"><?= $a['pembimbing'] ?></td>
                        <td>
                <a href="/detail/<?= $a['kelas'] ?>"class='btn btn-success'>Detail</a>
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