@extends('homepage')

@section('konten')
<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                Tambah Daftar Member
            </div>
            <div class="card-body">
                <br/>
                <br/>

                <form method="post" action="/member/store">

                    {{ csrf_field() }}

                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">ID Member <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="text" name="idmember" required="required" class="form-control ">

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
                            <input type="number" name="ktp" required="required" class="form-control ">

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
                            <input type="text" name="name" required="required" class="form-control ">

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
                            <input id="birthday" class="date-picker form-control" name="dob" placeholder="dd-mm-yyyy" type="text" required="required" type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
                                <script>
                                    function timeFunctionLong(input) {
                                        setTimeout(function() {
                                            input.type = 'text';
                                        }, 60000);
                                    }
                                </script>

                            @if($errors->has('dob'))
                            <div class="text-danger">
                                {{ $errors->first('dob')}}
                            </div>
                            @endif
                        </div>
                    </div>

                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Email <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="text" name="email" required="required" class="form-control ">

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
                            {{-- <input type="text" name="address" required="required" class="form-control "> --}}
                            <textarea class="form-control" rows="3" name="address"></textarea>
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
                            <input type="text" name="upline" required="required" class="form-control ">

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
                            <input type="text" name="firstproduct" required="required" class="form-control ">

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
                            <input id="birthday" class="date-picker form-control" name="joindate" placeholder="dd-mm-yyyy" type="text" required="required" type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
                                <script>
                                    function timeFunctionLong(input) {
                                        setTimeout(function() {
                                            input.type = 'text';
                                        }, 60000);
                                    }
                                </script>

                            @if($errors->has('joindate'))
                            <div class="text-danger">
                                {{ $errors->first('joindate')}}
                            </div>
                            @endif
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 offset-md-3">
                        <input type="submit" class="btn btn-success" value="Simpan">
                        <button class="btn btn-primary" type="reset">Reset</button>
                        <a href="/member" class="btn btn-primary">Kembali</a>
                    </div>

                </form>

            </div>
        </div>
    </div>
</body>
@endsection
