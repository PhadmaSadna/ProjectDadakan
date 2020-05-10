<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Data Masyarakat Edit</h3>
            </div>
			<?php echo form_open('data_masyarakat/edit/'.$data_masyarakat['id_user']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="nik" class="control-label">NIK</label>
						<div class="form-group">
							<input type="text" name="nik" value="<?php echo ($this->input->post('nik') ? $this->input->post('nik') : $data_masyarakat['nik']); ?>" class="form-control" id="nik" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="no_kk" class="control-label">No KK</label>
						<div class="form-group">
							<input type="text" name="no_kk" value="<?php echo ($this->input->post('no_kk') ? $this->input->post('no_kk') : $data_masyarakat['no_kk']); ?>" class="form-control" id="no_kk" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="nama" class="control-label">Nama</label>
						<div class="form-group">
							<input type="text" name="nama" value="<?php echo ($this->input->post('nama') ? $this->input->post('nama') : $data_masyarakat['nama']); ?>" class="form-control" id="nama" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="tempat_lhr" class="control-label">Tempat Lhr</label>
						<div class="form-group">
							<input type="text" name="tempat_lhr" value="<?php echo ($this->input->post('tempat_lhr') ? $this->input->post('tempat_lhr') : $data_masyarakat['tempat_lhr']); ?>" class="form-control" id="tempat_lhr" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="tanggal_lhr" class="control-label">Tanggal Lhr</label>
						<div class="form-group">
							<input type="date" name="tanggal_lhr" value="<?php echo ($this->input->post('tanggal_lhr') ? $this->input->post('tanggal_lhr') : strftime('%Y-%m-%d',strtotime($data_masyarakat['tanggal_lhr']))); ?>" class="form-control" id="tanggal_lhr" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="jenkel" class="control-label">Jenkel</label>
						<div class="form-group">
							<input type="radio" name="jenkel" 
								<?php 
									if($this->input->post('jenkel') ? $this->input->post('jenkel') : $data_masyarakat['jenkel'] == "L") { 
											echo "checked"; 
									}
								?> value="L"> Laki-laki &nbsp; &nbsp;&nbsp;
							<input type="radio" name="jenkel"
								<?php 
									if($this->input->post('jenkel') ? $this->input->post('jenkel') : $data_masyarakat['jenkel'] == "P") { 
											echo "checked"; 
									}
								?> value="P"> Perempuan
						</div> <br>
					</div>
					<div class="col-md-6">
						<label for="tempat_lhr" class="control-label">Status Keluarga</label>
						<div class="form-group">
							<input type="text" name="status_keluarga" value="<?php echo ($this->input->post('status_keluarga') ? $this->input->post('status_keluarga') : $data_masyarakat['status_keluarga']); ?>" class="form-control" id="status_keluarga" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="tempat_lhr" class="control-label">Status Perkawinan</label>
						<div class="form-group">
							<input type="text" name="status_perkawinan" value="<?php echo ($this->input->post('status_perkawinan') ? $this->input->post('status_perkawinan') : $data_masyarakat['status_perkawinan']); ?>" class="form-control" id="status_perkawinan" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="tempat_lhr" class="control-label">Nama Ortu</label>
						<div class="form-group">
							<input type="text" name="nama_ortu" value="<?php echo ($this->input->post('nama_ortu') ? $this->input->post('nama_ortu') : $data_masyarakat['nama_ortu']); ?>" class="form-control" id="nama_ortu" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="agama" class="control-label">Agama</label>
						<div class="form-group">
							<select name="agama" class="form-control">
								<option value="">select</option>
								<?php 
								$agama_values = array(
									'Islam'=>'Islam',
									'Kristen'=>'Kristen',
									'Protestan' => 'Protestan',
									'Hindu' => 'Hindu',
									'Buddha' => 'Buddha',
									'Kong Hu Chu' => 'Kong Hu Chu'
								);

								foreach($agama_values as $value => $display_text)
								{
									$selected = ($value == $data_masyarakat['agama']) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="pekerjaan" class="control-label">Pekerjaan</label>
						<div class="form-group">
							<input type="text" name="pekerjaan" value="<?php echo ($this->input->post('pekerjaan') ? $this->input->post('pekerjaan') : $data_masyarakat['pekerjaan']); ?>" class="form-control" id="pekerjaan" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="alamat" class="control-label">Alamat</label>
						<div class="form-group">
							<textarea name="alamat" class="form-control" id="alamat"><?php echo ($this->input->post('alamat') ? $this->input->post('alamat') : $data_masyarakat['alamat']); ?></textarea>
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Save
				</button>
	        </div>				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>