<script src="<?php echo media_url('custom/js/modalpopup.js'); ?>"></script>
<link href="<?php echo media_url('custom/css/modalpopup.css'); ?>" rel="stylesheet">

<link href="<?php echo media_url('custom/ccss/jasny-bootstrap.min.css'); ?>" rel="stylesheet" media="screen">
<script src="<?php echo media_url('custom/cjs/jasny-bootstrap.min.js'); ?>"></script>
<?php $this->load->view('admin/tinymce_init'); ?>
<?php
if (isset($iventoryit)) {
    $id = $iventoryit['iventoryit_id'];
    $inputHostnameValue = $iventoryit['iventoryit_hostname'];
    $inputIPValue = $iventoryit['iventoryit_ip'];
    $inputTypeValue = $iventoryit['iventoryit_types_id'];
    $inputEmployeValue = $iventoryit['employe_employes_id'];
    $inputStatusValue = $iventoryit['iventoryit_statuss_id'];
    $inputOSValue = $iventoryit['iventoryit_oss_id'];
    $inputOfficeAppValue = $iventoryit['iventoryit_officeapps_id'];
    $inputKetValue = $iventoryit['iventoryit_ket'];
} else {
    $inputHostnameValue = set_value('iventoryit_hostname');
    $inputIPValue = set_value('iventoryit_ip');
    $inputTypeValue = set_value('iventoryit_types_id');
    $inputEmployeValue = set_value('employe_employes_id');
    $inputStatusValue = set_value('iventoryit_statuss_id');
    $inputOSValue = set_value('iventoryit_oss_id');
    $inputOfficeAppValue = set_value('iventoryit_officeapps_id');
    $inputKetValue = set_value('iventoryit_ket');
}
?>

<section class="content">
 <div class="row">              
