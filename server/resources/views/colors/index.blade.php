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
                 <h3 class="card-title">Список</h3>
                 <a href="{{ route('colors.create') }}" class="btn btn-primary">Создать</a>
               </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-striped text-nowrap">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Название</th>
                    <th>Дата создания</th>
                    <th>Действия</th>
                  </tr>
                  </thead>
                  <tbody>
                  @forelse($colors as $color)
                    <tr>
                      <td>{{ $color->id }}</td>
                      <td class="d-flex align-items-center">{{ $color->title }} <div style="width: 16px; margin-left: 10px; height: 16px; background: {{ $color->title }}"></div></td>
                      <td>{{ $color->created_at }}</td>
                      <td class="d-flex">
                        <a href="{{ route('colors.show', $color->id) }}" class="btn btn-primary"><i class="fas fa-eye"></i></a>
                        <a href="{{ route('colors.edit', $color->id) }}" class="btn btn-success mx-2"><i class="fas fa-edit"></i></a>
                        <form action="{{ route('colors.destroy', $color->id) }}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                        </form>
                      </td>
                    </tr>
                  @empty
                   <tr>
                     <td colspan="5"> <h2 class="text-center">Пусто...</h2> </td>
                   </tr>
                  @endforelse

                  </tbody>
                </table>
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
