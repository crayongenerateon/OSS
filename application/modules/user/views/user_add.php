<?php
//$this->load->view('admin/tinymce_init');
 if (!isset($user)){
    if (isset($cari)){
        $inputIdValue = $cari['employe_id'];
        $inputNRPValue = $cari['employe_nrp'];
        $inputEmpNameValue = $cari['employe_name'];
        $inputDeptValue = $cari['departement_name'];
    }else{
        $inputIdValue =  set_value('employe_id');
        $inputNRPValue = set_value('employe_nrp');
        $inputEmpNameValue = set_value('employe_name');
    }
    
    $inputNameValue = set_value('user_name');
    $inputEmailValue = set_value('user_email');
    $inputRoleITserviceValue = set_value('role_itservice');
    $inputRoleAdminValue = set_value('role_master');
    $inputRoleLogValue = set_value('role_log');
    $inputRoleUseradminValue = set_value('role_useradmin');
    $inputRoleIventoryitValue = set_value('role_iventoryit');
    $inputRoleEmployeValue = set_value('role_employe');

}else {
    $id = $user['user_id'];
    $inputIdValue =  $user['employe_id'];
    $inputNameValue = $user['user_name'];
    $inputNamaLengkapValue = $user['employe_name'];
    $inputNRPValue = $user['employe_nrp'];
    $inputDeptValue = $user['departement_name'];
    $inputEmailValue = $user['user_email'];
    $inputRoleITserviceValue = $user['role_itservice'];
    $inputRoleAdminValue = $user['role_master'];
    $inputRoleLogValue = $user['role_log'];
    $inputRoleUseradminValue = $user['role_useradmin'];
    $inputRoleIventoryitValue = $user['role_iventoryit'];
    $inputRoleEmployeValue = $user['role_employe'];
    
}
?>
<section class="content">
<div class="row"> 
<div class="col-sm-10 col-md-12 main">
    <?php echo isset($alert) ? ' ' . $alert : null; ?>
    <?php echo validation_errors(); ?>

    <div class="row page-header">
        <div class="col-sm-9 col-md-6">
            <h3 class="page-title" ><?php echo $operation; ?> Pengguna</h3>
        </div>

    </div>

    <div class="row">
        <div class="col-sm-9 col-md-9">
        
    
    <?php echo form_open_multipart(current_url()); ?>
        <?php if (!isset($user)): ?>
        <div class="form-group">
            <div class="col-sm-3">
            <label >NRP *</label>
            </div>
            <div class="col-sm-9">
            <input type="text" name="pencarian" placeholder="NRP" class="form-control" value="<?php echo $inputNRPValue; ?>" >
            <input type="submit" name="q" value="Cari">
            </div>
            
        </div>
        <?php endif; ?>

        <?php if (isset($cari)): ?>
            <input type="hidden" name="employe_id" value="<?php echo $inputIdValue ?>" />
            <div class="form-group">
                <label class="col-sm-3 control-label" >Nama Lengkap *</label>
                <div class="col-sm-9">
                    <input type="text"  readonly placeholder="Nama Lengkap" class="form-control" value="<?php echo $inputEmpNameValue; ?>">
                </div>

                <label class="col-sm-3 control-label">Departement *</label>
                <div class="col-sm-9">
                    <input type="text"  readonly placeholder="Departement" class="form-control" value="<?php echo $inputDeptValue; ?>">
                </div>
            </div><br>
        <?php endif; ?>
 
    
        <?php if (isset($user)): ?>
            <input type="hidden" name="user_id" value="<?php echo $user['user_id'] ?>" />
        <?php endif; ?>


            <?php if (isset($user)): ?>
            <div class="form-group">
                <label class="col-sm-3 control-label" >NRP *</label>
                <div class="col-sm-9">
                    <input type="text" <?php echo (isset($user))? 'readonly' : '' ?> placeholder="NRP" class="form-control" value="<?php echo $inputNRPValue; ?>"><br>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label" >Nama Lengkap *</label>
                <div class="col-sm-9">
                    <input type="text" name="user_full_name" <?php echo (isset($user))? 'readonly' : '' ?> placeholder="Nama Lengkap" class="form-control" value="<?php echo $inputNamaLengkapValue; ?>"><br>
                </div>
            </div>
            
            
            <div class="form-group">
                <label class="col-sm-3 control-label" >Departement *</label>
                <div class="col-sm-9">
                    <input type="text" <?php echo (isset($user))? 'readonly' : '' ?> class="form-control" value="<?php echo $inputDeptValue; ?>"><br>
                </div>
            </div>
            <?php endif; ?>


            <div class="form-group">
                <label class="col-sm-3 control-label" >Username *</label>
                <div class="col-sm-9">
                    <input name="user_name" type="text" <?php echo (isset($user))? 'readonly' : '' ?> placeholder="Username" class="form-control" value="<?php echo $inputNameValue; ?>"><br>
                </div>
            </div>

            <?php if (!isset($user)): ?>
            <div class="form-group">
                <label class="col-sm-3 control-label" >Password *</label>
                <div class="col-sm-3">
                    <input type="password" placeholder="Password" name="user_password" class="form-control">
                </div>

                <label class="col-sm-3 control-label" >Konfirmasi Password *</label>
                <div class="col-sm-3">
                    <input type="password" placeholder="Konfirmasi Password" name="passconf" class="form-control">
                </div>

                <div class="col-sm-3 control-label">  </div>
                <div class="col-sm-9 control-label">
                    <p style="color:#9C9C9C;margin-top: 5px"><i>Password minimal 6 karakter</i></p>
                </div>
                
            </div><br>
            <?php endif; ?>
            
            <div class="form-group">
                <label class="col-sm-3 control-label" >Email *</label>
                <div class="col-sm-9">
                    <input type="text" name="user_email" placeholder="Email Pengguna" class="form-control" value="<?php echo $inputEmailValue; ?>">
                </div>
                <div class="col-sm-3 control-label">  </div>
                <div class="col-sm-9 control-label">
                    <p style="color:#9C9C9C;margin-top: 5px">
                        <i>Contoh : example@yahoo.com / example@example.com</i>
                    </p>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label" >Pilih Role : *</label>
                </br>
              <div class="col-sm-9">

                <div class="panel box box-primary">
                    <div class="box-header with-border">
                        <h4 class="box-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                            IT Role :
                          </a>
                        </h4>
                    </div>
                  <div id="collapseOne" class="panel-collapse collapse in">
                    <div class="box-body">

                        <input type="hidden" name="role_itservice" value="0" >
                        <input type="checkbox"  name="role_itservice" value="1"  
                            <?php if($inputRoleITserviceValue==1){echo "checked";}  ?> /> IT Service &nbsp;&nbsp;

                        <input type="hidden" name="role_iventoryit" value="0" >
                        <input type="checkbox"  name="role_iventoryit" value="1"  
                            <?php if($inputRoleIventoryitValue==1){echo "checked";}  ?> /> Iventory IT </br>

                        <input type="hidden" name="role_log" value="0" >
                        <input type="checkbox"  name="role_log" value="1" 
                            <?php if($inputRoleLogValue==1){echo "checked";}  ?> /> Log</br>
                     
                    </div>
                   </div>
                </div>

                <div class="panel box box-primary">
                    <input type="hidden" name="role_master" value="0" >
                    <input type="checkbox"  name="role_master" value="1"   <?php if($inputRoleAdminValue==1){echo "checked";}  ?> /> Master</br>
                    
                     <input type="hidden" name="role_useradmin" value="0" >
                    <input type="checkbox"  name="role_useradmin" value="1"   <?php if($inputRoleUseradminValue==1){echo "checked";}  ?> /> User Admin</br>

                    <input type="hidden" name="role_employe" value="0" >
                    <input type="checkbox"  name="role_employe" value="1"  <?php if($inputRoleEmployeValue==1){echo "checked";}  ?> /> Employe</br>
                </div>

              </div>
            </div>
            
            
            <br>
            <p style="color:#9C9C9C;margin-top: 5px"><i>*) Field Wajib Diisi</i></p>
        </div>
        </div>
        <?php echo form_close(); ?>
        <div class="col-sm-9 col-md-3">
            <div class="form-group">
                <button name="action" type="submit" value="save" class="btn btn-success"><i class="ion-checkmark"></i> Simpan</button>
                <a href="<?php echo site_url('user/user_admin'); ?>" class="btn btn-info"><i class="ion-arrow-left-a"></i> Batal</a>
                <?php if (isset($user)): ?>
                    
                    <?php if (isset($user)) : ?>
                        <a href=""  class="btn btn-danger" data-toggle="modal" data-target="#myModal<?php echo $user['user_id']; ?>"><i class="ion-trash-a"></i> Disable</a>
                    <?php endif; ?>
                    
                    <?php if ($this->session->userdata('user_id_admin') == $id) {
                        ?>
                        <a href="<?php echo site_url('user/user_admin/cpw') ?>" class="btn btn-primary" style="margin-top: 3px"> Ubah password</a>
                    <?php } elseif ($this->session->userdata('user_id_admin') != $id) { ?>
                        <a style="margin-top: 3px" class="btn btn-primary" href="<?php echo site_url('user/user_admin/rpw/' . $user['user_id']); ?>" > Reset Password</a>
                    <?php } ?>
                <?php endif; ?>
            </div>
        </div>

        <div id="myModal<?php echo $user['user_id']; ?>" class="modal fade" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Disable</h4>
              </div>
              <div class="modal-body">
                <p>Are you sure want to disable <b><?php echo $user['user_name'] ?></b>  ? </p>
              </div>
              <?php echo form_open('user/user_admin/delete/' . $user['user_id']); ?>
              <div class="modal-footer">
                <a>
                    <button style="float: right;margin-left: 10px" type="button" class="btn btn-default" data-dismiss="modal"> No
                    </button>
                </a>
                  <input type="hidden" name="del_id" value="<?php echo $user['user_id'] ?>" />
                  <input type="hidden" name="del_name" value="<?php echo $user['user_name'] ?>" />
                <button type="submit" class="btn btn-primary">Yes</button>
              </div>
              <?php echo form_close(); ?>
            </div>

          </div>
        </div>

    </div>
    
</div>

<br>





</div>
</section>