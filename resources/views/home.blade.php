<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style/style.css">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>BUDIOSKOP</title>
</head>


<body>
    <section class="px-8 sm:px-16 md:px-24 flex flex-col w-full h-100vh bg-landing">
        <img class="mt-12 w-36 sm:w-48 md:w-52 lg:w-56 xl:w-60" src="./image/logo.svg" alt="Logo.svg">
        <div class="mt-24 sm:mt-48 flex flex-col sm:space-y-12 w-full sm:w-2/3 xl:w-1/2">
            <h1 class="mb-8 sm:mb-0 text-3xl sm:text-5xl md:text-6xl 2xl:text-7xl text-yellow-300 leading-snug tracking-wide">Bring <span class="font-bold">Hollywood</span><br>To Your <span class="font-bold">Home</span></h1>
            <p class="mb-12 sm:mb-24 text-md sm:text-xl text-white">Budioskop will make you forget that you are sitting in a theather.</p>
            <div class="flex flex-col sm:flex-row space-y-6 sm:space-y-0 sm:space-x-16 lg:space-x-24 justify-between w-full md:w-3/4 lg:w-4/5">
                <a class="flex items-center justify-center h-12 sm:h-16 text-black bg-yellow-300 w-full sm:w-1/2 rounded-xl font-bold" href="{{ route('register') }}" >Sign Up</a>
                <a class="flex items-center justify-center h-12 sm:h-16 w-full sm:w-1/2 text-yellow-300 bg-transparent border-2 border-yellow-300 font-bold rounded-xl" href="{{ route('login') }}">Sign In</a>
            </div>
        </div>
    </section>
</body>
</html>



