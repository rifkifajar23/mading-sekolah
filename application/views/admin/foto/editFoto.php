<div class="col-md-6 col-md-offset-3 marginTop60px">
	<h3 class="judulAbuAbu alignCenter">Edit Foto</h3>
	<hr>
	<?php if($foto??false) : ?>
	<?= form_open('adminGaleri/editFoto',['class'=>'form', "enctype" => "multipart/form-data"]); ?>
		<input type="hidden" name="foto_id" value="<?= $foto->foto_id ?? '' ?>">

		<?= $errors['url_foto']??''; ?>
		<input type="file" name="url_foto" class="form-control">


		<?= $errors['keterangan']??''; ?>
		<textarea placeholder="keterangan" name="keterangan" class="form-control"><?= $foto->keterangan??''; ?></textarea>

		<button type="submit" name="submit" class="btn btn-success"><span class="glyphicon glyphicon-save"></span> Simpan</button>
		<a href="<?= base_url('adminGaleri/foto') ?>" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></a>
	</form>
	<?php endif; ?>
</div>