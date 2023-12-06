<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com" ></script>
    <link rel="stylesheet" href="/assets/css/styles.css">
    <title>rekliw - <?php echo $title; ?></title>
</head>
<body class="bg-[#232323] text-white">
    <main class='p-3'>
        <div>
            <?php require VIEWS.$view; ?>
        </div>
    </main>
</body>
</html>