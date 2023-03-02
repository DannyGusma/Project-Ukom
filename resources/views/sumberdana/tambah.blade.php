@extends('layouts.main')
@section('container')
<form action="/sb/simpan" method="POST">
@csrf
  <!-- <div class="mb-6">
    <label for="id_lokasi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Id Lokasi</label>
    <input type="num" name="id_lokasi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
  </div> -->
  <div class="mb-6">
    <label for="nama_sumber" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Sumber</label>
    <input type="text" name="nama_sumber" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
  </div>
  <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
</form>

@endsection