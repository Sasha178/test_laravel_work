@extends('admin.layout.app')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Листинг сущности</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="form-group">
                            <a href="{{ route('posts.create') }}" class="btn btn-success">Добавить</a>
                        </div>
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Название</th>
                                <th>Категория</th>
                                <th>Теги</th>
                                <th>Картинка</th>
                                <th>Действия</th>
                            </tr>
                            </thead>
                            @foreach($posts as $post)
                                <tr>
                                    <td>{{$post->id}}</td>
                                    <td>{{$post->title}}</td>
                                    <td>{{$post->getCategoryTitle()}}</td>
                                    <td>{{ $post->getTagsTitles() }}</td>
                                    <td>
                                        <img src="{{$post->getImage()}}" alt="" class="img-responsive" width="150">
                                    </td>
                                    <td><i class="bi bi-pencil"><a
                                                href="{{ route('posts.edit', $post->id) }}">&#9999;</a></i>
                                        <form method="post" action="{{ route('posts.destroy', $post->id) }}">
                                            @method('delete')
                                            @csrf
                                            <button class="delete-task" type="submit">&#10005;</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
