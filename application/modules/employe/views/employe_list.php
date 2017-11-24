<style type="text/css">
    
    table.dataTable thead>tr>th.sorting_asc, table.dataTable thead>tr>th.sorting_desc, table.dataTable thead>tr>th.sorting, table.dataTable thead>tr>td.sorting_asc, table.dataTable thead>tr>td.sorting_desc, table.dataTable thead>tr>td.sorting {padding: 3px; font-size: 12px; vertical-align: middle;}
</style>

<div class="box col-sm-12">
    <h3 class="page-header">
        Daftar Admin
        <a href="<?php echo site_url('employe/add'); ?>" ><button type="button" class="btn btn-success pull-right"><span class="glyphicon glyphicon-plus-sign"></span> Tambah</button></a>
    </h3>



    <div class="box-body table-striped table-responsive no-padding">
        <table id="example2" data-mode="columntoggle" data_role="table" style="background: #fff;" class="table table-hover table-bordered table-striped ui-responsive" >
            <thead style="background: #37474f;">
                <tr>
                    <th style="width: 100px;"><font color="#fff">NRP</font></th>
                    <th ><font color="#fff">Nama Lengkap</font></th>
                    <th ><font color="#fff">Tempat Lahir</font></th>
                    <th width="1000px"><font color="#fff">Tanggal Lahir</font></th>
                    <th><font color="#fff">Jenis Kelamin</font></th>
                    <th><font color="#fff">Agama</font></th>
                    <th><font color="#fff">Kewarganegaraan</font></th>
                    <th style="width: 100px;"><font color="#fff">Status Pernikahan</font></th>
                    <th><font color="#fff">Email</font></th>
                    <th><font color="#fff">Telfon</font></th>
                    <th><font color="#fff">Alamat 1</font></th>
                    <th><font color="#fff">Alamat 2</font></th>
                    <th><font color="#fff">Kota</font></th>
                    <th><font color="#fff">Kode Pos</font></th>
                    <th><font color="#fff">Pendidikan</font></th>
                    <th><font color="#fff">Golongan</font></th>
                    <th><font color="#fff">NS</font></th>
                    <th><font color="#fff">Jabatan</font></th>
                    <th><font color="#fff">Divisi</font></th>
                    <th><font color="#fff">Departement</font></th>
                    <th><font color="#fff">Status Karyawan</font></th>
                    <th><font color="#fff">Mulai Kerja</font></th>
                    <th><font color="#fff">Tanggal Permanent</font></th>
                    <th><font color="#fff">Tanggal Update Terahir</font></th>
                    <th><font color="#fff">AKSI</font></th>
                </tr>
            </thead>
            <tbody>
            <?php
            if (!empty($employe)) {
                foreach ($employe as $row) {
                    ?>
                    
                        <tr style="background : #e0e0e0;">
                            <td ><a href="<?php echo site_url('employe/add/' . $row['employe_id']); ?>"><?php echo $row['employe_nrp']; ?></a></td>
                            <td ><?php echo $row['employe_name']; ?></td>
                            <td ><?php echo $row['employe_born_place']; ?></td>
                            <td ><?php echo pretty_date($row['employe_born_date'], 'l, d/m/Y', FALSE); ?></td>
                            <td ><?php echo $row['kelamin_name']; ?></td>
                            <td ><?php echo $row['religion_name']; ?></td>
                            <td ><?php echo $row['employe_citizen']; ?></td>
                            <td ><?php echo $row['kawin_name']; ?></td>
                            <td ><?php echo $row['employe_email']; ?></td>
                            <td ><?php echo $row['employe_phone']; ?></td>
                            <td ><?php echo $row['employe_address']; ?></td>
                            <td ><?php echo $row['employe_address2']; ?></td>
                            <td ><?php echo $row['employe_city']; ?></td>
                            <td ><?php echo $row['employe_postal_code']; ?></td>
                            <td ><?php echo $row['pendidikan_name']; ?></td>
                            <td ><?php echo $row['employe_golongan']; ?></td>
                            <td ><?php echo $row['employe_ns']; ?></td>
                            <td ><?php echo $row['jabatan_name']; ?></td>
                            <td ><?php echo $row['division_name']; ?></td>
                            <td ><?php echo $row['departement_name']; ?></td>
                            <td ><?php echo $row['status_name']; ?></td>
                            <td ><?php echo pretty_date($row['employe_start_work_date'], 'l, d/m/Y', FALSE); ?></td>
                            <td ><?php echo pretty_date($row['employe_permanent_date'], 'l, d/m/Y', FALSE); ?></td>
                            <td ><?php echo $row['employe_update']; ?></td>
                            <td>
                                    <a class="btn btn-success btn-xs" href="<?php echo site_url('employe/add/' . $row['employe_id']); ?>" ><span class="ion-edit"></span></a>
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