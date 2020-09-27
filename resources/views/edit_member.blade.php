@extends('homepage')
@section('konten')
<body>
    <div class="col-md-12 col-sm-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Ubah Member</h2>
                <ul class="nav navbar-right panel_toolbox">
                </ul>
                <div class="clearfix"></div>
              </div>
            <div class="card-body">

                <form method="post" action="/member/update/{{ $member->id }}">

                    {{ csrf_field() }}
                    {{ method_field('PUT') }}

                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">ID Member <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="text" name="idmember" required="required" class="form-control " value=" {{ $member->idmember }}">

                            @if($errors->has('idmember'))
                            <div class="text-danger">
                                {{ $errors->first('idmember')}}
                            </div>
                            @endif
                        </div>
                    </div>

                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">KTP <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="text" name="ktp" required="required" class="form-control " value=" {{ $member->ktp }}">

                            @if($errors->has('ktp'))
                            <div class="text-danger">
                                {{ $errors->first('ktp')}}
                            </div>
                            @endif
                        </div>
                    </div>

                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nama <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="text" name="name" required="required" class="form-control " value=" {{ $member->name }}">

                            @if($errors->has('name'))
                            <div class="text-danger">
                                {{ $errors->first('name')}}
                            </div>
                            @endif
                        </div>
                    </div>

                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Tanggal Lahir <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                                <input class="form-control @error('dob') is-invalid @enderror" type="date" name="dob" id="dob" value="{{ $member->dob }}"> @error('dob')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                        </div>
                    </div>

                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Email <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="text" name="email" required="required" class="form-control " value=" {{ $member->email }}">

                            @if($errors->has('email'))
                            <div class="text-danger">
                                {{ $errors->first('email')}}
                            </div>
                            @endif
                        </div>
                    </div>

                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nomor HP <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input class="form-control @error('phonenumber') is-invalid @enderror" type="number" name="phonenumber" id="phonenumber" value="{{ $member->phonenumber }}"> @error('phonenumber')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror

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
                            <input type="text" name="address" required="required" class="form-control " value=" {{ $member->address }}">
                            {{-- <textarea type="text" class="form-control" rows="3" name="address" value=" {{ $member->address }}"></textarea> --}}
                            @if($errors->has('address'))
                            <div class="text-danger">
                                {{ $errors->first('address')}}
                            </div>
                            @endif
                        </div>
                    </div>

                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Upline <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="text" name="upline" required="required" class="form-control " value=" {{ $member->upline }}">

                            @if($errors->has('upline'))
                            <div class="text-danger">
                                {{ $errors->first('upline')}}
                            </div>
                            @endif
                        </div>
                    </div>

                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Produk Pertama <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="text" name="firstproduct" required="required" class="form-control " value=" {{ $member->firstproduct }}">

                            @if($errors->has('firstproduct'))
                            <div class="text-danger">
                                {{ $errors->first('firstproduct')}}
                            </div>
                            @endif
                        </div>
                    </div>

                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Tanggal Join <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input class="form-control @error('joindate') is-invalid @enderror" type="date" name="joindate" id="joindate" value="{{ $member->joindate }}"> @error('joindate')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-success" value="Simpan">
                        <a href="/member" class="btn btn-primary">Kembali</a>
                    </div>

                </form>

            </div>
        </div>
    </div>
</body>
@endsection
