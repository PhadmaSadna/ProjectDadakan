
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data Masyarakat Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('data_masyarakat/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped" id="myTables">
                    <tr>
						<th>NIK</th>
						<th>No Kk</th>
						<th>Nama</th>
						<th>Tempat Lhr</th>
						<th>Tanggal Lhr</th>
						<th>Jenkel</th>
                        <th>Status Keluarga</th>
                        <th>Status Perkawinan</th>
                        <th>Nama Ortu</th>
                        <th>Alamat</th>
                        <th>Agama</th>
						<th>Pekerjaan</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($data_masyarakat as $d){ ?>
                    <tr>
						<td><?php echo $d['nik']; ?></td>
						<td><?php echo $d['no_kk']; ?></td>
						<td><?php echo $d['nama']; ?></td>
						<td><?php echo $d['tempat_lhr']; ?></td>
						<td><?php echo $d['tanggal_lhr']; ?></td>
						<td><?php echo $d['jenkel']; ?></td>
                        <td><?php echo $d['status_keluarga']; ?></td>
                        <td><?php echo $d['status_perkawinan']; ?></td>
                        <td><?php echo $d['nama_ortu']; ?></td>
						<td><?php echo $d['alamat']; ?></td>
                        <td><?php echo $d['agama']; ?></td>
                        <td><?php echo $d['pekerjaan']; ?></td>
						<td>
                            <a href="<?php echo site_url('data_masyarakat/edit/'.$d['id_user']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('data_masyarakat/remove/'.$d['id_user']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
            <script type="text/javascript">
                $(document).ready( function () {
                    $('#myTables').DataTable();
                } );
            </script>
        </div>
    </div>
</div>
