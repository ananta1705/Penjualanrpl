@extends('index')
@section('content')
<div class="row justify-content-center">
          <div class="col-8">
          <div class="card-body">
          <form action="/edit/{{ $crud->idbarang}}/update" method="POST" enctype="multipart/form-data">
            @csrf
              <div class="row">
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Edit Barang</h4>
                    <br>
                    <form class="forms-sample">
                      <div class="form-group">
                  <div class="form-group">
                  
                  <div class="form-group">
                    <h5 for="exampleInputPassword1">nama barang</h5>
                    <input type="txt" name="namabarang" id="namabarang" class="form-control" value="{{$crud->namabarang}}"  id="exampleInputnokwh" aria-describedby="no kwh">
                    <br>
                  </div>
                  <div class="form-group">
                    <h5 for="exampleInputPassword1">harga</h5>
                    <input type="text" name="hargabarang" id="hargabarang" class="form-control"  value="{{$crud->hargabarang}}" id="exampleInputnokwh" aria-describedby="no kwh">
                  </div>
                  <br>
                  <div class="form-group">
                    <h5 for="exampleInputPassword1">jumalahbarang</h5>
                    <input type="txt" name="jumalahbarang" id="jumalahbarang" class="form-control" value="{{$crud->jumalahbarang}}"  id="exampleInputnokwh" aria-describedby="no kwh">
                  </div>
                  <br>
                  <div class="card-footer">
                <div class="row">
                    <div class="col-8">
                        </br>
                          <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                          </div>
                      </div>
                    </div>
                  </div>
            </div>
          </form>
          </div>
  
          

          @endsection
