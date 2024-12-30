<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retail - Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <script>
    tailwind.config = {
      theme: {
        extend: {
            fontFamily: {
                inter: ['Inter'],
            } 
        }
      }
    }
  </script>
</head>
<body class="bg-neutral-300">
    <div class="flex justify-center items-center h-screen">
        <div class="border p-8 bg-white rounded-md drop-shadow-lg">
            <div class="mb-2">
                <h1 class="font-semibold text-center text-xl">Retail Application</h1>
                <hr class="my-4">
            </div>
            <div class="text-center text-red-700 text-sm my-2">
                <?php
                if(isset($_SESSION['pesan'])){
                    echo $_SESSION['pesan'];
                    session_unset();
                }
                ?>
            </div>
            <form action="login.php" class="" method="post">
                <div class="">
                    <label for="username" class="text-base ">Username</label> <br>
                    <input type="text" class="border-solid border-slate-300 border-2 rounded-md my-2 w-64 h-9 pl-2" name="username" required>
                </div>
                <div class="">
                    <label for="password" class="text-base ">Password</label> <br>
                    <input type="password" class="border-solid border-slate-300 border-2 rounded-md my-2 w-64 h-9 pl-2" name="password" required>
                </div>
                <div class="mt-2">
                    <button class="border-solid bg-green-600 text-white rounded-md w-64 h-9 hover:drop-shadow-xl hover:transition delay-75 duration-300 ease-in-out hover:bg-green-700">Login</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>