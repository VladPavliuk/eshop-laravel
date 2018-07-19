@extends('shop.layouts.main')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="mt-5 mb-5">
                <h2>Categories</h2>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Image</th>
                        <th scope="col">Category</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>
                                @if($category->image_path)
                                    <img src="{{ $category->image_path  }}" width="30" alt="">
                                @else
                                    <span>-</span>
                                @endif
                            </td>
                            <td>{{ $category->title }}</td>
                            <td>
                                <a href="{{ route('admin.categories.show', ['id' => $category->id]) }}"
                                   class="btn btn-info">Переглянути</a>
                            </td>
                        </tr>
                    @endforeach
                    <tr>
                    </tbody>
                </table>
                <div>
                    <a href="{{ route('admin.categories.create') }}" class="btn btn-lg btn-success pull-right">
                        Створити нову категорію
                    </a>
                </div>
            </div>
        </div>

    </div>
@endsection