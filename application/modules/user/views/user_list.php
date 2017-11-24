<div class="box col-sm-12">
    <h3 class="page-header">
        Daftar User
        <a href="<?php echo site_url('user/user_admin/add'); ?>" ><button type="button" class="btn btn-success pull-right"><span class="glyphicon glyphicon-plus-sign"></span> Tambah</button></a>
    </h3>

   <div class="box-body table-striped table-responsive no-padding">
        <table id="example2" data-mode="columntoggle" data_role="table" style="background: #fff;" class="table table-hover table-bordered table-striped ui-responsive" >
            <thead style="background: #37474f;">
                <tr>
                    <th><font color="#fff">USERNAME</font></th>
                    <th><font color="#fff">NAMA LENGKAP</font></th>
                    <th><font color="#fff">DEPARTEMENT</font></th>
                    <th><font color="#fff">EMAIL</font></th>
                    <th><font color="#fff">AKSI</font></th>
                </tr>
            </thead>
            <tbody>
            <?php
            if (!empty($user)) {
                foreach ($user as $row) {
                    ?>
                   
                        <tr>
                            <td ><?php echo $row['user_name']; ?></td>
                            <td ><?php echo $row['employe_name']; ?></td>
                            <td ><?php echo $row['departement_name']; ?></td>
                            <td ><?php echo $row['user_email']; ?></td>
                            <td>
                                    <a class="btn btn-warning btn-xs" href="<?php echo site_url('user/user_admin/view/' . $row['user_id']); ?>" ><span class="glyphicon glyphicon-eye-open"></span></a>
                                    <a class="btn btn-success btn-xs" href="<?php echo site_url('user/user_admin/add/' . $row['user_id']); ?>" ><span class="glyphicon glyphicon-edit"></span></a>
                                <?php if ($this->session->userdata('user_id_admin') != $row['user_id']) { ?>
                                    <a class="btn btn-primary btn-xs" href="<?php echo site_url('user/user_admin/rpw/' . $row['user_id']); ?>" ><span class="ion-refresh"></span>&nbsp; Reset Password</a>
                                <?php } else {
                                    ?>
                                    <a class = "btn btn-primary btn-xs" href = "<?php echo site_url('user/user_admin/cpw/'); ?>" ><span class = "ion-refresh"></span>&nbsp; Ubah Password</a>
                                <?php } ?>
                        </tr>
                    <?php
                }
            } else {
                ?>
                <tbody>

                    
                    <tr id="row">
                        <td colspan="5" align="center">Data Kosong</td>
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


