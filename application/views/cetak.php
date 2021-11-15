<style>
table, th, td {
  border:1px solid black;
}
</style>
<center><h1>Data Informasi Gizi <br> Pada Produk</h1><hr><br></center>
                                            <table style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>NO</th>
                                                        <th>Nama Produk</th>
                                                        <th>Kadar Gizi</th>
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
                                                        <td><?php echo htmlentities($data->kadar_gizi, ENT_QUOTES, 'UTF-8');?>%</td>
                                                    </tr>
                                                        <?php } ?>
                                                </tbody>
                                            </table>
<script type="text/javascript">
window.print();
</script>

                                        