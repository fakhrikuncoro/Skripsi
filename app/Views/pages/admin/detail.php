<?= $this-> extend ('layout/template'); ?>
<?= $this-> section ('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
        <div class="mt-4 card">
        <div class="">
            <div class="py-3 col card-header">
                <h1 class="m-0 font-weight-bold text-primary"><?=$title?></h1>
            </div>
            <div class="text-right col card-header">
            <a href="/angkatan/"class='btn btn-primary plus'>Back To Home</a>
            
            </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                <th style="text-align: center;" scope="col">Hari</th>
                <th style="text-align: center;" scope="col">Mapel</th>
                <th style="text-align: center;" scope="col">Jam</th>
                <th style="text-align: center;" scope="col">Jenis</th>
                <th style="text-align: center;" scope="col">Dosen</th>
                
                </tr>
            </thead>
            <tbody> 
                <?php if ($pelajaran): ?>
                    <?php foreach($pelajaran as $a) : ?>
                        
                        <tr>
                        <td style="text-align: center;"><?= $a['hari'] ?></td>
                        <td style="text-align: center;"><?= $a['mapel'] ?></td>
                        <td style="text-align: center;"><?= $a['jam'] ?></td>
                        <td style="text-align: center;"><?= $a['jenis'] ?></td>
                        <td style="text-align: center;"><?= $a['dosen'] ?></td>
                        <td style="text-align: center;" style="text-align: center;">
                        </td>
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