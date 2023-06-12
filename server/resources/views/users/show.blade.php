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
                  <h3 class="card-title">Список</h3>
                  <a href="{{ route('users.edit', $user->id) }}" class="btn btn-success">Редактировать</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <dl class="row">
                  <dt class="col-4">ID</dt>
                  <dd class="col-8">{{ $user->id }}</dd>
                  <dt class="col-4">Имя</dt>
                  <dd class="col-8">{{ $user->firstname }}</dd>
                  <dt class="col-4">Фамилия</dt>
                  <dd class="col-8">{{ $user->lastname }}</dd>
                  <dt class="col-4">Дата создания</dt>
                  <dd class="col-8">{{ $user->created_at }}</dd>
                </dl>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
  </div>

@endsection
