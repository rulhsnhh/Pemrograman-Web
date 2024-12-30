<?php
session_start();
if(!isset($_SESSION['login'])){
    header('location:index.php');
} else {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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
            },
            dropShadow: {
              shadowgreen: ['0 10px 8px rgb(#dcfce7)'],
            } 
        }
      }
    }
  </script>
</head>
<body>
    <nav class="justify-center items-center flex ">
      <div class="flex h-16 border-b-2 w-screen px-32 drop-shadow-md bg-green-50" style="justify-content: space-between;">
        <div class="flex justify-center items-center">
          <h1 class="text-xl">Retail Application</h1>
        </div>
        <div class="flex justify-center items-center space-x-10">
        <div class="">
          <a href="" class="">Home</a>
        </div>
        
        <div class="" id="select-menu">
          <div class="" id="select-btn">
            <span class="flex cursor-pointer" id="sBtn-text">Barang<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 pl-2">
        <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
      </svg></span>
          </div>
          <div class="rounded  border-gray-500 bg-green-100 p-4 w-48 absolute top-8 hidden" id="options">
            <li class="" id="option">
            <a href="" id="option" class="">Data Barang</a>
            </li>
            <li class="" id="option">
            <a href="" id="option" class="">Persediaan Barang</a>
            </li>
          </div>
        </div>

        <!-- <div class="" id="select-menu">
          <div class="" id="select-btn">
          <a href="" class="flex" id="sBtn-text">Barang<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 pl-2">
        <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
      </svg></a>
      <div class="rounded  border-gray-500 bg-green-100 p-4 w-48 absolute top-8 hidden" id="options">
        <a href="" id="option" class="">Data Barang</a>
        <a href="" id="option" class="">Persediaan Barang</a>
      </div>
      </div>
      </div> -->

        <div class="">
          <a href="" class="">Penjualan</a>
        </div>
        <div class="">
          <a href="" class="">Pengguna</a>
        </div>
        <div class="">
        <a href="" class="flex"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-7 pr-2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
      </svg>
        Nama Lengkap<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 pl-2">
        <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
      </svg></a>
        </div>
        </div>
      </div>
    </nav>
    <script src="script.js"></script>
</body>
</html>
<?php
}
?>