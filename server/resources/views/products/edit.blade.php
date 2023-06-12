\@extends('layouts.admin')
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
                  <h3 class="card-title">Редактировать</h3>
                  <a href="{{ url()->previous() }}" class="btn btn-outline-light">Назад</a>
                </div>
              </div>
              <div class="card-body">
                <form action="{{ route('products.update', $product->id) }}" method="POST">
                  @csrf
                  @method('PUT')
                  <div class="form-group">
                    <label>Название</label>
                    <input type="text" name="title" class="form-control" value="{{ $product->title ?? '' }}"/>
                  </div>
                  <div class="form-group">
                    <label>Описание</label>
                    <input type="text" name="description" class="form-control" value="{{ $product->description ?? '' }}"/>
                  </div>
                  <div class="form-group">
                    <label>Контент</label>
                    <textarea name="content" class="form-control">value="{{ $product->content ?? '' }}"</textarea>
                  </div>
                  <div class="form-group">
                    <label>Цена</label>
                    <input type="text" name="price" class="form-control" value="{{ $product->price ?? '' }}"/>
                  </div>
                  <div class="form-group">
                    <label>Количество</label>
                    <input type="text" name="quantity" class="form-control" value="{{ $product->quantity ?? '' }}"/>
                  </div>
                  <div class="form-group">
                    <label class="custom-switch mt-2 pl-0">
                      <input type="checkbox" name="is_published" value="1" {{ $product->is_published == 1 ? 'checked' : '' }}  class="custom-switch-input">
                      <span class="custom-switch-indicator"></span>
                      <span class="custom-switch-description">Публиковать ?</span>
                    </label>
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
