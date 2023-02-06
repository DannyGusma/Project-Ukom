@extends('layouts.main')
@section('container')
<!-- <form action="/barang/keluar/simpan" method="POST">
@csrf
  <div class="mb-6">
    <label for="id_barang" class="block mb-2 text-sm font-mediuam text-gray-900 dark:text-white">Id Barang Keluar</label>
    <input type="text" name="id_barang" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
  </div>
  <div class="mb-6">
    <label for="kode_barang" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kode Barang Keluar</label>
    <input type="text" name="kode_barang" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
  </div>
  <div class="mb-6">
    <label for="jumlah_keluar" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Total Barang</label>
    <input type="text" name="jumlah_keluar" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
  <div class="mb-6">
    <label for="tanggal_keluar" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Keluar</label>
    <input type="date" name="tanggal_keluar" class="bg-gray-50 border border-gray-300 date-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
  </div>
  <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
</form> --> 
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                    Nama Barang
                </th>
                <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                    Kode Barang
                </th>
                <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                    Supplier
                </th>
                <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                    Tanggal Masuk  
                </th>
                <th scope="col" class="px-20 py-8 bg-gray-50 dark:bg-gray-800">
                    Aksi
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $key)
            <tr class="border-b border-gray-200 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                    {{$key->id_masuk}}
                </th>
                <td class="px-6 py-4" >
                    {{$key->kode_barang}}
                </td>
                <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                    {{$key->id_supplier}}
                </td>
                <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                    {{$key->tanggal_masuk}}
                </td>
                <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                    <a href="/barang/keluar/{{$key->id_masuk}}">
                    <button type="button" class="focus:outline-none text-white bg-sky-500 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Pilih</button>
                    </a>
                </td>
            </tr>   
            @endforeach
        </tbody>
    </table>
   
</div>
@endsection
 