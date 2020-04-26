<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">                       

<div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header alert-success">
                        Invoice Pembayaran Anda
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <?php foreach($transaksi as $tr):?>
                                    <th>Nama Customer</th>
                                    <td>:</td>
                                    <td><?php echo $tr->nama?></td>
                                <tr>
                                    <th>Merk Mobil</th>
                                    <td>:</td>
                                    <td><?php echo $tr->merk?></td>
                                </tr>
                                <tr>
                                    <th>Tanggal Rental</th>
                                    <td>:</td>
                                    <td><?php echo $tr->tanggal_rental?></td>
                                </tr>
                                <tr>
                                    <th>Tanggal Kembali</th>
                                    <td>:</td>
                                    <td><?php echo $tr->tanggal_kembali?></td>
                                </tr>
                                <tr>
                                    <th>Biaya Sewa Perhari</th>
                                    <td>:</td>
                                    <td>Rp.<?php echo number_format($tr->harga,0,',','.')?></td>
                                </tr>
                                <tr>
                                    <th>Jumlah hari</th>
                                    <td>:</td>
                                    <td>
                                        <?php 
                                            $x=strtotime($tr->tanggal_rental);
                                            $y=strtotime($tr->tanggal_kembali);
                                            $jumlah_hari = abs(($y-$x)/(60*60*24));
                                            echo $jumlah_hari;
                                        ?> Hari
                                    </td>
                                </tr>
                                <tr>
                                    <th>Status Pembayaran</th>
                                    <td>:</td>
                                    <td><?php
                                        if($tr->status_pembayaran == "0"){
                                            echo "BELUM LUNAS";
                                        }else{
                                            echo "LUNAS";
                                        }
                                     ?></td>
                                </tr>
                                <tr class="text-danger">
                                    <th>Jumlah Pembayaran</th>
                                    <td>:</td>
                                    <td>
                                        Rp.
                                        <?php 
                                            echo number_format($tr->harga * $jumlah_hari,0,',','.') 
                                        ?>
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <th>Metode Pembayaran</th>
                                    <td>:</td>
                                    <td>
                                        <ul>
                                            <li>Bank BRI 231123311212 a/n PT.Transcorp</li>
                                            <li>Bank BCA 231123311212 a/n PT.Transcorp</li>
                                            <li>Bank Mandiri 231123311212 a/n PT.Transcorp</li>
                                            <li>Gopay 0823211233 a/n PT.Transcorp</li>
                                            <li>Ovo 0823211233 a/n PT.Transcorp</li>
                                        </ul>
                                    </td>
                                </tr>
                            <?php endforeach;?>
                        </table>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

    <script type="text/javascript">
        window.print();
    </script>