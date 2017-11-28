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
if (isset($itservice)) {
    $id = $itservice['itservice_id'];
    $inputItserviceIssueValue = $itservice['itservice_issue'];
    $inputItserviceSolutionValue = $itservice['itservice_solution'];

    $inputStatussValue = $itservice['itservice_statuss_id'];
    $inputCategoriesValue = $itservice['itservice_categories_id'];
    $inputEmployeValue = $itservice['employe_employe_id'];
    $inputDepartementValue = $itservice['departement_departement_id'];
} else {
    $inputItserviceIssueValue = set_value('itservice_issue');
    $inputItserviceSolutionValue = set_value('itservice_solution');
    $inputStatussValue = set_value('itservice_statuss_id');
    $inputCategoriesValue = set_value('itservice_categories_id');
    $inputEmployeValue = set_value('employe_employe_id');
}
?>

<section class="content">
 <div class="row">              
<div class="col-sm-10 col-md-12 main">
    <?php echo isset($alert) ? ' ' . $alert : null; ?>
    <?php echo validation_errors(); ?>

    <div class="row page-header">
        <div class="col-sm-9 col-md-6">
            <h3 class="page-title" ><?php echo $operation; ?> Tiket Baru</h3>
        </div>

    </div>

    <?php echo form_open_multipart(current_url()); ?>
    <div class="row date" >
        <div class="col-sm-9 col-md-10">

            <?php if (isset($itservice)): ?>
                <input type="hidden" name="itservice_id" value="<?php echo $itservice['itservice_id'] ?>" />
            <?php endif; ?>
            <div class="form-group">
                <label class="col-sm-3 control-label">Nama Pemesan </label>
                <div class="col-sm-9">
                    <input type="text" readonly placeholder="Nama Pemesan" class="form-control" value="<?php echo $text = ucfirst($this->session->userdata('user_full_name_admin')); ?>">
                </div>
            </div>

             <div class="form-group">
                <label class="col-sm-3 control-label" >Departement </label>
                <div class="col-sm-9">
                    <input type="text" readonly placeholder="Nama Lengkap" class="form-control" value="<?php echo $text = ucfirst($this->session->userdata('user_departement_admin')); ?>"><br>
                </div>
            </div>

            <?php if (isset($itservice)): ?>
                <div class="form-group">
                <label class="col-sm-3 control-label"  >Status *</label>
                <div class="col-sm-9">
                <select name="itservice_statuss_id" class="form-control">

                    <?php
                    if (!empty($itservice_status)) {
                        foreach ($itservice_status as $row):
                            $select = ($row['itservice_status_id'] == $inputStatussValue) ? 'selected' : NULL;
                            ?>

                            <option value="<?php echo $row['itservice_status_id']; ?>" <?php echo $select; ?>> <?php echo $row['itservice_status_name']; ?></option>

                            <?php
                        endforeach;
                    }
                    ?>
                </select>                
                </div>
            </div>
            <?php endif; ?>  

            <div class="form-group">
                <label class="col-sm-3 control-label"  >Category *</label>
                <div class="col-sm-9">
                <select name="itservice_categories_id" class="form-control">

                <option value="">-- Pilih Category --</option>
                    <?php
                    if (!empty($Itservice_category)) {
                        foreach ($Itservice_category as $row):
                            $select = ($row['itservice_category_id'] == $inputCategoriesValue) ? 'selected' : NULL;
                            ?>

                            <option value="<?php echo $row['itservice_category_id']; ?>" <?php echo $select; ?>> <?php echo $row['itservice_category_name']; ?></option>

                            <?php
                        endforeach;
                    }
                    ?>
                </select>                
                </div>
            </div>

            <div class="form-group">
                <label  class="col-sm-3 control-label">Keluhan *</label>
                <div class="col-sm-9">
                <textarea name="itservice_issue" class="form-control" rows="10" placeholder="Masukan keluhan Anda disini"><?php echo $inputItserviceIssueValue; ?></textarea><br>
                </div>
            </div>
            
            <?php if (isset($itservice)) : ?>
                <div class="form-group">
                    <label  class="col-sm-3 control-label">Solusi *</label>
                    <div class="col-sm-9">
                    <textarea name="itservice_solution" class="form-control" rows="10" placeholder="Masukan keluhan Anda disini">
                        <?php echo $inputItserviceSolutionValue; ?>
                    </textarea><br>
                    </div>
                </div>
            <?php endif; ?> 

            <div class="form-group">
                IP : <?php $ipaddress = $_SERVER['REMOTE_ADDR']; echo $ipaddress; ?> <br>
                Hostname :  <?php $hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']); echo $hostname; ?>
                <p style="color:#9C9C9C;margin-top: 5px"><i>*) Field Wajib Diisi</i></p>
                 <?php if (isset($error)) : ?>
                    <?php echo $error?>
                 <?php endif ?>
            </div>

        </div>
        <div class="col-sm-9 col-md-1">
            <div class="form-group">
                <button name="action" type="submit" value="save" class="btn btn-success"><i class="ion-checkmark"></i> Simpan</button>
                <a href="<?php echo site_url('itservice'); ?>" class="btn btn-info"><i class="ion-arrow-left-a"></i> Batal</a>
            
            <br>
             <?php if (isset($itservice)): ?>
                <?php foreach ($image as $key): ?>
                    <a target="_blank" href="<?php echo upload_url($key['itservice_image_path']) ?>"><?php echo $key['itservice_image_path'] ?></a>
                    <br>
                <?php endforeach ?>

            <?php endif ?>
            <hr>
            <label>Upload File</label>
            <div id="p_upload">
                <p>
                    <input type="file" class="" name="itserviceImage[]">
                    <br>
                </p>
            </div>
            <!-- <a href="#" id="addUpload"><i class="glyphicon glyphicon-plus-sign"></i><b>  Tambah file lainnya</b></a> -->
            </div>
        </div>
    </div>
    <?php echo form_close(); ?>
</div>



<script type="text/javascript">
    var myApp = angular.module('myApp', [ 'multi-select' ]);

    $(function() {
        var divUpload = $('#p_upload');
        var i = $('#p_upload p').size() + 1;

        $("#addUpload").click(function() {
            $('<p>' +
                '<input type="file" name="itserviceImage[]" multiple="">' +
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
