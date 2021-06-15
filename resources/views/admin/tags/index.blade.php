@extends('admin.layout.app')

@section('content')
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Листинг сущности</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="form-group pb-2">
                    <a href="{{ route('tags.create') }}">
                        <input type="submit" class="btn btn-info" value="Добавить">
                    </a>
                </div>
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Название</th>
                        <th>Действия</th>
                    </tr>
                    </thead>

                    @foreach($tags as $tag)
                        <tr>
                            <td>{{ $tag->id }}</td>
                            <td>{{ $tag->title }}</td>
                            <td><i class="bi bi-pencil"><a
                                        href="{{ route('tags.edit', $tag->id) }}">&#9999;</a></i>
                                <form method="post" action="{{ route('tags.destroy', $tag->id) }}">
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
@endsection
