<style type="text/css">
    
    table.dataTable thead>tr>th.sorting_asc, table.dataTable thead>tr>th.sorting_desc, table.dataTable thead>tr>th.sorting, table.dataTable thead>tr>td.sorting_asc, table.dataTable thead>tr>td.sorting_desc, table.dataTable thead>tr>td.sorting {padding: 3px; font-size: 12px; vertical-align: middle;}
</style>

<div class="box col-sm-12">
    <h3 class="page-header">
        Daftar Iventory IT
        <a href="<?php echo site_url('iventory/iventoryit/add'); ?>" >
            <button type="button" class="btn btn-success pull-right" >
                <span class="glyphicon glyphicon-plus-sign"></span> 
                Tambah
            </button>
        </a>
    </h3>



    <div class="box-body table-striped table-responsive no-padding">
        <table id="example2" data-mode="columntoggle" data_role="table" style="background: #fff;" class="table table-hover table-bordered table-striped ui-responsive" >
            <thead style="background: #37474f;">
                <tr>
                    <th><font color="#fff">Type</font></th>
                    <th><font color="#fff">Hostname</font></th>
                    <th><font color="#fff">IP</font></th>
                    <th><font color="#fff">Employe Name</font></th>
                    <th><font color="#fff">Departement</font></th>
                    <th><font color="#fff">Operating System</font></th>
                    <th><font color="#fff">Office Application</font></th>
                    <th><font color="#fff">Status</font></th>
                    <th><font color="#fff">Keterangan</font></th>
                    <th><font color="#fff">Last Update</font></th>
                    <th><font color="#fff">AKSI</font></th>
                </tr>
            </thead>
            <tbody>
            <?php
            if (!empty($iventoryit)) {
                foreach ($iventoryit as $row) {
                    ?>
                    
                        <tr style="background : #e0e0e0;">
                            <td ><?php echo $row['iventoryit_type_name']; ?></td>
                            <td ><a href="<?php echo site_url('iventoryit/add/' . $row['iventoryit_id']); ?>" ><?php echo $row['iventoryit_hostname']; ?></a></td>
                            <td ><?php echo $row['iventoryit_ip']; ?></td>
                            <td ><?php echo $row['employe_name']; ?></td>
                            <td ><?php echo $row['departement_name']; ?></td>
                            <td ><?php echo $row['iventoryit_os_name']; ?></td>
                            <td ><?php echo $row['iventoryit_officeapp_name']; ?></td>
                            <td ><?php echo $row['iventoryit_status_name']; ?></td>
                            <td ><?php echo $row['iventoryit_ket']; ?></td>
                            <td ><?php echo pretty_date($row['iventoryit_last_update'], 'l, d/m/Y', FALSE); ?></td>
                            
                            <td>
                                    <a class="btn btn-success btn-xs" href="<?php echo site_url('iventory/iventoryit/add/' . $row['iventoryit_id']); ?>" >
                                        <span class="ion-edit"></span>
                                    </a>
                                    <a class="btn btn-warning btn-xs" href="<?php echo site_url('iventory/iventoryit/view/' . $row['iventoryit_id']); ?>" >
                                        <span class="ion-eye"></span>
                                    </a>
                            </td>
                        </tr>
                    
                    <?php

                }
            } else {
                ?>
                <tbody>
                    <tr id="row">
                        <td colspan="12" align="center">Data Kosong</td>
                    </tr>
                </tbody>
                <?php

            }
            ?>  
        </tbody> 
        </table>
    </div>
    <div >
        <?php echo $this->pagination->create_links(); ?>
    </div>
</div>