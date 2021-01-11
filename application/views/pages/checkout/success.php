<main role="main" class="container">
    <?php $this->load->view('layouts/_alert')?>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Check Out Success.
                </div>
                <div class="card-body">
                    <h5>No. Order: <?=$content->invoice?></h5>
                    <p>Thanks for your order.</p>
                    <p>SIlahkan lakukan pemayaran untuk bisa kami proses, dengan cara:</p>
                    <ol>
                        <li>Lakukan Pembayaran pada rekening <strong>BCA 3123193019390</strong> a/n PT. DC Onine Shop
                        </li>
                        <li>Sertakan keterangan dengan nomor order: <strong><?=$content->invoice?></strong></li>
                        <li>Total Pembayaran: <Strong>Rp<?=number_format($content->total, 0, ',', '.')?>,-</Strong>
                        </li>
                    </ol>
                    <p>Jika Sudah, silahkan konfirmasi dengan mengirim bukti pembayaran di halaman konfirmasi atau bisa
                        <a href= <?=base_url("myorder/detail/$$content->invoice")?> >Klik disini</a>!
                    </p>
                    <a href="<?=base_url('/')?>" class="btn btn-primary"><i class="fas fa-angle-left"></i> Kembali</a>
                </div>
            </div>
        </div>
    </div>
</main>