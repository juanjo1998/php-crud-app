<form method="POST" enctype="multipart/form-data" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
   <!-- name -->
   <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
         Name
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="name" id="name" type="text" value="">
   </div>

   <!-- username -->
   <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
         Username
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="username" id="username" type="text"
         value="">
   </div>

   <!-- email -->
   <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
         Email
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="email" id="email" type="text"
         value="">
   </div>

   <!-- phone -->

   <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="phone">
         Phone
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="phone" id="phone" type="text"
         value="">
   </div>

   <!-- image -->

   <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="file">
         Image
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="file" id="file" type="file">
   </div>

   <div class="flex items-center justify-end">
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline cursor-pointer" type="submit">
         Submit
      </button>
   </div>
</form>