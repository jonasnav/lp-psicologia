<?php require_once 'admin/load-site.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="<?php echo HTTP ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo HTTP ?>/assets/css/all.min.css">

    <script>
        function setCookie() {
            $.get("<?php echo HTTP ?>/ajax/setCookie.php", function(data) {
                $('.cookie').fadeOut();
            });
        }
    </script>