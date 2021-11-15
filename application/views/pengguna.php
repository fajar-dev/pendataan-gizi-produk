<div class="row column1">
    <div class="col-12">
    <?php echo $this->session->flashdata('msg') ?>
    <div class="dash_blog">
        <div class="dash_blog_inner">
            <div class="dash_head">
                <h3>
                    <span><i class="fa fa-user"></i> Data Pengguna</span><span class="plus_green_bt"></span>
                    <span class="plus_green_bt"><a href="#">+</a></span>
                </h3>
            </div>
            <div class="msg_list_main">
                <div class="table_section padding_infor_info">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Level</th>
                                <th>Tanggal Daftar</th>
                                <th>aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                                <?php
                                    $no=1;
                                    foreach($hasil as $data){
                                ?>
                            <tr>
                                <td><?php echo $no++?></td>
                                <td><?php echo htmlentities($data->nama, ENT_QUOTES, 'UTF-8');?></td>
                                <td><?php echo htmlentities($data->email, ENT_QUOTES, 'UTF-8');?></td>
                                <td>
                                    <?php if($data->level == 1){
                                        echo 'Admin';
                                    }else{
                                        echo 'User';
                                    }
                                    ?>
                                </td>
                                <td><?php echo htmlentities($data->tgl_daftar, ENT_QUOTES, 'UTF-8');?></td>
                                <td><a href="<?php echo base_url('page/hapus_pengguna/'.$data->id)?> " onclick="hapus()" class="btn btn-danger">Hapus</a></td>
                            </tr>
                                <?php } ?>
                        </tbody>
                    </table>
                </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>