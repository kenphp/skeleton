<?php
/**
 * @var \League\Plates\Template\Template
 */
 $this->layout('layouts/main')

?>

<?php $this->start('body') ?>
<h3>Error <?= $code ?></h3>
<br>
<h5><?= $message ?></h5>
<?php $this->end() ?>
