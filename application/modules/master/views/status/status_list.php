
<div class="panel panel-red" >
<div class="col-sm-9 col-md-10 main">
    <h3 class="page-header">
        Daftar status
        <a href="<?php echo site_url('master/status/add'); ?>" ><button type="button" class="btn btn-success pull-right"><span class="glyphicon glyphicon-plus-sign"></span> Tambah</button></a>
    </h3>

    <!-- Indicates a successful or positive action -->

    <div class="box-body">
        <table style="background: #fff;" class="table table-hover table-bordered">
            <thead style="background: #37474f;">
                <tr >
                    <th ><font color="#fff">Kode</font></th>
                    <th ><font color="#fff">Nama</font></th>
                </tr>
            </thead>
            <?php
            if (!empty($status)) {
                foreach ($status as $row) {
                    ?>
                    <tbody >
                        <tr >
                            <td ><a href="<?php echo site_url('master/status/add/' . $row['status_id']); ?>" ><?php echo $row['status_code']; ?></a></td>
                            <td ><a href="<?php echo site_url('master/status/add/' . $row['status_id']); ?>" ><?php echo $row['status_name']; ?></a></td>
                        </tr>
                    </tbody>
                    <?php
                }
            } else {
                ?>
                <tbody>
                    <tr id="row">
                        <td colspan="1" align="center">Data Kosong</td>
                    </tr>
                </tbody>
                <?php
            }
            ?>   
        </table>
    </div>
    <div >
        <?php echo $this->pagination->create_links(); ?>
    </div>
</div>
</div>
