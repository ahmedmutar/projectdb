@extends('homepage')

@section('konten')
<div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
      <div class="x_title">
        <h2>Daftar Produk</h2>
        <ul class="nav navbar-right panel_toolbox">
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <div class="row">
          <div class="col-sm-12">
            <div class="card-box table-responsive">
                <a href="/product/create" class="btn btn-primary">Input Produk Baru</a>

              <form action="/product/search" method="GET">
                <input type="text" name="search" placeholder="Cari Product .." value="{{ old('search') }}">
                <input type="submit" value="SEARCH">
              </form>

              <table id="datatable-keytable" class="table table-striped table-bordered" style="width:100%">
                <thead>
                  <tr>
                    <th>SKU</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Point</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($product as $p)
                    <tr>
                    <td>{{$p->sku}}</td>
                    <td>{{$p->productname}}</td>
                    <td>Rp {{$p->price}}</td>
                    <td>{{$p->point}}</td>
                    <td>
                        <a href="/product/edit/{{ $p->id }}" class="btn btn-warning">Edit</a>
                        <a href="/product/remove/{{ $p->id }}" class="btn btn-danger">Hapus</a>
                    </td>
                    </tr>

                    @endforeach

                </tbody>
              </table>
              <br/>
                Halaman : {{ $product->currentPage() }} <br/>
                Jumlah Data : {{ $product->total() }} <br/>
                Data Per Halaman : {{ $product->perPage() }} <br/>


                {{ $product->links() }}

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
