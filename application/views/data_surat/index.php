<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data Surat Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('data_surat/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Surat</th>
						<th>Jenis</th>
						<th>Keterangan</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($data_surat as $d){ ?>
                    <tr>
						<td><?php echo $d['id_surat']; ?></td>
						<td><?php echo $d['jenis']; ?></td>
						<td><?php echo $d['keterangan']; ?></td>
						<td>
                            <a href="<?php echo site_url('data_surat/edit/'.$d['id_surat']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('data_surat/remove/'.$d['id_surat']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