<div class="col-sm-10 col-md-12 main">
    <?php echo isset($alert) ? ' ' . $alert : null; ?>
    <?php echo validation_errors(); ?>

    <div class="row page-header">
        <div class="col-sm-9 col-md-6">
            <h3 class="page-title" ><?php echo $operation; ?> Iventory IT</h3>
        </div>

    </div>

    <?php echo form_open_multipart(current_url()); ?>
    <div class="row date" >
        <div class="col-sm-9 col-md-10">

            <?php if (isset($iventoryit)) : ?>
                <input type="hidden" name="iventoryit_id" value="<?php echo $iventoryit['iventoryit_id'] ?>" />
            <?php endif; ?>
            <div class="form-group">
                <label class="col-sm-3 control-label">Hostname *</label>
                <div class="col-sm-9">
                    <input name="iventoryit_hostname" type="text" placeholder="Hostname" class="form-control" value="<?php echo $inputHostnameValue; ?>"><br>
                </div>
            </div>

             <div class="form-group">
                <label class="col-sm-3 control-label" >IP Address *</label>
                <div class="col-sm-9">
                    <input type="text" name="iventoryit_ip" placeholder="IP Address" class="form-control" value="<?php echo $inputIPValue; ?>"><br>
                </div>
            </div>

            <div class="form-group">                
                <label class="col-sm-3 control-label" >Employe *</label>
                <div class="col-sm-9">
                <select name="employe_employes_id" class="form-control">
                    <option value="">-- Pilih Employe --</option>
                    <?php
                    if (!empty($employe)) {
                        foreach ($employe as $row) :
                            $select = ($row['employe_id'] == $inputEmployeValue) ? 'selected' : NULL;
                        ?>

                            <option value="<?php echo $row['employe_id']; ?>" <?php echo $select; ?>> <?php echo $row['employe_name']; ?></option>

                            <?php
                            endforeach;
                        }
                        ?>
                </select><br>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label"  >Type *</label>
                <div class="col-sm-9">
                <div class="input-group margin">
                <select name="iventoryit_types_id" class="form-control">
                    <option value="">-- Pilih Type --</option>
                    <?php
                    if (!empty($iventoryit_type)) {
                        foreach ($iventoryit_type as $row) :
                            $select = ($row['iventoryit_type_id'] == $inputTypeValue) ? 'selected' : NULL;
                        ?>

                            <option value="<?php echo $row['iventoryit_type_id']; ?>" <?php echo $select; ?>> <?php echo $row['iventoryit_type_name']; ?></option>

                            <?php
                            endforeach;
                        }
                        ?>              
                </select>
                <span class="input-group-btn">
                      <button type="button" data-toggle="modal" data-target="#mType" class="btn btn-info btn-flat">Add</button>
                </span><br>
                </div>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label" >Operating System *</label>
                <div class="col-sm-9">
                <div class="input-group margin">
                <select name="iventoryit_oss_id" class="form-control">
                    <option value="">-- Pilih OS --</option>
                    <?php
                    if (!empty($iventoryit_os)) {
                        foreach ($iventoryit_os as $row) :
                            $select = ($row['iventoryit_os_id'] == $inputOSValue) ? 'selected' : NULL;
                        ?>

                            <option value="<?php echo $row['iventoryit_os_id']; ?>" <?php echo $select; ?>> <?php echo $row['iventoryit_os_name']; ?></option>

                            <?php
                            endforeach;
                        }
                        ?>
                </select>
                <span class="input-group-btn">
                      <button type="button" data-toggle="modal" data-target="#mOs" class="btn btn-info btn-flat">Add</button>
                </span><br>
                </div>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label" >Office App *</label>
                <div class="col-sm-9">
                <div class="input-group margin">
                <select name="iventoryit_officeapps_id" class="form-control">
                    <option value="">-- Pilih Office App --</option>
                    <?php
                    if (!empty($iventoryit_officeapp)) {
                        foreach ($iventoryit_officeapp as $row) :
                            $select = ($row['iventoryit_officeapp_id'] == $inputOfficeAppValue) ? 'selected' : NULL;
                        ?>

                            <option value="<?php echo $row['iventoryit_officeapp_id']; ?>" <?php echo $select; ?>> <?php echo $row['iventoryit_officeapp_name']; ?></option>

                            <?php
                            endforeach;
                        }
                        ?>
                </select>
                <span class="input-group-btn">
                      <button type="button" data-toggle="modal" data-target="#mOApp" class="btn btn-info btn-flat">Add</button>
                </span><br>
                </div>
                </div>
            </div>


            <div class="form-group">
                <label class="col-sm-3 control-label" >Status *</label>
                <div class="col-sm-9">
                <div class="input-group margin">
                <select name="iventoryit_statuss_id" class="form-control">
                    <option value="">-- Pilih Satus --</option>
                    <?php
                    if (!empty($iventoryit_status)) {
                        foreach ($iventoryit_status as $row) :
                            $select = ($row['iventoryit_status_id'] == $inputStatusValue) ? 'selected' : NULL;
                        ?>

                            <option value="<?php echo $row['iventoryit_status_id']; ?>" <?php echo $select; ?>> <?php echo $row['iventoryit_status_name']; ?></option>

                            <?php
                            endforeach;
                        }
                        ?>
                </select>
                <span class="input-group-btn">
                      <button type="button" data-toggle="modal" data-target="#mStatus" class="btn btn-info btn-flat">Add</button>
                </span><br>
                </div>
                </div>
            </div>

            <div class="form-group">
                <label  class="col-sm-3 control-label">Keterangan *</label>
                <div class="col-sm-9">
                <textarea name="iventoryit_ket" class="form-control" rows="10" placeholder="keterangan tambahan"><?php echo $inputKetValue; ?></textarea><br>
                </div>
            </div>
            <div class="form-group">
                <p style="color:#9C9C9C;margin-top: 5px"><i>*) Field Wajib Diisi</i></p>
            </div>
        </div>
        <div class="col-sm-9 col-md-1">
            <div class="form-group">
                <button name="action" type="submit" value="save" class="btn btn-success"><i class="ion-checkmark"></i> Simpan</button>
                <a href="<?php echo site_url('iventory/iventoryit'); ?>" class="btn btn-info"><i class="ion-arrow-left-a"></i> Batal</a>
                <?php if (isset($iventoryit)) : ?>
                  <a href=""  class="btn btn-danger" data-toggle="modal" data-target="#myModal<?php echo $iventoryit['iventoryit_id']; ?>"><i class="ion-trash-a"></i>Delete</a>
                <?php endif; ?>

            </div>
        </div>
        <?php echo form_close(); ?>
        <?php if (isset($iventoryit)) : ?>
        <div id="myModal<?php echo $iventoryit['iventoryit_id']; ?>" class="modal fade" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Delete</h4>
              </div>
              <div class="modal-body">
                <p>Are you sure want to delete <b><?php echo $iventoryit['iventoryit_hostname'] ?></b>  ? </p>
              </div>
              <?php echo form_open('iventory/iventoryit/delete/' . $iventoryit['iventoryit_id']); ?>
              <div class="modal-footer">
                <a>
                    <button style="float: right;margin-left: 10px" type="button" class="btn btn-default" data-dismiss="modal"> No
                    </button>
                </a>
                  <input type="hidden" name="del_id" value="<?php echo $iventoryit['iventoryit_id'] ?>" />
                  <input type="hidden" name="del_name" value="<?php echo $iventoryit['iventoryit_hostname'] ?>" />
                <button type="submit" class="btn btn-primary">Yes</button>
              </div>
              <?php echo form_close(); ?>
            </div>

          </div>
        </div>
        <?php endif; ?>

    </div>
    
