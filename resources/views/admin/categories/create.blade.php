@extends('shop.layouts.main')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-8 offset-2">
                <div class="jumbotron">
                    <h2 class="display-6">Форма створення категорії</h2>
                    <span style="color: #ec6d23;">*</span> - обовя'зкове поле
                    <hr class="my-4">
                    <form method="POST" enctype="multipart/form-data" action="{{ route('admin.categories.store') }}">
                        <div class="form-group">
                            <label for="title">Назва категорії <span style="color: #ec6d23;">*</span></label>
                            <small class="form-text text-muted">Зверніть увагу! Клієнту назва категорії буде відображатись з великої букви.</small>
                            <input type="text"
                                   class="form-control"
                                   name="title"
                                   id="title"
                                   value="{{ old('title') }}"
                                   aria-describedby="emailHelp"
                                   placeholder="Нова категорія">
                            @if ($errors->has('title'))
                                <span class="text-danger"><strong>{{ $errors->first('title') }}</strong></span>
                            @endif
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <label for="photo">Обрати фото категорії</label>
                                <input type="file"
                                       class="form-control-file"
                                       value="{{ old('photo') }}"
                                       name="photo"
                                       id="photo">
                            </div>
                            @if ($errors->has('photo'))
                                <span class="text-danger"><strong>{{ $errors->first('photo') }}</strong></span>
                            @endif
                        </div>
                        <div>
                            <button type="submit" class="pull-right btn btn-primary btn-lg">
                                Створити категорію
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection