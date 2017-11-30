<script src="<?php echo base_url('/media/custom/js/imgLiquid-min.js'); ?>"></script>
<script src="<?php echo base_url('/media/custom/js/jquery.Jcrop.min.js'); ?>"></script>
<script src="<?php echo base_url('/media/custom/js/moment.min.js'); ?>"></script>
<script src="<?php echo base_url('/media/custom/js/mm.js'); ?>"></script>



    <!--End Javascript-->
    <script type="text/javascript">
        var BASEURL = '<?php echo base_url() ?>';
        $(function() {
            $(".imgLiquidFill").imgLiquid({
                fill: true,
                horizontalAlign: "center",
                verticalAlign: "center"
            });
        });
    </script>


<link rel="stylesheet" type="text/css" href="<?php echo base_url('media/custom/css/angular-multi-select.css') ?>">
<script type="text/javascript" src="<?php echo base_url('media/custom/js/angular-multi-select.js') ?>"></script>

<!-- <script type="text/javascript">
    var token_name = "<?php echo $this->security->get_csrf_token_name() ?>";
    var csrf_hash = "<?php echo $this->security->get_csrf_hash() ?>";
</script> -->
<script src="<?php echo media_url('custom/js/modalpopup.js'); ?>"></script>
<link href="<?php echo media_url('custom/css/modalpopup.css'); ?>" rel="stylesheet">
<link href="<?php echo media_url('custom/css/jasny-bootstrap.min.css'); ?>" rel="stylesheet" media="screen">
<script src="<?php echo media_url('custom/js/jasny-bootstrap.min.js'); ?>"></script>

<?php $this->load->view('admin/tinymce_init'); ?>

<?php
if (isset($employe)) {
    $id = $employe['employe_id'];
    $nrp = $employe['employe_nrp'];
    $inputNameValue = $employe['employe_name'];
    $inputBornPlaceValue = $employe['employe_born_place'];
    $inputBornDateValue = $employe['employe_born_date'];
    $inputCitizenValue = $employe['employe_citizen'];
    $inputAddressValue = $employe['employe_address'];
    $inputAddress2Value = $employe['employe_address2'];
    $inputCityValue = $employe['employe_city'];
    $inputNsValue = $employe['employe_ns'];
    $inputSuperiorValue = $employe['employe_superior'];
    $inputPostalCodeValue = $employe['employe_postal_code'];
    $inputStartWorkDateValue = $employe['employe_start_work_date'];
    $inputPermanentDateValue = $employe['employe_permanent_date'];
    $inputEmailValue = $employe['employe_email'];
    $inputPhoneValue = $employe['employe_phone'];

    $inputKelaminValue = $employe['kelamin_kelamin_id'];
    $inputReligionValue = $employe['religion_religion_id'];
    $inputDivisionValue = $employe['division_division_id'];
    $inputDepartementValue = $employe['departement_departement_id'];
    $inputJabatanValue = $employe['jabatan_jabatan_id'];
    $inputPendidikanValue = $employe['pendidikan_pendidikan_id'];
    $inputStatusValue = $employe['status_status_id'];
    $inputKawinValue = $employe['kawin_kawin_id'];
} else {
    $nrp = set_value('employe_nrp');
    $inputNameValue = set_value('employe_name');
    $inputBornPlaceValue = set_value('employe_born_place');
    $inputBornDateValue = date('Y-m-d');
    $inputCitizenValue = set_value('employe_citizen');
    $inputAddressValue = set_value('employe_address');
    $inputAddress2Value = set_value('employe_address2');
    $inputCityValue = set_value('employe_city');
    $inputNsValue = set_value('employe_ns');
    $inputSuperiorValue = set_value('employe_superior');
    $inputPostalCodeValue = set_value('employe_postal_code');
    $inputStartWorkDateValue = date('Y-m-d');
    $inputPermanentDateValue = date('Y-m-d');
    $inputEmailValue = set_value('employe_email');
    $inputPhoneValue = set_value('employe_phone');

    $inputKelaminValue = set_value('kelamin_kelamin_id');
    $inputReligionValue = set_value('religion_religion_id');
    $inputDivisionValue = set_value('division_division_id');
    $inputDepartementValue = set_value('departement_departement_id');
    $inputJabatanValue = set_value('jabatan_jabatan_id');
    $inputPendidikanValue = set_value('pendidikan_pendidikan_id');
    $inputStatusValue = set_value('status_status_id');
    $inputKawinValue = set_value('kawin_kawin_id');
}
?>

<style>
.widget-user .widget-user-image>img {
    width: 160px;
    height: auto;
    border: 3px solid #fff;
}
.img-circle {
    border-radius: 80%;
}

img {
    vertical-align: middle;
}
</style>

<section class="content">
 <div class="row">              
