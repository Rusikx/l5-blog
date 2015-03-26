@extends('app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Add Blog</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="/blog/add_blog">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

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
