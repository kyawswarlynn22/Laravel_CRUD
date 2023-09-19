<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./resources/img/logo_upt.png" type="image/png" sizes="16x16">
    <title>404 Page</title>
    <script src="https://cdn.tailwindcss.com"></script> 
    <link rel="stylesheet" href="https://cdn.tailgrids.com/tailgrids-fallback.css" />
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="./resources/lib/tailwind/output.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display+SC&display=swap" rel="stylesheet">
</head>

<body class=" bg-sky-300">
    <nav class=" flex mt-5  mx-[3%]">
        <span class="flex  mb-[1%]">
            <img class="w-40" src="{{ asset('images/asiaRoyalLogo.png') }}" alt="...">
            <p class="text-3xl  font-bold ml-[1%] max-md:text-2xl font-philosopher w-96 ">Asia Royal Hospital</p>
        </span>
    </nav>
    <div class="flex justify-around items-center">
        <div class="font-PlayfairSC m-10 ">
            <p class="font-PlayfairSC text-5xl">OH NO!!</p>
            <span class="font-PlayfairSC text-5xl">ERROR</span>
            <span>Page not found</span><br><br>
            <a href="/"><button class="w-40 h-10 rounded-xl border border-solid text-white bg-blue-600 m-5 md:text-base text-sm">Go To Dashboard</button></a>
        </div>
        <img src="{{ asset('images/404.png') }}" alt="404" class="md:w-96 w-48">
    </div>
</body>

</html>