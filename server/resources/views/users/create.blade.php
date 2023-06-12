@extends('layouts.admin')
@section('content')

  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Пользователи</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="nav-icon fas fa-home"></i></a></li>
              <li class="breadcrumb-item active">Пользователи</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                  <h3 class="card-title">Создать</h3>
                  <a href="{{ url()->previous() }}" class="btn btn-outline-light">Назад</a>
                </div>
              </div>
              <div class="card-body">
                <form action="{{ route('users.store') }}" method="POST">
                  @csrf
                  <div class="form-group">
                    <label>Имя</label>
                    <input type="text" name="firstname" class="form-control" />
                  </div>
                  <div class="form-group">
                    <label>Фамилия</label>
                    <input type="text" name="lastname" class="form-control" />
                  </div>
                  <div class="form-group">
                    <label>Адресс</label>
                    <input type="text" name="address" class="form-control" />
                  </div>
                  <div class="form-group">
                    <label>Номер телефона</label>
                    <input type="text" name="phone" class="form-control" />
                  </div>
                  <div class="form-group">
                    <label>Почта</label>
                    <input type="text" name="email" class="form-control" />
                  </div>
                  <div class="form-group">
                    <label>Пароль</label>
                    <input type="text" name="password" class="form-control" />
                  </div>
                  <div class="form-group">
                    <label>Подтверждения паролья</label>
                    <input type="text" name="password_confirmation" class="form-control" />
                  </div>
                  <select name="gender">
                    <option value="">Пол</option>
                    <option value="1">Мужской</option>
                    <option value="2">Женской</option>
                  </select>
                  <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Сохранить</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

@endsection
