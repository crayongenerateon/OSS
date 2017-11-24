

<div class="col-sm-9 col-md-10 main">
    <div class="row">
        <div class="col-md-8">
            <h3 class="page-header">
                Detail Iventory
            </h3>
        </div><br>
        <div class="col-md-4">
            <span class=" pull-right">
                <a href="<?php echo site_url('iventory/iventoryit') ?>" class="btn btn-info"><span class="ion-arrow-left-a"></span>&nbsp; Kembali</a> 
                <a href="<?php echo site_url('iventory/iventoryit/add/' . $iventoryit['iventoryit_id']) ?>" class="btn btn-success"><span class="ion-edit"></span>&nbsp; Edit</a> 
            </span>
        </div>
    </div>
   

    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped">
                <tbody>
                    <tr>
                        <td>ID</td>
                        <td>:</td>
                        <td><?php echo $iventoryit['iventoryit_id'] ?></td>
                    </tr>
                    <tr>
                        <td>Type</td>
                        <td>:</td>
                        <td><?php echo $iventoryit['iventoryit_type_name'] ?></td>
                    </tr>
                    <tr>
                        <td>Hostname</td>
                        <td>:</td>
                        <td><?php echo $iventoryit['iventoryit_hostname'] ?></td>
                    </tr>
                    <tr>
                        <td>Departement</td>
                        <td>:</td>
                        <td><?php echo $iventoryit['iventoryit_ip'] ?></td>
                    </tr>
                    <tr>
                        <td>Employe Name</td>
                        <td>:</td>
                        <td><?php echo $iventoryit['employe_name'] ?></td>
                    </tr>
                    <tr>
                        <td>Departement</td>
                        <td>:</td>
                        <td><?php echo $iventoryit['departement_name'] ?></td>
                    </tr>
                    <tr>
                        <td>Operating System</td>
                        <td>:</td>
                        <td><?php echo $iventoryit['iventoryit_os_name'] ?></td>
                    </tr>
                    <tr>
                        <td>Office Application</td>
                        <td>:</td>
                        <td><?php echo $iventoryit['iventoryit_officeapp_name'] ?></td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td>:</td>
                        <td><?php echo $iventoryit['iventoryit_status_name'] ?></td>
                    </tr>
                    <tr>
                        <td>Detail</td>
                        <td>:</td>
                        <td><?php echo $iventoryit['iventoryit_ket'] ?></td>
                    </tr>

                    <tr>
                        <td>Last Update</td>
                        <td>:</td>
                        <td><?php echo pretty_date($iventoryit['iventoryit_last_update'], 'l, d-m-Y ', FALSE) ?>
                            <br>Jam <?php echo pretty_date($iventoryit['iventoryit_last_update'], 'H:i:s', true) ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        
        
    </div>


    

</div>





