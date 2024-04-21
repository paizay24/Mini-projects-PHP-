            <?php require_once('./template/header.php')?>
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
                        <a class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:focus:text-blue-500" href="#">
                                   Area Calculator
                              </a>
                              <svg class="flex-shrink-0 mx-2 overflow-visible size-4 text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m9 18 6-6-6-6"></path>
                              </svg>

                        </li>
                  </ol>
                  <h1 class=" text-center font-serif font-bold m-4 text-3xl">Area Calculator</h1>
                  <form action="./area.php" method="post" class="p-5">
                        <div>
                              <label for="ur_width">Your Width</label>
                              <input type="number" name="ur_width" id="ur_width" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                        </div>
                        <div class=" my-3">
                              <label for="ur_height">Your Height</label>
                              <input type="number" name="ur_height" id="ur_height" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                        </div>
                        <div class=" flex  justify-between ">
                        <button type="submit" class="py-3 justify-center px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                              Calculate
                        </button>
                        <a href="./record.php">
                        <button type="button" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-gray-200 text-gray-500 hover:border-blue-600 hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:border-gray-700 dark:text-gray-400 dark:hover:text-blue-500 dark:hover:border-blue-600">
                             Records
                        </button>
                        </a>
                        </div> 
                  </form>
            </section>
<?php require_once('./template/footer.php') ?>