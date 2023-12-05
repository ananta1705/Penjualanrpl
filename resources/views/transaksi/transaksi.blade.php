@extends('index')
    @section('content')
    
    <a href="/tambahtrans" type="button" class="btn btn-warning">tambah</a></td>
            <table class="table" align="center">
            <table class="table table-hover">
                <thead>
                  <tr>
                    
                    <th scope="col">nama barang</th>
                    <th scope="col">tgltransaksi</th>
                    <th scope="col">jumlah beli</th>
                    <th scope="col">jumlah bayar</th>
                    <th scope="col">stok barang</th>
                    <th scope="col">keterangan</th>
                      <th scope="col">OPSI</th>
                    <th></th>
                  </tr>
                </thead>
                @foreach ($trans as $item)
        <tr>
            <th>{{ $item->idbarang }}</th>
            <th>{{ $item->tgltransaksi }}</th>
            <th>{{ $item->jumlahbeli }}</th>
            <th>{{ $item->jumlahbayar }}</th>
            <th>{{ $item->stokbarang }}</th>
            <th>{{ $item->keterangan }}</th>
            <th>
                
            <a href="/hapus/{{ $item->idbarang}}" class="btn btn-danger delete" data-id=" ">DELETE</a>
            </th>
        </tr>
        @endforeach
              
               
              </table>
@endsection
               