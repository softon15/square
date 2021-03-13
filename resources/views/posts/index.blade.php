@extends('layouts.app')

@section('content')
<!-- Main Content -->
<div class="container-lg">
    <div class="row">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-10"><h2>My blogs</h2></div>
                        <div class="col-sm-2">
                            <a class="btn btn-sm" href="{{ route('posts.create') }}"><i class="fa fa-plus"></i> New post</a>
                        </div>
                    </div>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width:25%">@sortablelink('title', 'Title')</th>
                            <th style="width:60%">Text</th>
                            <th style="width:15%">@sortablelink('created_at', 'Date')</th>
                            <!--<th style="width:15%">Actions</th>-->
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($posts as $post)
                            <tr>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->text }}</td>
                                <td>{{ $post->created_at->format("d-m-Y")  }}</td>
                                <!--<td>
                                    <form action="{{ route('posts.destroy',$post->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')      
                                        <button type="submit"><i class="icon-trash"></i></button>
                                    </form>
                                </td>-->
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection