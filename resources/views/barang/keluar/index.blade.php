@extends('layouts.main')
@section('container')
<a href="/barang/keluar/tambah">
<div class="flex flex-row-reverse">
        <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-yellow-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Tambah</button>
        </div>
</a>
<!-- <form action="/barang/keluar/search" method="GET">
                @csrf
                    <div class="form-control mb-2">
                        <div class="input-group ">
                        <input type="text" name="search" placeholder="Search…" class="input input-bordered"/>
                        <button class="btn btn-square" type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
                        </button>
                        </div>
                    </div>
            </form> -->
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                    Id
                </th>
                <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                    Kode Barang Keluar
                </th>
                <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                    Jumlah keluar
                </th>
                <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                    Tanggal Barang Keluar    
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
                    {{$key->id_keluar}}
                </th>
                <td class="px-6 py-4" >
                    {{$key->kode_barang}}
                </td>
                <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                    {{$key->jumlah_keluar}}
                </td>
                <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                    {{$key->tanggal_keluar}}
                </td>
                <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                    <!-- <a href="/barang/keluar/edit/{{$key->id_keluar}}">
                        <button type="button" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:focus:ring-yellow-900">Edit</button>
                    </a>
                    <button type="button" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Hapus</button> -->
                    <a href="/barang/keluar/hapus/{{$key->id_keluar}}">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"/>
                    </svg>
                    </a>
                </td>
            </tr>   
            @endforeach
        </tbody>
    </table>
   
</div>
@endsection