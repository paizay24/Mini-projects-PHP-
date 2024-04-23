<?php require_once('./template/header.php') ?>
<?php require_once('./template/slidebar.php') ?>
<h1 class="m-3  font-serif text-center text-3xl">Product Lists</h1>
<div class=" text-end">
      <a href="./product-create.php" type="button" class="py-3 px-4 mb-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
            Create
      </a>
</div>
<section class=" max-w-[1000] bg-gray-100 mx-auto">

      <div class="flex flex-col">
            <div class="-m-1.5 overflow-x-auto">
                  <div class="p-1.5 min-w-full inline-block align-middle">
                        <div class="overflow-hidden">
                              <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
                                    <thead>
                                          <tr>
                                                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Image</th>
                                                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Name</th>
                                                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Price</th>
                                                <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Rating</th>
                                                <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Action</th>

                                          </tr>
                                    </thead>

                                    <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                                          <?php
                                          $productFolder = "products";
                                          $products = array_filter(scandir($productFolder),fn($el) => $el !== '.' && $el !=='..');

                                          foreach($products as $product): 
                                                $data = file_get_contents($productFolder . '/' . $product);
                                                $obj = json_decode($data);


                                          ?>
                                          <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">
                                                      <img class="w-10 h-10  object-cover object-center rounded" src="<?= $obj->product_img ?>" alt="">
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">
                                                      <?= $obj->product_name ?>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">
                                                <?= $obj->product_price ?>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">
                                                <div class=" flex gap-1 ">
                                                <?php for ($i = 1; $i <= 5; $i++) : ?>
                                                
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 <?= $i <= $obj->rating ? 'fill-yellow-500' : 'fill-gray-300' ?> ">
                                                    <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" clip-rule="evenodd" />
                                                </svg>
                                                

                                            <?php endfor ?>
                                                </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                      <a href="./product-delete.php?file_name=<?= $product ?>" type="button" class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400">Delete</a>
                                                </td>
                                          </tr>
                                          <?php  endforeach ?>

                                    </tbody>
                              </table>
                        </div>
                  </div>
            </div>
      </div>
</section>


<?php require_once('./template/footer.php') ?>