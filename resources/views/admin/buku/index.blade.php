@extends('layouts.admin')
@section('title')
Buku
@endsection
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header text-white" style="background-color: #F26E00">Daftar Buku</div>
        <div class="card-body">
          <div class="table-responsive">
          <table class="table" id="example">
          <thead>
            <tr>
              <th>#</th>
              <th>Kode Buku</th>
              <th>Judul Buku</th>
              <th>Pengarang</th>
              <th>Kategori</th>
              <th colspan="2">Action</th>
            </tr>
          </thead>
          <tbody>
              <?php
              $i= 1;
              $buku = \App\daftar_buku::all();
              ?>
              @foreach($buku as $q)
            <tr>
              <th scope="row">{{$i++}}</th>
              <td>{{$q->kodebuku}}</td>
              <td>{{$q->judulbuku}}</td>
              <td>{{$q->pengarang}}</td>
              <td>{{$q->kategori}}</td>
              <td>
                <a href="{{url('admin/buku/edit/'.$q->id)}}" class="btn btn-outline-warning btn-sm">
                  <i class="fa fa-edit"></i>
                </a>
                 <a href="{{url('admin/buku/delete/'.$q->id)}}" onclick="return confirm('anda yakin untuk menghapusnya ?')" 
                 class="btn btn-outline-danger btn-sm">
                   <i class="fa fa-trash"></i>
                 </a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        </div>
        <hr>
        <li class="list-group-item float-right">
          <a href="{{url('admin/buku/pdf')}}" class="btn btn-outline-success">
            <i class="fa fa-file-export"> Export to PDF</i>
          </a>
        </li>
        <li class="list-group-item float-left">
          <a href="{{url('admin/buku/add')}}" class="btn btn-outline-primary">
            <i class="fa fa-plus"></i>
          </a>
        </li>
      </div>
    </div>
  </div>
</div>
</div>
@endsection