@extends('layouts.main')
@section('container')
<a href="/barang/masuk/tambah">
<div class="flex flex-row-reverse">
        <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-yellow-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Tambah</button>
        </div>
</a>
<div class="relative overflow-y-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <tr class="text-xs text-gray-700 uppercase dark:text-gray-400">
                <td class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                    Id
                </td>
                <td class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                    Nama Barang
                </td>
                <td class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                    Total Barang
                </td>
                <td class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                    Kode Barang Masuk
                </td>
                <td class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                    Kode Supplier
                </td>
                <td class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                    Tanggal Barang Masuk    
                </td>
                <td class="px-20 py-8 bg-gray-50 dark:bg-gray-800">
                    Aksi
                </td>
            </tr>
            @foreach($data as $key)
            <tr class="border-b border-gray-200 dark:border-gray-700">
                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                    {{$key->id_masuk}}
                </td>
                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                    {{$key->nama_barang}}
                </td>
                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                    {{$key->total_barang}}  
                </td>
                <td class="px-6 py-4" >
                    {{$key->kode_barang}}
                </td>
                <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                    {{$key->id_supplier}}
                </td>
                <td class="px-6 py-4" >
                    {{$key->tanggal_masuk}}
                </td>
                <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                         <label for="/barang/masuk/edit/{{$key->id_masuk}}" class="btn btn-sm btn-warning btn-square btn-outline">
                         <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
                    </label>
                    <label for="/barang/masuk/hapus{{$key->id_masuk}}" class="btn btn-sm btn-error btn-square btn-outline">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                        </label>
                </td>
            </tr>  
            @endforeach
    </table>
   
</div>
@endsection