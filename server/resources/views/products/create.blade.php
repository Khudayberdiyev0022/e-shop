@extends('layouts.admin')
@section('content')

  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Продукты</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="nav-icon fas fa-home"></i></a></li>
              <li class="breadcrumb-item active">Продукты</li>
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
                <form action="{{ route('products.store') }}" method="POST">
                  @csrf
                  <div class="form-group">
                    <label>Название</label>
                    <input type="text" name="title" class="form-control" />
                  </div>
                  <div class="form-group">
                    <label>Название</label>
                    <input type="text" name="description" class="form-control" />
                  </div>
                  <div class="form-group">
                    <label>Название</label>
                    <input type="text" name="content" class="form-control" />
                  </div>
                  <div class="form-group">
                    <label>Название</label>
                    <input type="text" name="price" class="form-control" />
                  </div>
                  <div class="form-group">
                    <label>Название</label>
                    <input type="text" name="quantity" class="form-control" />
                  </div>
                  <div class="form-group">
                    <label>Название</label>
                    <input type="text" name="quantity" class="form-control" />
                  </div>
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
