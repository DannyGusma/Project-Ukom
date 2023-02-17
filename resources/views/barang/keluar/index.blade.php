@extends('layouts.main')
@section('container')
<a href="/barang/keluar/tambah">
<div class="flex flex-row-reverse">
<button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded " style="font-family:sytem-ui">
  + Tambah
</button>
        </div>
</a>
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                    Id
                </th>
                <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                    Barang Keluar
                </th>
                <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                    Total Barang
                </th>
                <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                    Kode Barang Keluar
                </th>
                <!-- <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                    Jumlah keluar
                </th> -->
                <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                    Tanggal Barang Keluar    
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $key)
            <tr class="border-b border-gray-200 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                    {{$key->id_keluar}}
                </th>
                <td class="px-6 py-4" >
                    {{$key->nama_barang}}
                </td>
                <td class="px-6 py-4" >
                    {{$key->total_barang}}
                </td>
                <td class="px-6 py-4" >
                    {{$key->kode_barang}}
                </td> 
                <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                    {{$key->tanggal_keluar}}
                </td>   
                <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                    <!-- <a href="/barang/keluar/edit/{{$key->id_keluar}}">
                        <button type="button" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:focus:ring-yellow-900">Edit</button>
                    </a>
                    <button type="button" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Hapus</button> -->
                    <!-- <a href="/barang/keluar/hapus/{{$key->id_keluar}}">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                    </a> -->
                </td>
            </tr>   
            @endforeach
        </tbody>
    </table>
   
</div>
@endsection 