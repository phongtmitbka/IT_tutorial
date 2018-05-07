@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Thay đổi thông tin</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('update_mypage') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="email" class="col-sm-4 col-form-label text-md-right">E-Mail Address</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control disabled" name="email" value="{{ $user->email }}" disabled>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-sm-4 col-form-label text-md-right">Tên</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') ?? $user->name }}" autofocus>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="enter-password" class="col-sm-4 col-form-label text-md-right">Thay đổi mật khảu</label>
                                <div class="col-md-6">
                                    <label class="checkbox">
                                        <input type="checkbox" name="enter-password" id="enter-password" class="col-sm-4 col-form-label text-md-right" @if(old('enter-password') == 'on') checked @endif>
                                        <span onclick="enterPassword()"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Mật khẩu</label>
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" @if(old('enter-password') != 'on') disabled @endif>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Gửi
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style type="text/css">
        input[type="checkbox"] {
            display: none;
        }

        label.checkbox {
            margin-top: 0;
            display: inline-block;
            font-size: 13px;
            margin-bottom: 0;
        }
        label.checkbox input + span {
            background:  #ffffff;
            position: relative;
            content: "";
            display: inline-block;
            border: 1px solid #ced4da;
            width: 28px;
            height: 28px;
            top: 5px;
            left: 0;
            margin-right: 8px;
        }
        label.checkbox input:checked + span {
            position: relative;
            background:  #ffffff;
        }

        label.checkbox input:checked + span:after {
            opacity: 0.9;
            content: '';
            position: absolute;
            width: 25px;
            height: 14px;
            top: 2px;
            left: 0;
            background: transparent;
            border: 5px solid #0090ff;
            border-top: none;
            border-right: none;
            transform: rotate(-45deg);
            -webkit-transform: rotate(-45deg);
            -moz-transform: rotate(-45deg);
            -o-transform: rotate(-45deg);
            -ms-transform: rotate(-45deg);
        }
    </style>
    <script>
      function enterPassword() {
        var checkBox = document.getElementById("enter-password");
        var password_field = document.getElementById("password");
        if (checkBox.checked){
          password_field.disabled = true;
        } else {
          password_field.disabled = false;
        }
      }
    </script>
@endsection
