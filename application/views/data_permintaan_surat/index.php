<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data Permintaan Surat Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('data_permintaan_surat/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Permintaan</th>
						<th>Keperluan</th>
						<th>No Surat</th>
						<th>Tgl Buat</th>
						<th>Nik Pembuat</th>
						<th>Verifikasi</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($data_permintaan_surat as $d){ ?>
                    <tr>
						<td><?php echo $d['id_permintaan']; ?></td>
						<td><?php echo $d['keperluan']; ?></td>
						<td><?php echo $d['no_surat']; ?></td>
						<td><?php echo $d['tgl_buat']; ?></td>
						<td><?php echo $d['nik_pembuat']; ?></td>
						<td>
                            <a href="<?php echo site_url('data_permintaan_surat/edit/'.$d['id_permintaan']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('data_permintaan_surat/remove/'.$d['id_permintaan']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                            <a href="<?php echo site_url('data_permintaan_surat/print/'.$d['id_permintaan']); ?>" class="btn btn-warning btn-xs"><span class="fa fa-print"></span> Cetak</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
