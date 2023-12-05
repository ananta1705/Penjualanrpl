@extends('index')
    @section('content')
    <a href="/tambah" type="button" class="btn btn-secondary">+</a></td>
            <table class="table" align="center">
            <table class="table table-striped table-hover">
                <thead>
                  <tr>
                    
                    <th scope="col">nama barang</th>
                    <th scope="col">harga barang</th>
                    <th scope="col">jumlah barang</th>
                      <th scope="col">OPSI</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>

                @foreach ($barang as $row)
                
                <tr>
                 <td>{{ $row->namabarang}}</td>
                 <td>{{ $row->hargabarang}}</td>
                 <td>{{ $row->jumalahbarang}}</td>
                 <td>
                 <a href="/edit/{{ $row->idbarang}}" class="btn btn-info " data-id=" ">EDIT</a>
                 <a href="/hapus/{{ $row->idbarang}}" class="btn btn-danger delete" data-id=" ">DELETE</a>
                      </td>
                </tr>
                @endforeach
                </tbody>
               
              </table>
@endsection
                 