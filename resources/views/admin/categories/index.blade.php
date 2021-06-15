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
                    <a href="{{ route('categories.create') }}">
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

                    @foreach($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->title }}</td>
                            <td>
                                <a href="{{ route('categories.edit', $category->id) }}">&#9999;</a>
                                <form method="post" action="{{ route('categories.destroy', $category->id) }}">
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
