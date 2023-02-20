@extends('layouts.main')
@section('container')

<div class="flex gap-5">
    <div class="relative overflow-y-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                        Nama Barang 
                    </th>
                    <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                        Kode Barang Masuk
                    </th>
                    <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                        Kode Supplier
                    </th>
                    <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                        Tanggal Barang Masuk    
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($barangmasuk as $key)
                <tr class="border-b border-gray-200 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                        {{$key->nama_barang}}
                    </th>
                    <td class="px-6 py-4" >
                        {{$key->kode_barang}}
                    </td> 
                    <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                        {{$key->id_supplier}}
                    </td>
                    <td class="px-6 py-4" >
                        {{$key->tanggal_masuk}}
                    </td>
                </tr>  
                @endforeach
            </tbody>
        </table>
    
    </div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                        Nama Barang
                    </th>
                    <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                        Kode Supplier Keluar
                    </th>
                    <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                        Tanggal Barang Keluar    
                    </th>
                    <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                      Total Barang
                </th>
                </tr>
            </thead>
            <tbody>
                @foreach($barangkeluar as $key)
               <tr class="border-b border-gray-200 dark:border-gray-700">
               <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                    {{$key->nama_barang}}
                </th>
               <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                    {{$key->kode_barang}}
                </td>
               <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                    {{$key->tanggal_keluar}}
                </td>
                <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                    {{$key->total_barang}}  
                </td>
                <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                </td>
                </td>
            </tr>  
                @endforeach
            </tbody>
        </table>
    </div>

</div>



@endsection