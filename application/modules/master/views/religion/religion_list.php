
<div class="panel panel-red" >
<div class="col-sm-9 col-md-10 main">
    <h3 class="page-header">
        Daftar Religion
        <a href="<?php echo site_url('master/religion/add'); ?>" ><button type="button" class="btn btn-success pull-right"><span class="glyphicon glyphicon-plus-sign"></span> Tambah</button></a>
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
            if (!empty($religion)) {
                foreach ($religion as $row) {
                    ?>
                    <tbody >
                        <tr >
                            <td ><a href="<?php echo site_url('master/religion/add/' . $row['religion_id']); ?>" ><?php echo $row['religion_code']; ?></a></td>
                            <td ><a href="<?php echo site_url('master/religion/add/' . $row['religion_id']); ?>" ><?php echo $row['religion_name']; ?></a></td>
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
