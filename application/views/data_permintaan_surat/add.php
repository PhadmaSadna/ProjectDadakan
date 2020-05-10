<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Data Permintaan Surat Add</h3>
            </div>
            <?php echo form_open('data_permintaan_surat/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="keperluan" class="control-label">Keperluan</label>
						<div class="form-group">
							<?php echo form_dropdown('keperluan', $keperluan, set_value('keperluan'), 'class="form-control" required' ); ?>
						</div>
					</div>
					<div class="col-md-6">
						<label for="no_surat" class="control-label">No Surat</label>
						<div class="form-group">
							<input type="text" name="no_surat" value="<?php echo $this->input->post('no_surat'); ?>" class="form-control" id="no_surat" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="tgl_buat" class="control-label">Tgl Buat</label>
						<div class="form-group">
							<input type="date" name="tgl_buat" value="<?php echo $this->input->post('tgl_buat'); ?>" class="form-control" id="tgl_buat" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="nik_pembuat" class="control-label">Nik Pembuat</label>
						<div class="form-group">
							<?php echo form_dropdown('nik_pembuat', $nik_pembuat, set_value('nik_pembuat'), 'class="form-control" required' ); ?>
						</div>
					</div>
					<div class="col-md-6">
						<label for="ket_1" class="control-label">Isi Surat Paragraf 1</label>
						<div class="form-group">
							<div class="form-group">
								<textarea name="ket_1" class="form-control" id="ket_1"><?php echo $this->input->post('ket_1'); ?></textarea>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<label for="nik_pembuat" class="control-label">Isi Surat Paragraf 2</label>
						<div class="form-group">
							<div class="form-group">
								<textarea name="ket_2" class="form-control" id="ket_2"><?php echo $this->input->post('ket_2'); ?></textarea>
							</div>
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