</div>




<!--Type Modal -->
<div class="modal fade" id="mType" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Tambah Type</h4>
      </div>
      <div class="modal-body">
        <?php echo form_open('iventory/iventoryit/addType'); ?>
        <div class="form-group">
                <label class="col-sm-3 control-label">Type Name *</label>
                <div class="col-sm-9">
                    <input name="iventoryit_type_name" type="text" placeholder="Type" class="form-control"><br>
                </div>
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
        <?php echo form_close(); ?>
      </div>
    </div>
  </div>
</div>

<!--OS Modal -->
<div class="modal fade" id="mOs" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Tambah OS</h4>
      </div>
      <div class="modal-body">
        <?php echo form_open('iventory/iventoryit/addOs'); ?>
        <div class="form-group">
                <label class="col-sm-3 control-label">OS Name *</label>
                <div class="col-sm-9">
                    <input name="iventoryit_os_name" type="text" placeholder="Operating System" class="form-control"><br>
                </div>
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
        <?php echo form_close(); ?>
      </div>
    </div>
  </div>
</div>

<!--Office App Modal -->
<div class="modal fade" id="mOApp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Tambah Office Application</h4>
      </div>
      <div class="modal-body">
        <?php echo form_open('iventory/iventoryit/addOApp'); ?>
        <div class="form-group">
                <label class="col-sm-3 control-label">Office Application Name *</label>
                <div class="col-sm-9">
                    <input name="iventoryit_officeapp_name" type="text" placeholder="Office Application" class="form-control"><br>
                </div>
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
        <?php echo form_close(); ?>
      </div>
    </div>
  </div>
</div>

<!--Status Modal -->
<div class="modal fade" id="mStatus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Tambah Status</h4>
      </div>
      <div class="modal-body">
        <?php echo form_open('iventory/iventoryit/addStatus'); ?>
        <div class="form-group">
                <label class="col-sm-3 control-label">Status Name *</label>
                <div class="col-sm-9">
                    <input name="iventoryit_status_name" type="text" placeholder="Status" class="form-control"><br>
                </div>
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
        <?php echo form_close(); ?>
      </div>
    </div>
  </div>
</div>

</div>
</section>
