<?php require_once('./template/header.php') ?>
<?php require_once('./template/slidebar.php') ?>
<section>
<form class="max-w-sm" action="./gallery-process.php" method="post" enctype="multipart/form-data">
  <label for="file-input" class="sr-only">Choose file</label>
  <input multiple type="file" name="upload[]" id="file-input" class="block w-full border border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400
    file:bg-gray-50 file:border-0
    file:me-4
    file:py-3 file:px-4
    dark:file:bg-neutral-700 dark:file:text-neutral-400">
    <button type="submit" class="py-3 mt-4 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-gray-200 text-gray-500 hover:border-blue-600 hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:text-neutral-400 dark:hover:text-blue-500 dark:hover:border-blue-600">
  Upload
</button>
</form>   
</section>

<?php  require_once('./template/footer.php')?>