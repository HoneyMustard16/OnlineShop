<main role="main" class="container">
    <?php $this->load->view('layouts/_alert')?>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Cart
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Produk</th>
                                <th class="text-center">Harga</th>
                                <th class="text-center">Jumlah</th>
                                <th class="text-center">Subtotal</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($content as $row): ?>
                            <tr>
                                <td>
                                    <p><img src="<?=$row->image ? base_url("images/product/$row->image") : base_url("images/roduct/default.png")?>"
                                            alt="" height="50"> <strong><?=$row->title?></strong></p>
                                </td>
                                <td class="text-center">Rp<?=number_format($row->price, 0, ',', '.')?>,-</td>
                                <td>
                                    <form action="<?=base_url("cart/update/$row->id")?>" method="POST">
                                        <input type="hidden" name="id" value="<?=$row->id?>">
                                        <div class="input-group">
                                            <input type="number" name="qty" id="" class="form-control text-center"
                                                value="<?=$row->qty?>">
                                            <div class="input-group-append">
                                                <button type="submit" class="btn btn-primary"><i
                                                        class="fas fa-check"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </td>
                                <td class="text-center">
                                    Rp<?=number_format($row->subtotal, 0, ',', '.')?>,-</td>
                                <td>
                                    <?=form_open("cart/delete/$row->id", ['method' => 'POST'])?>
                                    <?=form_hidden('id', $row->id)?>
                                    <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt" onclick="return confirm('Apakah yakin ingin menghapus?')"></i>
                                    </button>
                                    <?=form_close();?>
                                </td>
                            </tr>
                            <?php endforeach?>
                            <tr>
                                <td colspan="3"><strong>Total:</strong> </td>
                                <td class="text-center">
                                    <strong>Rp<?=number_format(array_sum(array_column($content, 'subtotal')), 0, ',', '.')?>,-</strong>
                                </td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    <a href="<?= base_url('/checkout') ?>" class="btn btn-success float-right">Pembayaran <iclass="fas fa-angle-right"></i> </a>
                    <a href=" <?=base_url('/')?>" class="btn btn-warning text-white"><i class="fas fa-angle-left">
                    </i>
                        Belanja Lagi</a>
                </div>
            </div>
        </div>
    </div>
</main>