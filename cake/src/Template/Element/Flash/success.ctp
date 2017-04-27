<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<script>
    alert('<?PHP echo $message ?>');
</script>
<div class="message success" onclick="this.classList.add('hidden')"><i class="fa fa-check-square"></i> <?= $message ?></div>
<br class="clearfix">