@extends('homepage')

@section('konten')
<div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
      <div class="x_title">
        <h2>Daftar Member</h2>
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
                <a href="/member/create" class="btn btn-primary">Tambah Baru</a>

                <form action="/member/search" method="GET">
                    <input type="text" name="search" placeholder="Cari Member .." value="{{ old('search') }}">
                    <input type="submit" value="SEARCH">
                  </form>
              {{-- <p class="text-muted font-13 m-b-30">
                KeyTable provides Excel like cell navigation on any table. Events (focus, blur, action etc) can be assigned to individual cells, columns, rows or all cells.
              </p> --}}

              <table id="datatable-keytable" class="table table-striped table-bordered" style="width:100%">
                <thead>
                  <tr>
                    <th>ID Member</th>
                    <th>KTP</th>
                    <th>Nama</th>
                    <th>Tgl Lahir</th>
                    <th>Email</th>
                    <th>No HP</th>
                    <th>Alamat</th>
                    <th>Upline</th>
                    <th>Produk Pertama</th>
                    <th>Tanggal Join</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($member as $p)
                    <tr>
                    <td>{{$p->idmember}}</td>
                    <td>{{$p->ktp}}</td>
                    <td>{{$p->name}}</td>
                    <td>{{$p->dob}}</td>
                    <td>{{$p->email}}</td>
                    <td>{{$p->phonenumber}}</td>
                    <td>{{$p->address}}</td>
                    <td>{{$p->upline}}</td>
                    <td>{{$p->firstproduct}}</td>
                    <td>{{$p->joindate}}</td>
                    <td>
                        <a href="/member/edit/{{ $p->id }}" class="btn btn-warning">Edit</a>
                        <a href="/member/remove/{{ $p->id }}" class="btn btn-danger">Hapus</a>
                    </td>
                    </tr>

                    @endforeach

                </tbody>
              </table>

                Halaman : {{ $member->currentPage() }} <br/>
                Jumlah Data : {{ $member->total() }} <br/>
                Data Per Halaman : {{ $member->perPage() }} <br/>


                {{ $member->links() }}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
