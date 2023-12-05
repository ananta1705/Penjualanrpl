@extends('index')
    @section('content')
    
    <div class="row justify-content-center">
          <div class="col-8">
          <div class="card-body">
          <form action="/tambahtrans" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Tambah Barang</h4>
                    <br>
                    <form class="forms-sample">
                      <div class="form-group">
                  <div class="form-group">
                  
                 
                  <div class="mb-3">
            <label for="basic-url" class="form-label">Nama Barang</label>
            <div class="input-group">
              <select type="text" name="idbarang" class="form-control" id="idbarang" placeholder="Masukan Nama Barang">
              <option value="idbarang" disabled selected> Pilih Disini </option>
              @foreach ($barang as $item )
                  <option value ="{{ $item->idbarang  }}"> {{  $item->namabarang }}</option>  
              @endforeach 
              </select>
            </div>
        </div>    
        <!-- <div class="mb-3">
            <label for="basic-url" class="form-label">Tanggal Transaksi</label>
            <div class="input-group">
              <input type="date" name="tgltransaksi" class="form-control" id="tgltransaksi" placeholder="Masukan Tanggal">
            </div>
        </div>     -->
        <div class="mb-3">
            <label for="basic-url" class="form-label">Jumlah Beli</label>
            <div class="input-group">
              <input type="number" name="jumlahbeli" class="form-control" id="jumlahbeli" placeholder="Masukan Jumlah Beli">
            </div>
        </div>    
        <!-- <div class="mb-3">
            <label for="basic-url" class="form-label">Jumlah Bayar</label>
            <div class="input-group">
              <input type="number" name="jumlahbayar" class="form-control" id="jumlahbayar" >
            </div>
        </div>     -->
        <div class="mb-3">
            <label for="basic-url" class="form-label">Stok Barang</label>
            <div class="input-group">
              <input type="number" name="stokbarang" class="form-control" id="stokbarang" placeholder="Masukan Tanggal Transaksi">
            </div>
        </div>    
        <div class="mb-3">
            <label for="basic-url" class="form-label">Keterangan</label>
            <div class="input-group">
              <input type="text" name="keterangan" class="form-control" id="keterangan" placeholder="Masukan Keterangan">
            </div>
        </div>    
            <button type="submit" class="btn btn-primary">submit</button>    
    </form>
@endsection