
        

<?php
if (isset($religion)) {
    $inputId = $religion['religion_code'];
    $inputName = $religion['religion_name'];
} else {
    $inputId = set_value('religion_code');
    $inputName = set_value('religion_name');
}
?>
<div class="col-sm-9 col-md-10 main">
    <?php if (!isset($religion)) echo validation_errors(); ?>
    <?php echo form_open_multipart(current_url()); ?>
    <div class="row page-header">
        <div class="col-sm-9 col-md-6">
            <h3 class="page-title"><?php echo $operation; ?> Agama</h3>
        </div>

    </div>

    <div class="row">
        <div class="col-sm-9 col-md-9">
            <?php if (isset($religion)): ?>
                <input type="hidden" name="religion_id" value="<?php echo $religion['religion_id']; ?>" />
            <?php endif; ?>
            <label >Kode *</label>
            <input name="religion_code" placeholder="Kode" type="text" class="form-control" value="<?php echo $inputId; ?>"><br>
            
            <label >Nama *</label>
            <input name="religion_name" placeholder="Nama" type="text" class="form-control" value="<?php echo $inputName; ?>"><br>
            <p style="color:#9C9C9C;margin-top: 5px"><i>*) Field Wajib Diisi</i></p>
        </div>
        <div class="col-sm-9 col-md-3">
            <div class="form-group">
                <button name="action" type="submit" value="save" class="btn btn-success"><i class="ion-checkmark"></i> Simpan</button>
                <a href="<?php echo site_url('master/religion'); ?>" class="btn btn-info"><i class="ion-arrow-left-a"></i> Batal</a>
                <?php if (isset($religion)): ?>
                    <a href="<?php echo site_url('master/religion/delete/' . $religion['religion_id']); ?>" class="btn btn-danger" ><i class="ion-trash-a"></i> Hapus</a>
                <?php endif; ?>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirm-del">
                Delete
              </button>
            </div>
        </div>
    </div>
</div>

<?php echo form_close(); ?>

    <!-- Delete Confirmation -->
    <div class="modal fade" id="confirm-del">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"><b>Konfirmasi Penghapusan</b></h4>
                </div>
                <div class="modal-body">
                    <p>Data yang dipilih akan dihapus&hellip;</p><?php echo $this->session->flashdata('delete'); ?>

                </div>
                <?php echo form_open('master/religion/delete/' . $religion['religion_id']); ?>
                <div class="modal-footer">
                    <a><button style="float: right;margin-left: 10px" type="button" class="btn btn-default" data-dismiss="modal">Tidak</button></a>
                    <input type="hidden" name="del_id" value="<?php echo $religion['religion_id'] ?>" />
                    <input type="hidden" name="del_name" value="<?php echo $religion['religion_name'] ?>" />
                    <button type="submit" class="btn btn-primary">Ya</button>
                </div>
                <?php echo form_close(); ?>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
  <?php if ($this->session->flashdata('delete')) { ?>
        <script type="text/javascript">
            $(window).load(function() {
                $('#confirm-del').modal('show');
            });
        </script>
    <?php }
    ?>
    
<?php if (isset($religion)): ?>
<?php endif; ?>

        