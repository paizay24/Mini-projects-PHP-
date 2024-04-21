<?php
// if(empty($amount)){
//       header('Location:exchangeCalculator.php');
// };

$amount = $_POST['amount'];
$from_currency_arr = explode('-', $_POST['from_currency']);
$from_currency_name = $from_currency_arr[0];
$from_currency_rate = str_replace(',', '', $from_currency_arr[1]);

$to_currency_arr = explode('-', $_POST['to_currency']);
$to_currency_name = $to_currency_arr[0];
$to_currency_rate = str_replace(',', '', $to_currency_arr[1]);

$mmk = $amount * $from_currency_rate;
$exchange = number_format($mmk / $to_currency_rate, 2);

$fileName = "saveExchange.txt";

if(!file_exists($fileName)){
      touch($fileName);
};

$fileStream = fopen($fileName,'a');
fwrite($fileStream,"\n$amount $from_currency_name is equal to $exchange $to_currency_name");
fclose($fileStream);

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
                  <a class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:focus:text-blue-500" href="./exchangeCalculator.php">
                        Exchange Calculator
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
      <h1 class=" text-center font-serif font-bold m-4 text-3xl">Results</h1>
      <?php
    

      ?>
      <p class=" text-center text-2xl font-mono font-bold"><?= $exchange. ' ' . $to_currency_name ?></p>
      <a href="./exchangeCalculator.php">
            <button type="button" class=" mt-3 py-3 w-full justify-center px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                  Calculate Again
            </button>

      </a>
</section>
<?php require_once('./template/footer.php') ?>