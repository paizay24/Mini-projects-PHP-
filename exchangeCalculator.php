<?php require_once('./template/header.php') ?>
<?php require_once('./template/slidebar.php') ?>


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
                  <a class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:focus:text-blue-500" href="#">
                        Exchange Calculator
                  </a>
               

            </li>
      </ol>
      <h1 class=" text-center font-serif font-bold m-4 text-3xl">Exchange Calculator</h1>
      <?php
      $data = file_get_contents('http://forex.cbm.gov.mm/api/latest');
      $obj = json_decode($data);
      $rates = $obj->rates;

      ?>
      <form action="./exchange-process.php" method="post">
            <div class=" grid grid-cols-2 gap-3 p-3">
                  <div class=" grid col-span-full">
                        <div class="max-w">
                              <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white">Amount</label>
                              <input type="number" name="amount" id="input-label" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Enter Your Amount">
                        </div>
                  </div>
                  <div class=" grid col-span-1">
                        <div class="relative">
                              <select data-hs-select='{
      "placeholder": "From Currency",
      "toggleTag": "<button type=\"button\"></button>",
      "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-3 px-4 pe-9 flex text-nowrap w-full cursor-pointer bg-white border border-gray-200 rounded-lg text-start text-sm focus:border-blue-500 focus:ring-blue-500 before:absolute before:inset-0 before:z-[1] dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400",
      "dropdownClasses": "mt-2 z-50 w-full max-h-72 p-1 space-y-0.5 bg-white border border-gray-200 rounded-lg overflow-hidden overflow-y-auto dark:bg-neutral-900 dark:border-neutral-700",
      "optionClasses": "py-2 px-4 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-lg focus:outline-none focus:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800",
      "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><svg class=\"flex-shrink-0 size-3.5 text-blue-600 dark:text-blue-500\" xmlns=\"http:.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"20 6 9 17 4 12\"/></svg></span></div>"
    }' name="from_currency">
                                    <option for="">From Currency</option>
                                    <?php foreach ($rates as $key => $rate) : ?>
                                          <option value="<?= $key ?> - <?= $rate ?>"><?= $key ?></option>
                                    <?php endforeach ?>

                              </select>

                              <div class="absolute top-1/2 end-2.5 -translate-y-1/2">
                                    <svg class="flex-shrink-0 size-4 text-gray-500 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                          <path d="m7 15 5 5 5-5"></path>
                                          <path d="m7 9 5-5 5 5"></path>
                                    </svg>
                              </div>
                        </div>
                  </div>
                  <div class=" grid col-span-1">
                        <div class="relative">
                              <select data-hs-select='{
      "placeholder": "To Currency",
      "toggleTag": "<button type=\"button\"></button>",
      "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-3 px-4 pe-9 flex text-nowrap w-full cursor-pointer bg-white border border-gray-200 rounded-lg text-start text-sm focus:border-blue-500 focus:ring-blue-500 before:absolute before:inset-0 before:z-[1] dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400",
      "dropdownClasses": "mt-2 z-50 w-full max-h-72 p-1 space-y-0.5 bg-white border border-gray-200 rounded-lg overflow-hidden overflow-y-auto dark:bg-neutral-900 dark:border-neutral-700",
      "optionClasses": "py-2 px-4 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-lg focus:outline-none focus:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800",
      "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><svg class=\"flex-shrink-0 size-3.5 text-blue-600 dark:text-blue-500\" xmlns=\"http:.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"20 6 9 17 4 12\"/></svg></span></div>"
    }' name="to_currency">
                                    <option>To Currency </option>
                                    <?php foreach ($rates as $key => $rate) : ?>
                                          <option value="<?= $key ?> - <?= $rate ?>"><?= $key ?></option>
                                    <?php endforeach ?>
                              </select>

                              <div class="absolute top-1/2 end-2.5 -translate-y-1/2">
                                    <svg class="flex-shrink-0 size-4 text-gray-500 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                          <path d="m7 15 5 5 5-5"></path>
                                          <path d="m7 9 5-5 5 5"></path>
                                    </svg>
                              </div>
                        </div>
                  </div>

            </div>
            <div class=" flex  justify-between my-3 ">
                  <button type="submit" class="py-3 justify-center px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                        Calculate
                  </button>
                  <a href="./exchangeRecord.php">
                        <button type="button" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-gray-200 text-gray-500 hover:border-blue-600 hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:border-gray-700 dark:text-gray-400 dark:hover:text-blue-500 dark:hover:border-blue-600">
                              Records
                        </button>
                  </a>
            </div>

      </form>
</section>




















<?php require_once('./template/footer.php') ?>