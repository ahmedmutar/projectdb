@extends('homepage')
@section('konten')
<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                Tambah Daftar Produk
            </div>
            <div class="card-body">
                <br/>
                <br/>

                <form method="post" action="/product/store">

                    {{ csrf_field() }}

                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">SKU <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="number" name="sku" required="required" class="form-control ">

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
                            <input type="text" name="productname" required="required" class="form-control ">

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
                            <input type="number" name="point" required="required" class="form-control ">

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
                            <input type="number" name="price" required="required" class="form-control ">

                            @if($errors->has('price'))
                            <div class="text-danger">
                                {{ $errors->first('price')}}
                            </div>
                            @endif
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 offset-md-3">
                        <input type="submit" class="btn btn-success" value="Simpan">
                        <button class="btn btn-primary" type="reset">Reset</button>
                        <a href="/product" class="btn btn-primary">Kembali</a>
                    </div>

                </form>

            </div>
        </div>
    </div>
</body>
@endsection
