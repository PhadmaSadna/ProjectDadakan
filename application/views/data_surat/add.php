<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Data Surat Add</h3>
            </div>
            <?php echo form_open('data_surat/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="jenis" class="control-label">Jenis</label>
						<div class="form-group">
							<input type="text" name="jenis" value="<?php echo $this->input->post('jenis'); ?>" class="form-control" id="jenis" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="keterangan" class="control-label">Keterangan</label>
						<div class="form-group">
							<textarea name="keterangan" class="form-control" id="keterangan"><?php echo $this->input->post('keterangan'); ?></textarea>
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