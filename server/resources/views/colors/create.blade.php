@extends('layouts.admin')
@section('content')

  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Цвета</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="nav-icon fas fa-home"></i></a></li>
              <li class="breadcrumb-item active">Цвета</li>
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
                <form action="{{ route('colors.store') }}" method="POST">
                  @csrf
                  <div class="form-group">
                    <label>Выберите цвет из палитры</label>

                    <div class="input-group ">
                      <input type="text" class="form-control" name="title">
                    </div>
                    <div class="input-group my-colorpicker2 colorpicker-element" data-colorpicker-id="2">
                      <input type="text" class="form-control" name="hex_code" data-original-title="" title="" aria-describedby="popover117410">

                      <div class="input-group-append">
                        <span class="input-group-text"><i class="fas fa-square" style="color: rgb(192, 118, 118);"></i></span>
                      </div>
                    </div>
                    <!-- /.input group -->
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
