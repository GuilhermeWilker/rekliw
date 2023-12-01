<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com" defer></script>
    <link rel="stylesheet" href="/assets/css/styles.css">
    <title>rekliw - <?php echo $title; ?></title>
</head>
<body class="bg-[#232323] text-white">
    <header class="w-full p-5">
       <div class="flex items-center justify-between">
            <h3 class="text-3xl font-family-righteous">Guilherme Wilker</h3>
            <div class="bg-white h-10 w-10 rounded-lg"></div>
       </div>

       <div>
            <p class="text-md font-family-righteous">Projeto: Monalisa INC.</p>
       </div>

       <div class="mt-5">
            <p class="p-2 text-center text-sm border-2 border-white rounded-md w-1/2 bg-[#363636]">
                🧑‍🚀 2.596 Clientes
            </p>
       </div>
    </header>
    <main class='p-5'>
        <div>
            <?php require VIEWS.$view; ?>
        </div>
    </main>
</body>
</html>