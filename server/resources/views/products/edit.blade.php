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
                <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
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
                    <label for="exampleInputFile">Загрузить изоброжения</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="preview_image" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Загрузить</span>
                      </div>
                    </div>
                  </div>
                  <img src="{{ asset(  $product->preview_image ) }}" alt="Product image" class="img-responsive" style="width: 100px; height: 100px">

                  <div class="row">
                    <div class="col-4">
                      <div class="form-group">
                        <label>Категории</label>
                        <select name="category_id" class="categories form-control select2 select2-purple select2-hidden-accessible" data-dropdown-css-class="select2-purple" style="width: 100%;">
                          <option selected disabled value="0">Выберите категорию</option>
                          @foreach($categories as $category)
                            <option @if($product->category_id == $category->id) selected @endif value="{{ $category->id ?? '' }}">{{ $category->title ?? '' }}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="col-4">
                      <div class="form-group">
                        <label>Теги</label>
                        <div class="select2-purple">
                          <select name="tags[]" class="tags select2-hidden-accessible" multiple data-placeholder="Выберите тег" data-dropdown-css-class="select2-purple" style="width: 100%">
                            @foreach($tags as $tag)
                              <option @if(in_array($tag->id, $product->tags->pluck('id')->toArray())) selected @endif value="{{ $tag->id }}">{{ $tag->title ?? '' }}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-4">
                      <div class="form-group">
                        <label>Цвета</label>
                        <div class="select2-purple">
                          <select name="colors[]" class="colors select2-hidden-accessible" multiple data-placeholder="Выберите цвета" data-dropdown-css-class="select2-purple" style="width: 100%;" >
                            @foreach($colors as $color)
                              <option @if(in_array($color->id, $product->colors->pluck('id')->toArray())) selected @endif value="{{ $color->id }}">{{ $color->title ?? ''}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="form-group clearfix">
                      <div class="icheck-purple d-inline">
                        <input type="checkbox" name="is_published" value="1" {{ $product->is_published == 1 ? 'checked' : '' }} id="checkboxPrimary1"  >
                        <label for="checkboxPrimary1">
                          Публиковать ?
                        </label>
                      </div>
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
