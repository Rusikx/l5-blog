@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Список блогов пользователя {{ $user }}</div>

				<div class="panel-body">
                    <table class="table table-hover">
                        <thead>
                            <tr class="success">
                                <th>id</th>
                                <th>Заголовок</th>
                                <th>Текст</th>
                                <th>Активность</th>
                                <th>Дата создания</th>
                                <th>Комментарии</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($comments as $comment)
                                <tr class="success">
                                    <td>{{ $comment->id }}</td>
                                    <td>{{ $comment->title }}</td>
                                    <td>{{ $comment->text }}</td>
                                    <td>{{ $comment->active }}</td>
                                    <td>{{ $comment->created_at }}</td>
                                </tr>
                            @endforeach
                        <tbody>
                    </table>
				</div>
			</div>
		</div>
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Add Blog</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="/comments/add_comments">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="id_blog" value="{{ $id_blog }}">

                        <div class="form-group">
                            <label class="col-md-3 control-label">Name Blog</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Title</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="title">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Text</label>
                            <div class="col-md-6">
                                <!--input type="text" class="form-control" name="title"-->
                                <textarea class="form-control" name="text"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-2 col-md-offset-3">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="active" />Active
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-3">
                                <button type="submit" class="btn btn-primary" style="margin-right: 15px;">
                                    Create Blog
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
	</div>
</div>
@endsection