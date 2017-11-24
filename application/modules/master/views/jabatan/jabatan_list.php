<div class="col-sm-9 col-md-10 main">
    <h3 class="page-header">
        Daftar jabatan
        <a href="<?php echo site_url('master/jabatan/add'); ?>" ><button type="button" class="btn btn-success pull-right"><span class="glyphicon glyphicon-plus-sign"></span> Tambah</button></a>
    </h3>

    <!-- Indicates a successful or positive action -->

    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="controls" align="center">Kode</th>
                    <th class="controls" align="center">Nama</th>
                </tr>
            </thead>
            <?php
            if (!empty($jabatan)) {
                foreach ($jabatan as $row) {
                    ?>
                    <tbody>
                        <tr>
                            <td ><a href="<?php echo site_url('master/jabatan/add/' . $row['jabatan_id']); ?>" ><?php echo $row['jabatan_code']; ?></a></td>
                            <td ><a href="<?php echo site_url('master/jabatan/add/' . $row['jabatan_id']); ?>" ><?php echo $row['jabatan_name']; ?></a></td>
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

