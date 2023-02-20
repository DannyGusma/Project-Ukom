@extends('layouts.main')
@section('container')
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-900 dark:text-gray-400 ">
        <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
            <tr>
                <!-- <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                    Id Lokasi
                </th> -->
                <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                    Nama Lokasi
                </th>
                <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                   Aksi
                </th>
            </tr>
        </thead>
        <tbody>
            
            @foreach($data as $key)
            <tr class="border-b border-gray-200 dark:border-gray-700">
                <!-- <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                    {{$key->id_lokasi}}
                </th> -->
                <td class="px-6 py-4">
                    {{$key->nama_lokasi}}
                </td>
                <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                    <a href="/lokasi/edit/{{$key->id_lokasi}}">
                    <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10"></path>
                        </svg>
                    </a>
                    <a href="/lokasi/hapus/{{$key->id_lokasi}}">
                    <button type="button" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Hapus</button>
                    </a>
                </td>
            </tr>  
            @endforeach
        </tbody>
        <a href="/lokasi/tambah">
        <div class="flex flex-row-reverse">
        <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-yellow-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-100">+ Tambah</button>
        </div>
    </a>
    </table>
   
</div>
@endsection