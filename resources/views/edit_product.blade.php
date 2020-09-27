@extends('homepage')
@section('konten')
<body>
    <div class="col-md-12 col-sm-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Ubah Produk</h2>
                <ul class="nav navbar-right panel_toolbox">
                </ul>
                <div class="clearfix"></div>
              </div>
            <div class="card-body">

                <form method="post" action="/product/update/{{ $product->id }}">

                    {{ csrf_field() }}
                    {{ method_field('PUT') }}

                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">SKU <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="text" name="sku" required="required" class="form-control " value=" {{ $product->sku }}">

                            @if($errors->has('sku'))
                            <div class="text-danger">
                                {{ $errors->first('sku')}}
                            </div>
                            @endif
                        </div>
                    </div>

                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nama Produk <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="text" name="productname" required="required" class="form-control " value=" {{ $product->productname }}">

                            @if($errors->has('productname'))
                            <div class="text-danger">
                                {{ $errors->first('productname')}}
                            </div>
                            @endif
                        </div>
                    </div>

                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Point <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="text" name="point" required="required" class="form-control " value=" {{ $product->point }}">

                            @if($errors->has('point'))
                            <div class="text-danger">
                                {{ $errors->first('point')}}
                            </div>
                            @endif
                        </div>
                    </div>

                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Harga <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="text" name="price" required="required" class="form-control " value=" {{ $product->price }}">

                            @if($errors->has('price'))
                            <div class="text-danger">
                                {{ $errors->first('price')}}
                            </div>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-success" value="Simpan">
                        <a href="/product" class="btn btn-primary">Kembali</a>
                    </div>

                </form>

            </div>
        </div>
    </div>
</body>
@endsection
