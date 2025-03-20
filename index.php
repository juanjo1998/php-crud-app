<?php
include __DIR__ . "/partials/header.php";
require_once __DIR__ . "/config/config.php";
require_once __DIR__ . "/helpers/users.php";

// get data
$data = index();
?>

<?php if (!empty($data)): ?>
   <table class="table-auto border-collapse border border-gray-200 shadow-md rounded-lg overflow-hidden w-full mx-auto">
      <thead>
         <tr class="bg-gray-200">
            <th class="border border-gray-200 px-4 py-2">Image</th>
            <th class="border border-gray-200 px-4 py-2">Name</th>
            <th class="border border-gray-200 px-4 py-2">Username</th>
            <th class="border border-gray-200 px-4 py-2">Email</th>
            <th class="border border-gray-200 px-4 py-2">Phone</th>
            <th class="border border-gray-200 px-4 py-2">Website</th>
            <th class="border border-gray-200 px-4 py-2">Actions</th>
         </tr>
      </thead>
      <tbody>
         <?php foreach ($data as $item): ?>
            <tr class="hover:bg-gray-100">
               <td class="border border-gray-200 px-4 py-2">
                  <?php if (file_exists(__DIR__ . $item['img_url'])): ?>
                     <img src="<?php echo BASE_URL . $item['img_url']; ?>" class="w-16 h-16">
                  <?php else: ?>
                     <img src="<?php echo BASE_URL . '/images/no-image-available.jpg' ?>" class="w-full h-full">
                  <?php endif; ?>
               </td>
               <td class="border border-gray-200 px-4 py-2">
                  <?php echo $item['name']; ?>
               </td>
               <td class="border border-gray-200 px-4 py-2">
                  <?php echo $item['username']; ?>
               </td>
               <td class="border border-gray-200 px-4 py-2">
                  <?php echo $item['email']; ?>
               </td>
               <td class="border border-gray-200 px-4 py-2">
                  <?php echo $item['phone']; ?>
               </td>
               <td class="border border-gray-200 px-4 py-2">
                  <?php echo $item['website']; ?>
               </td>
               <td class="border border-gray-200 px-4 py-2 text-center">
                  <div class="flex justify-center gap-2">
                     <a href="" class="bg-violet-500 hover:bg-violet-600 px-3 py-2 rounded text-white transition duration-200">View</a>
                     <a href="" class="bg-gray-500 hover:bg-gray-600 px-3 py-2 rounded text-white transition duration-200">Update</a>
                     <a href="delete.php" class="bg-red-500 hover:bg-red-600 px-3 py-2 rounded text-white transition duration-200">Delete</a>
                  </div>
               </td>
            </tr>
         <?php endforeach; ?>
      </tbody>
   </table>
<?php else: ?>
   <div class="text-center">
      <h2 class="text-2xl text-gray-500">Not records found</h2>
   </div>
<?php endif; ?>