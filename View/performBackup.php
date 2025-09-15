<?php
include "../db/db.php";

if (isset($_POST['scan'])) {
    $status = "All systems normal at " . date("Y-m-d H:i:s");
    $sql = "INSERT INTO security_logs (status) VALUES ('$status')";
    $conn->query($sql);
}

$result = $conn->query("SELECT * FROM security_logs ORDER BY id DESC");
?>
<!DOCTYPE html>
<html>
<head><title>Monitor Security</title><link rel="stylesheet" href="../css/style.css"></head>

<body class="backup">
<div class="container">
  <h1>Perform Data Backup</h1>
  <?php if($msg): ?><p><?= $msg ?></p><?php endif; ?>
  <form method="post">
    <button class="backup-btn" name="backup">Start Backup</button>
  </form>
  <span class="back" onclick="location.href='index.html'">← Back</span>
</div>
</body>
</html>
