
<link rel="stylesheet" type="text/css" href="<?php echo base_url('media/custom/css/angular-multi-select.css') ?>">
<script type="text/javascript" src="<?php echo base_url('media/custom/js/angular-multi-select.js') ?>"></script>
<link href="<?php echo base_url('/media/custom/css/mediamanager.css'); ?>" rel="stylesheet">
<script src="<?php echo base_url('/media/custom/js/mediamanager.js'); ?>"></script>

<div class="col-sm-9 col-md-10 main">
    <div class="row">
        <div class="col-md-8">
            <h3 class="page-header">
                Detail Issue
            </h3>
        </div><br>
        <div class="col-md-4">
            <span class=" pull-right">
                <a href="<?php echo site_url('itservice') ?>" class="btn btn-info"><span class="ion-arrow-left-a"></span>&nbsp; Kembali</a> 
                <a href="<?php echo site_url('itservice/add/' . $itservice['itservice_id']) ?>" class="btn btn-success"><span class="ion-edit"></span>&nbsp; Kerjakan</a> 
            </span>
        </div>
    </div>
    <div class="col-md-8">
            <?php if(!empty($itservice['itservice_image'])){ ?>
            <img src="<?php echo upload_url($itservice['itservice_image']) ?>" class="img-responsive avatar">
            <?php }else{ ?>
            <img src="<?php echo base_url('media/custom/image/missing-image.png') ?>" class="img-responsive avatar">
            <?php } ?>
    </div>
    <div class="col-md-4">
        <br>
        <br>
        <h4>Foto</h4>
        <hr>
        
            <?php $no = 0 ?>
            <?php foreach ($image as $key): ?>

                <div class="col-md-12 imgs">

                <img src="<?php echo upload_url('itservice/' . $key['itservice_image_path']) ?>" class="img img-responsive">
                    <div class="img-info">

                        <div class="imgaction">
                            <a class="zoomin">
                                <i class="glyphicon glyphicon-zoom-in icon-white" title="zoom in"></i>
                                <input type="hidden" value="<?php echo upload_url('itservice/' . $key['itservice_image_path'])?>" >
                            </a>
                            <a onclick="return confirm('Anda yakin akan menghapus?')" href="<?php echo site_url('itservice/delete_image/' . $key['itservice_image_id'] . '/' . $key['itservice_itservice_id']) ?>">
                                <i class="glyphicon glyphicon-remove icon-white" title="delete"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <?php $no++; ?>
            <?php endforeach ?>
        
        </div> 
    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped">
                <tbody>
                    <tr>
                        <td>Issue Creator</td>
                        <td>:</td>
                        <td><?php echo $itservice['employe_name'] ?></td>
                    </tr>
                    <tr>
                        <td>Departement</td>
                        <td>:</td>
                        <td><?php echo $itservice['departement_name'] ?></td>
                    </tr>
                    <tr>
                        <td>Issue Date</td>
                        <td>:</td>
                        <td><?php echo pretty_date($itservice['itservice_date_create'], 'l, d-m-Y ', FALSE) ?>
                            <br>Jam <?php echo pretty_date($itservice['itservice_date_create'], 'H:i:s', true) ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td>:</td>
                        <td><?php echo $itservice['itservice_status_name'] ?></td>
                    </tr>
                    <tr>
                        <td>Category</td>
                        <td>:</td>
                        <td><?php echo $itservice['itservice_category_name'] ?></td>
                    </tr>
                    <tr>
                        <td>Issue Detail</td>
                        <td>:</td>
                        <td><?php echo $itservice['itservice_issue'] ?></td>
                    </tr>
                </tbody>
            </table>
        </div>

        
        
    </div>


    

</div>

<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <p></p>
            </div>
            <div class="modal-body img_centre">

            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    var myApp = angular.module('myApp', [ 'multi-select' ]);

</script>


