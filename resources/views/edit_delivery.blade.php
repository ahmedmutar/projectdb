@extends('homepage')
@section('konten')
<body>
    <div class="col-md-12 col-sm-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Ubah Alamat Pengiriman</h2>
                <ul class="nav navbar-right panel_toolbox">
                </ul>
                <div class="clearfix"></div>
              </div>
            <div class="card-body">

                <form method="post" action="/delivery/update/{{ $delivery->id }}">

                    {{ csrf_field() }}
                    {{ method_field('PUT') }}

                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nama Penerima <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="text" name="name" required="required" class="form-control " value=" {{ $delivery->name }}">

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
                            <input type="text" name="phonenumber" required="required" class="form-control " value=" {{ $delivery->phonenumber }}">

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
                            <input type="text" name="address" required="required" class="form-control " value=" {{ $delivery->address }}">

                            @if($errors->has('address'))
                            <div class="text-danger">
                                {{ $errors->first('address')}}
                            </div>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-success" value="Simpan">
                        <a href="/delivery" class="btn btn-primary">Kembali</a>
                    </div>

                </form>

            </div>
        </div>
    </div>
</body>
@endsection