<div class="col-sm-10 col-md-12 main">
    <?php echo isset($alert) ? ' ' . $alert : null; ?>
    <?php echo validation_errors(); ?>

    

    <?php echo form_open_multipart(current_url()); ?>

    <!-- /.col -->
        <div class="col-md-12">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-aqua-active">
              <h3 class="widget-user-username"><?php echo $inputNameValue; ?></h3>
              <h5 class="widget-user-desc">
                <?php
                if (!empty($employe)) {

                    ?>
                <?php
                echo $employe['jabatan_name'];
            }
            ?>

              </h5>
            </div>
            <div class="widget-user-image">
              
              <?php if (!empty($employe['employe_images'])) { ?>
                    <img src="<?php echo upload_url($employe['employe_images']) ?>"   class="img-circle"  alt="User Avatar">
                    <?php 
                } else { ?>
                    <img src="<?php echo base_url('media/custom/image/missing-image.png') ?>" height="160" width="160" class="img-circle"  alt="User Avatar">
                    <?php 
                } ?>
            </div>
            <div class="box-footer">
              <div class="row">
                  
              <div class="row page-header">
                <div class="col-sm-9 col-md-6">
                    <h3 class="page-title" ><b><?php echo $operation; ?> Employe</b></h3>
                </div>
            </div>

                <div class="col-sm-9 col-md-10">
                
            <?php if (isset($employe)) : ?>
                <input type="hidden" name="employe_id" value="<?php echo $employe['employe_id'] ?>" />
            <?php endif; ?>
            <div class="form-group">
                <label class="col-sm-3 control-label">NRP *</label>
                <div class="col-sm-9">
                    <input name="employe_nrp" type="text" <?php echo (isset($employe)) ? 'readonly' : '' ?> placeholder="NRP" class="form-control" value="<?php echo $nrp; ?>">
                </div>
            </div>

             <div class="form-group">
                <label class="col-sm-3 control-label" >Nama Lengkap *</label>
                <div class="col-sm-9">
                    <input type="text" name="employe_name" placeholder="Nama Lengkap" class="form-control" value="<?php echo $inputNameValue; ?>"><br>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label">Tempat Lahir *</label>
                <div class="col-sm-4">
                <input type="text" name="employe_born_place" placeholder="Tempat Lahir" class="form-control" value="<?php echo $inputBornPlaceValue; ?>">
                </div>
            
                <label class="col-sm-2 control-label">Tanggal Lahir *</label>
                <div class="col-sm-3">
                <input type="text" name="employe_born_date" placeholder="Tanggal Lahir"  id="datepicker" class="form-control pull-right" value="<?php echo pretty_date($inputBornDateValue, 'Y/m/d', FALSE); ?>"><br>
                </div>
            </div><br>

            <div class="form-group">
                <label class="col-sm-3 control-label">Kewarganegaraan </label>
                <div class="col-sm-9">
                 <input type="text" name="employe_citizen" placeholder="Kewarganegaraan" class="form-control" value="<?php echo $inputCitizenValue; ?>"><br>
                 </div>
            </div>

            <div class="form-group">
                <label  class="col-sm-3 control-label">Alamat 1 *</label>
                <div class="col-sm-9">
                <textarea name="employe_address" class="form-control" rows="10" placeholder="Alamat 1"><?php echo $inputAddressValue; ?></textarea><br>
                </div>
            </div>

             <div class="form-group">
                <label  class="col-sm-3 control-label">Alamat 2 </label>
                <div class="col-sm-9">
                <textarea name="employe_address2" class="form-control" rows="10" placeholder="Alamat 2"><?php echo $inputAddress2Value; ?></textarea><br>
                </div>
            </div>

            <div class="form-group">
                <label  class="col-sm-3 control-label" >Kota *</label>
                <div class="col-sm-5">
                <input type="text" name="employe_city" placeholder="Kota" class="form-control" value="<?php echo $inputCityValue; ?>"><br>
                </div>
            
                <label  class="col-sm-2 control-label" >Kode Pos </label>
                <div class="col-sm-2">
                <input type="text" name="employe_postal_code" placeholder="Kode Pos" class="form-control" value="<?php echo $inputPostalCodeValue; ?>"><br>
                </div>
            </div>

             <div class="form-group">
                <label  class="col-sm-3 control-label" >NS *</label>
                <div class="col-sm-9">
                <input type="text" name="employe_ns" placeholder="NS" class="form-control" value="<?php echo $inputNsValue; ?>"><br>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label">Start Work Date *</label>
                <div class="col-sm-3">
                <input type="text" name="employe_start_work_date" placeholder="Start Work Date" id="datepicker2"  class="form-control" value="<?php echo pretty_date($inputStartWorkDateValue, 'Y/m/d', FALSE); ?>">
                </div>

                <label class="col-sm-3 control-label">Start Permanent Date </label>
                <div class="col-sm-3">
                 <input type="text" name="employe_permanent_date" placeholder="Start Permanent Date" id="datepicker3" class="form-control" value="<?php echo pretty_date($inputPermanentDateValue, 'Y/m/d', FALSE); ?>"><br>
                </div>
            </div>

             <div class="form-group">
                <label class="col-sm-3 control-label" >No. Telepon * </label>
                <div class="col-sm-3">
                <input type="text" name="employe_phone" placeholder="No. Telepon" class="form-control" value="<?php echo $inputPhoneValue; ?>"><br>
                </div>

                <label class="col-sm-1 control-label">Private Email *</label>
                <div class="col-sm-5">
                <input type="text" name="employe_email" placeholder="Email" class="form-control" value="<?php echo $inputEmailValue; ?>">
                <p style="color:#9C9C9C;margin-top: 5px"><i>Contoh : example@yahoo.com / example@example.com</i></p>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label"  >Status Pernikahan *</label>
                <div class="col-sm-3">
                <select name="kawin_kawin_id" class="form-control">
                    <?php
                    if (!empty($kawin)) {
                        foreach ($kawin as $row) :
                            $select = ($row['kawin_id'] == $inputKawinValue) ? 'selected' : NULL;
                        ?>

                            <option value="<?php echo $row['kawin_id']; ?>" <?php echo $select; ?>> <?php echo $row['kawin_name']; ?></option>

                            <?php
                            endforeach;
                        }
                        ?>
                </select>
                </div>

                <label class="col-sm-3 control-label" >Pendidikan *</label>
                <div class="col-sm-3">
                <select name="pendidikan_pendidikan_id" class="form-control">
                    <?php
                    if (!empty($pendidikan)) {
                        foreach ($pendidikan as $row) :
                            $select = ($row['pendidikan_id'] == $inputPendidikanValue) ? 'selected' : NULL;
                        ?>

                            <option value="<?php echo $row['pendidikan_id']; ?>" <?php echo $select; ?>> <?php echo $row['pendidikan_name']; ?></option>

                            <?php
                            endforeach;
                        }
                        ?>
                </select><br>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label" >Jenis Kelamin *</label>
                <div class="col-sm-3">
                <select name="kelamin_kelamin_id" class="form-control">
                    <?php
                    if (!empty($kelamin)) {
                        foreach ($kelamin as $row) :
                            $select = ($row['kelamin_id'] == $inputKelaminValue) ? 'selected' : NULL;
                        ?>

                            <option value="<?php echo $row['kelamin_id']; ?>" <?php echo $select; ?>> <?php echo $row['kelamin_name']; ?></option>

                            <?php
                            endforeach;
                        }
                        ?>
                </select><br>
                </div>
           

                <label class="col-sm-3 control-label">Agama *</label>
                <div class="col-sm-3">
                <select name="religion_religion_id" class="form-control">
                    <?php
                    if (!empty($religion)) {
                        foreach ($religion as $row) :
                            $select = ($row['religion_id'] == $inputReligionValue) ? 'selected' : NULL;
                        ?>

                            <option value="<?php echo $row['religion_id']; ?>" <?php echo $select; ?>> <?php echo $row['religion_name']; ?></option>

                            <?php
                            endforeach;
                        }
                        ?>
                </select><br>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label" >Divisi *</label>
                <div class="col-sm-3">
                <select name="division_division_id" class="form-control">
                    <?php
                    if (!empty($division)) {
                        foreach ($division as $row) :
                            $select = ($row['division_id'] == $inputDivisionValue) ? 'selected' : NULL;
                        ?>

                            <option value="<?php echo $row['division_id']; ?>" <?php echo $select; ?>> <?php echo $row['division_name']; ?></option>

                            <?php
                            endforeach;
                        }
                        ?>
                </select>
                </div>

                <label class="col-sm-3 control-label">Departemen *</label>
                <div class="col-sm-3">
                <select name="departement_departement_id" class="form-control">
                    <?php
                    if (!empty($departement)) {
                        foreach ($departement as $row) :
                            $select = ($row['departement_id'] == $inputDepartementValue) ? 'selected' : NULL;
                        ?>

                            <option value="<?php echo $row['departement_id']; ?>" <?php echo $select; ?>> <?php echo $row['departement_name']; ?></option>

                            <?php
                            endforeach;
                        }
                        ?>
                </select><br>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label" >Jabatan *</label>
                <div class="col-sm-3">
                <select name="jabatan_jabatan_id" class="form-control">
                    <?php
                    if (!empty($jabatan)) {
                        foreach ($jabatan as $row) :
                            $select = ($row['jabatan_id'] == $inputJabatanValue) ? 'selected' : NULL;
                        ?>

                            <option value="<?php echo $row['jabatan_id']; ?>" <?php echo $select; ?>> <?php echo $row['jabatan_name']; ?></option>

                            <?php
                            endforeach;
                        }
                        ?>
                </select>
                </div>


                <label class="col-sm-3 control-label">Status Karyawan *</label>
                <div class="col-sm-3">
                <select name="status_status_id" class="form-control">
                    <?php
                    if (!empty($status)) {
                        foreach ($status as $row) :
                            $select = ($row['status_id'] == $inputStatusValue) ? 'selected' : NULL;
                        ?>

                            <option value="<?php echo $row['status_id']; ?>" <?php echo $select; ?>> <?php echo $row['status_name']; ?></option>

                            <?php
                            endforeach;
                        }
                        ?>
                </select><br>
                </div>
            </div>

             <div class="form-group">
                <label class="col-sm-3 control-label" >Superior </label>
                

                <div class="col-sm-9">
                <input type="hidden" name="employe_superior" value="0" >
                <input type="checkbox" class="flat-red"  name="employe_superior" value="1"   
                <?php if ($inputSuperiorValue == 1) {
                    echo "checked";
                } ?> /> </br>
                </div>
            </div>



            <div class="form-group">
                <div class="col-sm-12">
                <p style="color:#9C9C9C;margin-top: 5px"><i><b>*) Field Wajib Diisi</b></i></p>
                </div>
            </div>
        </div>

        <div class="col-sm-9 col-md-2">
            <div class="form-group">
                <button name="action" type="submit" value="save" class="btn btn-success"><i class="ion-checkmark"></i> Simpan</button>
                <a href="<?php echo site_url('employe'); ?>" class="btn btn-info"><i class="ion-arrow-left-a"></i> Batal</a>
                <?php if (isset($employe)) : ?>
                    
                        <a style="margin-top: 3px" href="<?php echo site_url('employe/delete/' . $employe['employe_id']); ?>" class="btn btn-danger"><i class="ion-trash-a"></i> Hapus</a>
                  
                <?php endif; ?>

                <br><hr>
                <!-- <?php if (!empty($employe['employe_images'])) { ?>
                    <img src="<?php echo upload_url($employe['employe_images']) ?>" class="img-responsive avatar">
                    <?php 
                } else { ?>
                    <img src="<?php echo base_url('media/custom/image/missing-image.png') ?>" class="img-responsive avatar">
                    <?php 
                } ?>

                <br>
                <?php if (isset($employe)) : ?>
                   <?php foreach ($image as $key) : ?>
                       <a target="_blank" href="<?php echo upload_url($key['employe_images_path']) ?>"><?php echo $key['employe_images_path'] ?></a>
                       <br>
                <?php endforeach ?>

                <?php endif ?> -->

                <label>Upload File</label>
                <div id="p_upload">
                        <p>
                            <input type="file" class="" name="employeImage[]">
                            <br>
                        </p>
                </div>
            </div>
        </div>
    </div>
    <?php echo form_close(); ?>
                
              </div>
              <!-- /.row -->
            </div>
          </div>
          <!-- /.widget-user -->
        </div>

   
        
