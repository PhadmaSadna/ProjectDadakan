<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Data Permintaan Surat Edit</h3>
            </div>
			<?php echo form_open('data_permintaan_surat/edit/'.$data_permintaan_surat['id_permintaan']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="keperluan" class="control-label">Keperluan</label>
						<div class="form-group">
							<?php echo form_dropdown('keperluan', $keperluan, set_value( 'keperluan', $data_permintaan_surat['keperluan'] ), 'class="form-control"' ); ?>
						</div>
					</div>
					<div class="col-md-6">
						<label for="no_surat" class="control-label">No Surat</label>
						<div class="form-group">
							<input type="text" name="no_surat" value="<?php echo ($this->input->post('no_surat') ? $this->input->post('no_surat') : $data_permintaan_surat['no_surat']); ?>" class="form-control" id="no_surat" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="tgl_buat" class="control-label">Tgl Buat</label>
						<div class="form-group">
							<input type="date" name="tgl_buat" value="<?php echo ($this->input->post('tgl_buat') ? $this->input->post('tgl_buat') : $data_permintaan_surat['tgl_buat']); ?>" class="form-control" id="tgl_buat" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="nik_pembuat" class="control-label">Nik Pembuat</label>
						<div class="form-group">
							<?php echo form_dropdown('nik_pembuat', $nik_pembuat, set_value( 'nik_pembuat', $data_permintaan_surat['nik_pembuat'] ), 'class="form-control"' ); ?>
						</div>
					</div>
					<div class="col-md-6">
						<label for="ket_1" class="control-label">Keterangan Paragraf 1 Surat</label>
						<div class="form-group">
							<textarea name="ket_1" class="form-control" id="ket_1"><?php echo ($this->input->post('ket_1') ? $this->input->post('ket_1') : $data_permintaan_surat['ket_1']); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="ket_2" class="control-label">Keterangan Paragraf 2 Surat</label>
						<div class="form-group">
							<textarea name="ket_2" class="form-control" id="ket_2"><?php echo ($this->input->post('ket_2') ? $this->input->post('ket_2') : $data_permintaan_surat['ket_2']); ?></textarea>
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