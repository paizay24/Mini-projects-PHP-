<?php

if (empty($_POST['ur_width']) || empty($_POST['ur_height'])) {
      header('Location:index.php');
}



?>


<?php require_once('./template/header.php') ?>
<?php require_once('./template/slidebar.php') ?>

<hr>
<section class="area-calculator max-w-[1000px] bg-gray-100">
      <ol class="flex items-center whitespace-nowrap">
            <li class="inline-flex items-center">
                  <a class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:focus:text-blue-500" href="#">
                        Home
                  </a>
                  <svg class="flex-shrink-0 mx-2 overflow-visible size-4 text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m9 18 6-6-6-6"></path>
                  </svg>
            </li>

            <li class="inline-flex items-center text-sm font-semibold text-gray-800 truncate dark:text-gray-200" aria-current="page">
                  <a class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:focus:text-blue-500" href="./index.php">
                        Area Calculator
                  </a>
                  <svg class="flex-shrink-0 mx-2 overflow-visible size-4 text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m9 18 6-6-6-6"></path>
                  </svg>

            </li>
            <li class="inline-flex items-center text-sm font-semibold text-gray-800 truncate dark:text-gray-200" aria-current="page">
                  <a class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:focus:text-blue-500" href="#">
                        Result
                  </a>
                  <svg class="flex-shrink-0 mx-2 overflow-visible size-4 text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m9 18 6-6-6-6"></path>
                  </svg>

            </li>
      </ol>
      <h1 class=" text-center font-serif font-bold m-4 text-3xl">Area Calculator</h1>
      <?php
      $height = $_POST['ur_height'];
      $width = $_POST['ur_width'];

      $area = $height * $width;

      $fileName = "saveRecord.txt";
      if (file_exists($fileName)) {
            touch($fileName);
      };

      $fileStream = fopen($fileName, 'a');
      fwrite($fileStream, "\n$width * $height = $area");

      fclose($fileStream);

      ?>
      <p class=" text-center text-2xl font-mono font-bold"><?= $area . ' ' . 'sqft' ?></p>
      <a href="./index.php">
            <button type="button" class=" mt-3 py-3 w-full justify-center px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                  Calculate Again
            </button>

      </a>
</section>
<?php  require_once('./template/footer.php')?>