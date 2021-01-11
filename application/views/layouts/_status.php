<?php

if ($status == 'waiting') {
    $badge_status = 'badge-primary';
    $status = 'Menunggu pembayaran';
}

if ($status == 'paid') {
    $badge_status = 'badge-secondary';
    $status = 'Dibayar';
}

if ($status == 'delivered') {
    $badge_status = 'badge-success';
    $status = 'Dikirim';
}

if ($status == 'cancel') {
    $badge_status = 'badge-danger';
    $status = 'Dibatalkan';
}

?>

<?php if ($status): ?>
<span>
    <class class="badge badge-pill <?=$badge_status?>" > <?=$status?></class>
</span>
<?php endif?>