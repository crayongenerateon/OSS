
<div class="col-sm-9 col-md-10 main">
    <div class="row">
        <div class="col-md-8">
            <h3 class="page-header">
                Detail Pengguna
            </h3>
        </div><br>
        <div class="col-md-4">
            <span class=" pull-right">
                <a href="<?php echo site_url('user/user_admin') ?>" class="btn btn-info"><span class="ion-arrow-left-a"></span>&nbsp; Kembali</a> 
                <a href="<?php echo site_url('user/user_admin/add/' . $user['user_id']) ?>" class="btn btn-success"><span class="ion-edit"></span>&nbsp; Edit</a> 
            </span>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped">
                <tbody>
                    <tr>
                        <td>Username</td>
                        <td>:</td>
                        <td><?php echo $user['user_name'] ?></td>
                    </tr>
                    <tr>
                        <td>NRP</td>
                        <td>:</td>
                        <td><?php echo $user['employe_nrp'] ?></td>
                    </tr>
                    <tr>
                        <td>Nama Lengkap</td>
                        <td>:</td>
                        <td><?php echo $user['employe_name'] ?></td>
                    </tr>
                    <tr>
                        <td>Nama Lengkap</td>
                        <td>:</td>
                        <td><?php echo $user['departement_name'] ?></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td><?php echo $user['user_email'] ?></td>
                    </tr>
                    <tr>
                        <td>Tanggal daftar</td>
                        <td>:</td>
                        <td><?php echo pretty_date($user['user_created_date'], 'l, d-m-Y', FALSE) ?></td>
                    </tr>
                    <tr>
                        <td>Tanggal update</td>
                        <td>:</td>
                        <td><?php echo pretty_date($user['user_last_update'], 'l, d-m-Y ', false) ?>
                            <br>Jam <?php echo pretty_date($user['user_last_update'], 'H:i:s', true) ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Role</td>
                        <td>:</td>
                        <td><?php if($user['role_itservice'] == 1){echo "IT Service ";}  ?><br>
                        <?php if($user['role_master'] == 1){echo "Master";}  ?><br>
                        <?php if($user['role_log'] == 1){echo "Log Activity";}  ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>