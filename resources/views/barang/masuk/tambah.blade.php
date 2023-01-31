@extends('layouts.main')
@section('container')
<form action="/barang/masuk/simpan" method="POST">
@csrf
  <!-- <div class="mb-6">
    <label for="id_masuk" class="block mb-2 text-sm font-mediuam text-gray-900 dark:text-white">Nama Barang Masuk</label>
    <input type="text" name="id_masuk" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
  </div> -->
  <div class="mb-6">
    <label for="kode_barang" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kode Barang</label>
    <input type="text" name="kode_barang" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
  </div>
  <div class="mb-6">
  
    <label for="id_supplier" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Supplier</label>
    <select class="select select-bordered w-full max-w-xs" name="id_supplier" required>
                        <option disabled selected>-- Pilih Supplier --</option>
                        @foreach ($getspr as $item)
                            <option value="{{ $item->id_supplier }}" {{ old('id_supplier') == $item->id_supplier ? 'selected' : null}}>{{ $item->nama_supplier }}</option>
                        @endforeach
                    </select>
    <div class="my-6">
    <label for="tanggal_masuk" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Masuk</label>
    <input type="date" name="tanggal_masuk" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
  </div>
  <button type="submit" class="text-black bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
</form>

@endsection