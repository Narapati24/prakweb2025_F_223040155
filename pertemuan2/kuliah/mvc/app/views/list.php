<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Pengguna</title>
</head>
<body>
  <div class="container">
    <h1>Daftar Pengguna</h1>
    <ul>
      <?php foreach ($users as $user): ?>
        <li>
          <?= htmlspecialchars($user['email']); ?> - 
          <a href="index.php?action=detail&id=<?= urlencode($user['id']); ?>">Lihat Profil</a>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</body>
</html>