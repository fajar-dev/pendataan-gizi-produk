<div class="row column1">
                            <div class="col-12">
                            <?php echo $this->session->flashdata('msg') ?>
                            <div class="dash_blog">
                                <div class="dash_blog_inner">
                                    <div class="dash_head">
                                        <h3><span><i class="fa fa-product-hunt"></i> Data Produk</span><span class="plus_green_bt"></span></h3>
                                    </div>
                                    <div class="msg_list_main">
                                        <div class="table_section padding_infor_info">
                                        <div class="table-responsive">
                                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>NO</th>
                                                        <th>Nama Produk</th>
                                                        <th>Kadar Gizi</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                        <?php
                                                            $no=1;
                                                            foreach($hasil as $data){
                                                        ?>
                                                    <tr>
                                                        <td><?php echo $no++?></td>
                                                        <td><?php echo htmlentities($data->nama_produk, ENT_QUOTES, 'UTF-8');?></td>
                                                        <td>
                                                        <div class="progress" style="height: 25px;">
                                                            <div class="progress-bar bg-primary" role="progressbar" style="width: <?php echo htmlentities($data->kadar_gizi, ENT_QUOTES, 'UTF-8');?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo htmlentities($data->kadar_gizi, ENT_QUOTES, 'UTF-8');?>%</div>
                                                        </div>
                                                        </td>
                                                        <td>
                                                          <?php if($this->session->userdata('level') == 1){
                                                              echo '<a href="'.base_url('page/hapus_produk/'.$data->id).'" onclick="hapus()" class="btn btn-danger">Hapus</a>';
                                                            }
                                                          ?>
                                                        </td>
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