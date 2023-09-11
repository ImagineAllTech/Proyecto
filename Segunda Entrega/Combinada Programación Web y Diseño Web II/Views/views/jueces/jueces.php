<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CUK | Jueces</title>
    <link rel="shortcut icon" href="../../assets/img/Logotype.svg" type="image/x-icon">
    <link rel="stylesheet" href="../../assets/css/jueces.css">

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/cea33d77ef.js" crossorigin="anonymous"></script>
    <style media="all" id="fa-v4-font-face"></style>
</head>

<body class="h-screen overflox-x-hidden flex flex-col justify-center items-center bodai w-full">

    <div class="h-screen w-full md:w-7/12 overflow-y-hidden flex flex-col justify-start items-center">
        <header class="flex justify-center items-center w-full h-24 mb-24">
            <div class="content flex justify-between items-center w-10/12">
                <div class="w-16">
                    <img src="../../assets/img/Logotype.svg" class="w-full" alt="logo">
                </div>
                <nav class="flex justify-between items-center gap-16 text-4xl text-blue-900">
                    <a href="#" class="pointer hover:text-blue-700"><i class="fa-solid fa-circle-half-stroke"></i></a>
                    <a href="#" class="pointer hover:text-blue-700"><i class="fa-solid fa-question"></i></a>
                    <a href="#" class="pointer hover:text-blue-700"><i class="fa-solid fa-bars"></i></a>
                </nav>
            </div>
        </header>

        <main class="w-10/12">
            <form action="" class="flex flex-col items-center justify-center">
                <div class="form__group mb-16 relative">
                    <input type="number" id="custom-input" step="0.1" placeholder="5.0" max="10.0" min="5.0" class="w-full h-48 text-9xl px-7 font-poppins border-4 border-cyan-900 rounded-xl text-cyan-800">

                    <div class="custom-button restar text-cyan-800" onclick="decrementNumber()"><i class="fa-solid fa-minus"></i></div>
                    <div class="custom-button sumar text-cyan-800" onclick="incrementNumber()"><i class="fa-solid fa-plus"></i></div>
                </div>

                <div class="form__buttons flex justify-between items-center gap-4 w-full text-center">
                    <input type="submit" value="Enviar" class="w-5/12 bg-cyan-900 text-gray-50 tracking-wider font-bricolage font-bold py-2 w-full cursor-pointer hover:bg-cyan-700 text-xl rounded-full">
                    <input type="reset" value="Borrar" class="w-5/12 bg-cyan-900 text-gray-50 tracking-wider font-bricolage font-bold py-2 w-full cursor-pointer hover:bg-cyan-700 text-xl rounded-full">
                </div>

                <div class="descalificado fixed bottom-5 w-96">
                    <input type="button" value="Descalificado" class="bg-cyan-900 text-gray-50 tracking-wider w-full py-2 text-2xl font-bold rounded-full hover:bg-cyan-700 cursor-pointer">
                </div>
            </form>
        </main>

    </div>


    <script src="../../assets/js/jueces.js"></script>
</body>

</html>