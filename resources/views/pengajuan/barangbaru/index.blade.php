@extends('layouts.main')
@section('container')

<div class="overflow-x-auto">
    <a href="/pengajuan/barangbaru/tambah">
        <div class="flex flex-row-reverse">
                <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-yellow-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Tambah</button>
                </div>
        </a>
    <table class="table w-full">
      <!-- head -->
      <thead>
        <tr>
          <th>No</th>
          <th>Nama Barang</th>
          <th>Harga Satuan</th>
          <th>Jumlah Barang</th>
          <th>Total Harga</th>
          <th>Status</th>
          <th>Tanggal Pengajuan</th>

        </tr>
      </thead>
      <tbody>
        @php
            $no =1;
        @endphp
        @foreach ($data as $key)
            <tr>
                <th>{{ $no++ }}</th>
                <td>{{ $key->nama_barang }}</td>
                <td>{{ number_format($key->harga_satuan, 0, '.', '.') }}</td>
                <td>{{ $key->jumlah_barang }}</td>
                <td>{{ number_format($key->total_harga, 0, '.', '.') }}</td>
                <td>
                    <p class="badge badge-outline
                    {{ ($key->status_approval === 'setuju') ? 'badge-success' : '' }}
                    {{ ($key->status_approval === 'pending') ? 'badge-warning' : '' }}
                    {{ ($key->status_approval === 'tidak') ? 'badge-error' : '' }}
                    ">{{ $key->status_approval }}</p>
                </td>
                <td>{{ $key->tanggal_pengajuan }}</td>
            </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection
