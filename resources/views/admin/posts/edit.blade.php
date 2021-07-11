@extends('admin.layout.app')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Изменить статью
                <small>приятные слова..</small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <form method="post" action="{{ route('posts.update', $post->id) }}" role="form"
                  enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <!-- Default box -->
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Обновляем статью</h3>
                        @include('admin.errors')
                    </div>
                    <div class="box-body">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Название</label>
                                <input type="text"
                                       class="form-control"
                                       id="exampleInputEmail1"
                                       name="title"
                                       placeholder=""
                                       value="{{ $post->title }}">
                            </div>

                            <div class="form-group">
                                <img src="{{ $post->getImage() }}" alt="" class="img-responsive" width="200">
                                <label for="exampleInputFile">Лицевая картинка</label>
                                <input type="file" id="exampleInputFile" name="image">

                                <p class="help-block">Какое-нибудь уведомление о форматах..</p>
                            </div>
                            <div class="form-group">
                                <label>Категория</label>
                                <select class="form-select" name="category_id"
                                        aria-label="Default select example">
                                    @foreach($categories as $key => $category)
                                        <option value="{{$key}}">{{$category}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Теги</label>
                                <select class="form-select" name="tags"
                                        aria-label="Default select example">
                                    @foreach($tags as $key => $tag)
                                        <option value="{{$key}}">{{$tag}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!-- Date -->
                            <div class="form-group">
                                <label>Дата:</label>

                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="date"
                                           class="form-control pull-right"
                                           id="datepicker"
                                           name="data"
                                           value="{{$post->data}}">
                                </div>
                                <!-- /.input group -->
                            </div>

                            <!-- checkbox -->
                            <div class="form-group">
                                <label>
                                    <input type="checkbox"
                                           class="minimal"
                                           name="is_featured"
                                           {{ !$post->is_featured ? "" : "checked" }}>
                                </label>
                                <label>
                                    Рекомендовать
                                </label>
                            </div>
                            <!-- checkbox -->
                            <div class="form-group">
                                <label>
                                    <input type="checkbox"
                                           name="status"
                                           class="minimal"
                                        {{ !$post->status ? "" : "checked" }}>
                                </label>
                                <label>
                                    Черновик
                                </label>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Полный текст</label>
                                <textarea name="content" id="" cols="30" rows="10"
                                          class="form-control"> {{ $post->description }} </textarea>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-warning pull-right">Изменить</button>
                    </div>
                    <!-- /.box-footer-->
                </div>
                <!-- /.box -->
            </form>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
