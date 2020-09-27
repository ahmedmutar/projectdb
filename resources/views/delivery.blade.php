@extends('homepage')

@section('konten')
<div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
      <div class="x_title">
        <h2>Daftar Alamat Pengiriman Barang</h2>
        <ul class="nav navbar-right panel_toolbox">
          {{-- <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li> --}}
          {{-- <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Settings 1</a>
                <a class="dropdown-item" href="#">Settings 2</a>
              </div>
          </li> --}}
          {{-- <li><a class="close-link"><i class="fa fa-close"></i></a> --}}
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <div class="row">
          <div class="col-sm-12">
            <div class="card-box table-responsive">
                <a href="/delivery/create" class="btn btn-primary">Tambah Baru</a>

                <form action="/delivery/search" method="GET">
                    <input type="text" name="search" placeholder="Cari Alamat .." value="{{ old('search') }}">
                    <input type="submit" value="SEARCH">
                  </form>
              {{-- <p class="text-muted font-13 m-b-30">
                KeyTable provides Excel like cell navigation on any table. Events (focus, blur, action etc) can be assigned to individual cells, columns, rows or all cells.
              </p> --}}

              <table id="datatable-keytable" class="table table-striped table-bordered" style="width:100%">
                <thead>
                  <tr>
                    <th>Nama Penerima</th>
                    <th>Nomor HP</th>
                    <th>Alamat</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($delivery as $p)
                    <tr>
                    <td>{{$p->name}}</td>
                    <td>{{$p->phonenumber}}</td>
                    <td>{{$p->address}}</td>
                    <td>
                        <a href="/delivery/edit/{{ $p->id }}" class="btn btn-warning">Edit</a>
                        <a href="/delivery/remove/{{ $p->id }}" class="btn btn-danger">Hapus</a>
                    </td>
                    </tr>

                    @endforeach

                </tbody>
              </table>

                Halaman : {{ $delivery->currentPage() }} <br/>
                Jumlah Data : {{ $delivery->total() }} <br/>
                Data Per Halaman : {{ $delivery->perPage() }} <br/>


                {{ $delivery->links() }}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
