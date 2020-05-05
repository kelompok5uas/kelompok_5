@extends('member.main')

@section('main-content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Edit Profil</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-4 text-center">
                                    <i class="p-5 mt-md-5 bg-primary img-circle fas fa-user"></i>
                                    <div class="form-group mt-3">
                                        <label for="foto_profil">Pilih Foto Profil</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="foto_profil"
                                                name="foto_profil">
                                            <label class="custom-file-label" for="foto_profil">Choose file</label>
                                        </div>
                                    </div>
                                    <button class="btn btn-danger">Reset Foto</button>
                                </div>
                                <div class="col-md-2">
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Email</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            id="name" value="{{$email}}" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">@lang('auth.name_label')</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            id="name" name="name" placeholder="@lang('auth.name_placeholder')"
                                            value="{{$name}}" required>
                                        @error('name')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="jenis_kelamin">Jenis Kelamin</label>
                                        <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                                            <option value="">Pilih Jenis Kelamin</option>
                                            <option value="L">Laki - Laki</>
                                            <option value="P">Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat">Alamat</label>
                                        <input type="text" class="form-control @error('alamat') is-invalid @enderror"
                                            id="alamat" name="alamat" placeholder="Masukkan alamat anda" value=""
                                            required>
                                        @error('alamat')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="telp">No Telp</label>
                                        <input type="text" class="form-control @error('telp') is-invalid @enderror"
                                            id="telp" name="telp" placeholder="Masukkan no telp" value="" required>
                                        @error('telp')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit">Simpan Profil</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <h3 class="mt-2">Ubah Kata Sandi</h3>
                <div class="card">
                    <div class="card-body">
                        <form action="{{url('member/edit/password')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="password">Kata Sandi Sekarang</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror"
                                    id="password" name="password_now" placeholder="Masukkan kata sandi sekarang"
                                    required>
                                @error('password')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password">Kata Sandi Baru</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror"
                                    id="password" name="password" placeholder="@lang('auth.password_placeholder')"
                                    required>
                                @error('password')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password2">Konfirmasi Kata Sandi Baru</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror"
                                    id="password2" name="password_confirmation"
                                    placeholder="@lang('auth.confirm_password_placeholder')" required>
                                @error('password')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <button class="btn btn-primary" type="submit">Ubah Kata Sandi</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
@endsection