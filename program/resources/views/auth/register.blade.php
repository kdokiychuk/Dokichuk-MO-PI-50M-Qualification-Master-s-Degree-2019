@extends('layout.layoutUser')
@section('contentPage')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Реєстрація</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name_users') ? ' has-error' : '' }}">
                            <label for="name_users" class="col-md-4 control-label">Им'я</label>

                            <div class="col-md-6">
                                <input id="name_users" type="text" class="form-control" name="name_users" value="{{ old('name_users') }}" required autofocus>

                                @if ($errors->has('name_users'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name_users') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('surname_users') ? ' has-error' : '' }}">
                            <label for="surname_users" class="col-md-4 control-label">Фамілія</label>

                            <div class="col-md-6">
                                <input id="surname_users" type="text" class="form-control" name="surname_users" value="{{ old('surname_users') }}">

                                @if ($errors->has('surname_users'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('surname_users') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('phone_users') ? ' has-error' : '' }}">
                            <label for="phone_users" class="col-md-4 control-label">Телефон</label>

                            <div class="col-md-6">
                                <input id="phone_users" type="text" class="form-control" name="phone_users" value="{{ old('phone_users') }}" required>

                                @if ($errors->has('phone_users'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone_users') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('address_users') ? ' has-error' : '' }}">
                            <label for="address_users" class="col-md-4 control-label">Адрес</label>

                            <div class="col-md-6">
                                <input id="address_users" type="text" class="form-control" name="address_users" value="{{ old('address_users') }}" required>

                                @if ($errors->has('address_users'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address_users') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Пароль</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Підтвердження пароля</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary" style="width: 100%;">
                                    Зареєструвати
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection