
<div class="container-fluid js-row-{{$post->id}}">
    <div class="row">
        <div class="col-md-2">
            User : {{ $post->user->name  }}<br/>
            Date : {{ $post->created_at }}
        </div>
        <div class="col-md-8">
            Title : {{ $post->title }}<br/>
            Content : {{ $post->content }}
        </div>
        <div class="col-md-2">
            <a href="/post/{{$post->id}}/edit" class="btn btn-default">Изменить</a>
            <span class="btn btn-warning js-delete" data-id="{{ $post->id }}">Удалить</span>
        </div>
    </div>
</div>