</div>

<?php if (isset($employe)) : ?>
    <!-- Delete Confirmation -->
    <div class="modal fade" id="confirm-del">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"><b>Konfirmasi Penghapusan</b></h4>
                </div>
                <div class="modal-body">
                    <p>Data yang dipilih akan dihapus&hellip;</p>
                </div>
                <?php echo form_open('employe/delete/' . $employe['employe_id']); ?>
                <div class="modal-footer">
                    <a><button style="float: right;margin-left: 10px" type="button" class="btn btn-default" data-dismiss="modal">Tidak</button></a>
                    <input type="hidden" name="del_id" value="<?php echo $employe['employe_id'] ?>" />
                    <input type="hidden" name="del_name" value="<?php echo $employe['employe_name'] ?>" />
                    <button type="submit" class="btn btn-primary">Ya</button>
                </div>
                <?php echo form_close(); ?>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <?php if ($this->session->flashdata('delete')) { ?>
        <script type = "text/javascript">
            $(window).load(function () {
                $('#confirm-del').modal('show');
            });
        </script>
    <?php 
}
?>
<?php endif; ?>

<script type="text/javascript">
    var myApp = angular.module('myApp', [ 'multi-select' ]);

    $(function() {
        var divUpload = $('#p_upload');
        var i = $('#p_upload p').size() + 1;

        $("#addUpload").click(function() {
            $('<p>' +
                '<input type="file" name="employeImage[]" multiple="">' +
                '<a href="#" class="remUpload">Hapus</a>' +
                '<br>' +
                '</p>').appendTo(divUpload);

            i++;
            return false;
        });

        $(document).on("click", ".remUpload", function() {
            if (i > 2) {
                $(this).parents('p').remove();
                i--;
            }
            return false;
        });
    });
</script>

</div>
</section>
