<!DOCTYPE html>
<html>

<head>
    <title>Export PDF Data PNS</title>
</head>

<body>
    <style type="text/css">
        table tr td,
        table tr th {
            font-size: 9pt;
        }
    </style>
    <center>
        <h5>Data PNS Bappeda Kaltim <b>(<?php echo e(date('d-m-Y')); ?>)</b></h4>
    </center>

    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Foto</th>
                <th>NIK</th>
                <th>NIP</th>
                <th>Nama</th>
                <th>Tempat, Tanggal Lahir</th>
                <th>Alamat</th>
                <th>Bidang</th>
                <th>Sub Bidang</th>
                <th>Nomor HP</th>
                <th>Email</th>
                <th>Jabatan</th>
                <th>Pendidikan Terakhir</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $datanya; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($loop->iteration); ?></td>
                    <td>
                        <img src="<?php echo e(url('datafoto_pns/' . $value->foto_pns)); ?>" width="150px" height="150px">
                    </td>
                    <td><?php echo e(dekripsihillcipher(utf8_decode($value->nik))); ?></td>
                    <td><?php echo e(dekripsihillcipher(utf8_decode($value->nip))); ?></td>
                    <td><?php echo e(dekripsihillcipher(utf8_decode($value->nama_pns))); ?></td>
                    <?php
                        $tanggallahir = dekripsihillcipher(utf8_decode($value->tanggal_lahir));
                    ?>
                    <td>
                        <?php echo e(dekripsihillcipher(utf8_decode($value->tempat_lahir))); ?>,
                        <?php echo e(date('d-M-Y', strtotime($tanggallahir))); ?>

                    </td>
                    <td><?php echo e($value->alamat != null ? dekripsihillcipher(utf8_decode($value->alamat)) : ''); ?></td>
                    <td><?php echo e($value->bidang->nama_bidang); ?></td>
                    <td><?php echo e($value->subbidang->nama_sub_bidang != null ? $value->subbidang->nama_sub_bidang : ''); ?></td>
                    <td><?php echo e(dekripsihillcipher(utf8_decode($value->nomor_hp))); ?></td>
                    <td><?php echo e(dekripsihillcipher(utf8_decode($value->email))); ?></td>
                    <td><?php echo e(dekripsihillcipher(utf8_decode($value->jabatan))); ?></td>
                    <td><?php echo e(dekripsihillcipher(utf8_decode($value->pendidikan_terakhir))); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\e-kepegawaian-hillcipher\resources\views/admin/export_pdf_pns.blade.php ENDPATH**/ ?>