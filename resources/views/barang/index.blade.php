@extends('layouts.main')
@section('container')

<div class="flex gap-5">
    <div class="relative overflow-y-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
                <tr>
                    <!-- <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                        Id Barang Masuk
                    </th> -->
                    <!-- <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                        Kode Barang Masuk
                    </th> -->
                    <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                        Kode Supplier
                    </th>
                    <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                        Tanggal Barang Masuk    
                    </th>
                    <th scope="col" class="px-20 py-8 bg-gray-50 dark:bg-gray-800">
                        Aksi
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($barangmasuk as $key)
                <tr class="border-b border-gray-200 dark:border-gray-700">
                    <!-- <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                        {{$key->id_masuk}}
                    </th>
                    <td class="px-6 py-4" >
                        {{$key->kode_barang}}
                    </td> -->
                    <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                        {{$key->id_supplier}}
                    </td>
                    <td class="px-6 py-4" >
                        {{$key->tanggal_masuk}}
                    </td>
                    
                    <!-- <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                        <a href="/barang/masuk/edit/{{$key->id_masuk}}">
                            <button type="button" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:focus:ring-yellow-900">Edit</button>
                        </a>
                        <a href="/barang/masuk/hapus/{{$key->id_masuk}}">
                        <button type="button" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Hapus</button> -->
                        <!-- </a>
                    </td> -->
                </tr>  
                @endforeach
            </tbody>
        </table>
    
    </div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
                <tr>
                    <!-- <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                        Nama Barang Keluar
                    </th>
                    <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                        Kode Barang Keluar
                    </th> -->
                    <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                        Kode Supplier Keluar
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
                @foreach($barangkeluar as $key)
               <tr class="border-b border-gray-200 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray 800">
                    {{$key->id_keluar}}
                </th>
                <td class="px-6 py-4" >
                {{$key->tanggal_keluar}}

                </td>
                <!-- <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                    {{$key->jumlah_keluar}}
                </td> -->
                <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                </td>
                <!-- <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800"> -->
                    <!-- <a href="/barang/keluar/edit/{{$key->id_keluar}}">
                        <button type="button" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:focus:ring-yellow-900">Edit</button>
                    </a>
                    <a href="/barang/keluar/hapus/{{$key->id_keluar}}">
                    <button type="button" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Hapus</button>
                    </a> -->
                </td>
            </tr>  
                @endforeach
            </tbody>
        </table>
    </div>

</div>



@endsection