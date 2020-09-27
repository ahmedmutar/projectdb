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

                <form method="post" action="/delivery/store">

                    {{ csrf_field() }}

                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nama Penerima <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="text" name="name" required="required" class="form-control ">

                            @if($errors->has('name'))
                            <div class="text-danger">
                                {{ $errors->first('name')}}
                            </div>
                            @endif
                        </div>
                    </div>

                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nomor HP <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="number" name="phonenumber" required="required" class="form-control ">

                            @if($errors->has('phonenumber'))
                            <div class="text-danger">
                                {{ $errors->first('phonenumber')}}
                            </div>
                            @endif
                        </div>
                    </div>

                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Alamat <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="text" name="address" required="required" class="form-control ">

                            @if($errors->has('address'))
                            <div class="text-danger">
                                {{ $errors->first('address')}}
                            </div>
                            @endif
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 offset-md-3">
                        <input type="submit" class="btn btn-success" value="Simpan">
                        <button class="btn btn-primary" type="reset">Reset</button>
                        <a href="/delivery" class="btn btn-primary">Kembali</a>
                    </div>

                </form>

            </div>
        </div>
    </div>
</body>
@endsection
