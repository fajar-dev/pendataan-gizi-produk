<div class="row column1">
  <div class="col-lg-auto col-xl-auto">
    <div class="white_shd full margin_bottom_30">
      <div class="full graph_head">
          <div class="heading1 margin_0">
              <h2>Input Produk</h2>
          </div>
        </div>
        <div class="full progress_bar_inner">
          <div class="row">
              <div class="col-md-12">
                <div class="msg_section">
                    <div class="msg_list_main">
                      <div class="login_form">
                        <form action="<?php echo base_url() ?>page/tambah_proses" method="post">
                           <fieldset>
                              <div class="field">
                                 <label class="label_field"> Nama Produk</label>
                                 <input type="text" name="nama" placeholder="Nama">
                              </div>
                              <div class="field">
                                 <label class="label_field">Kadar Gizi</label>
                                 <input type="number" name="gizi" placeholder="Gizi">
                              </div>
                              <div class="field margin_0">
                                 <button class="main_bt mt-5 w-100">Simpan</button>
                              </div>
                           </fieldset>
                        </form>
                     </div>
                </div>
              </div>
          </div>
        </div>
    </div>
  </div>
</div>