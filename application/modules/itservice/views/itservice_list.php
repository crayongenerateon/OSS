<style type="text/css">
    
    table.dataTable thead>tr>th.sorting_asc, table.dataTable thead>tr>th.sorting_desc, table.dataTable thead>tr>th.sorting, table.dataTable thead>tr>td.sorting_asc, table.dataTable thead>tr>td.sorting_desc, table.dataTable thead>tr>td.sorting {padding: 3px; font-size: 12px; vertical-align: middle;}
</style>

<div class="box col-sm-12">
    <h3 class="page-header">
        Ticket List 
       <!--  <a href="<?php echo site_url('itservice/add'); ?>" ><button type="button" class="btn btn-success pull-right"><span class="glyphicon glyphicon-plus-sign"></span> Tambah</button></a> -->
    </h3>



    <div class="box-body table-striped table-responsive no-padding">
        <table id="example2" data-mode="columntoggle" data_role="table" style="background: #fff;" class="table table-hover table-bordered table-striped ui-responsive" >
            <thead style="background: #37474f;">
                <tr>
                    <th width="5%"><font size="2px" color="#fff">Ticket Number</font></th>
                    <th width="10%"><font size="2px" color="#fff">Name</font></th>
                    <th width="8%"><font size="2px" color="#fff">Department</font></th>
                    <th width="15%"><font size="2px" color="#fff">Issue Date</font></th>
                    <th width="5%"><font size="2px" color="#fff">Status</font></th>
                    <th width="13%"><font size="2px" color="#fff">Category</font></th>
                    <th width="39%""><font size="2px" color="#fff">Issue</font></th>
                    <th width="5%"><font size="2px" color="#fff">AKSI</font></th>
                </tr>
            </thead>
            <tbody>
            <?php
            if (!empty($itservice)) {
                foreach ($itservice as $row) {
                    ?>
                    
                        <tr style="background : #e0e0e0;">
                            <td ><a href="<?php echo site_url('itservice/view/' . $row['itservice_id']); ?>"><?php echo $row['itservice_id']; ?></a></td>
                            <td ><?php echo $row['employe_name']; ?></td>
                            <td ><?php echo $row['departement_name']; ?></td>
                            <td ><?php echo pretty_date($row['itservice_date_create'], 'l, d/m/Y', FALSE); ?></td>
                            <td ><?php echo $row['itservice_status_name']; ?></td>
                            <td ><?php echo $row['itservice_category_name']; ?></td>
                            <td ><?php echo $row['itservice_issue']; ?></td>
                            <td>
                                    <a class="btn btn-success btn-xs" href="<?php echo site_url('itservice/add/' . $row['itservice_id']); ?>" ><span class="ion-edit"></span></a>
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