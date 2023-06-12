\@extends('layouts.admin')
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
                  <h3 class="card-title">Редактировать</h3>
                  <a href="{{ url()->previous() }}" class="btn btn-outline-light">Назад</a>
                </div>
              </div>
              <div class="card-body">
                <form action="{{ route('users.update', $user->id) }}" method="POST">
                  @csrf
                  @method('PUT')
                  <div class="form-group">
                    <label>Название</label>
                    <input type="text" name="title" class="form-control" value="{{ $user->firstname ?? '' }}" />
                  </div>
                  <div class="form-group">
                    <label>Название</label>
                    <input type="text" name="title" class="form-control" value="{{ $user->lastname ?? '' }}" />
                  </div>
                  <div class="form-group">
                    <label>Название</label>
                    <input type="text" name="title" class="form-control" value="{{ $user->address ?? '' }}" />
                  </div>
                  <div class="form-group">
                    <label>Название</label>
                    <input type="text" name="title" class="form-control" value="{{ $user->age ?? '' }}" />
                  </div>
                  <div class="form-group">
                    <label>Название</label>
                    <input type="text" name="title" class="form-control" value="{{ $user->phone ?? '' }}" />
                  </div>
                  <div class="form-group">
                    <label>Название</label>
                    <input type="text" name="title" class="form-control" value="{{ $user->email ?? '' }}" />
                  </div>
                  <select name="gender">
                    <option value="{{ $user->gender == 1  }}">Мужской</option>
                    <option value="{{ $user->gender == 2  }}">Женской</option>
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
