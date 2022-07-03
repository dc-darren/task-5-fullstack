@extends('layouts.app')

@section('content')
<div class="container">
    <a href="/addarticle" class="btn-primary rounded px-3 py-2 ms-auto">Add article</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Content</th>
                <th scope="col">Image</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $article)
                <tr>
                    <th scope="row">{{ $loop->index + 1 }}</th>
                    <td>{{ $article->title }}</td>
                    <td>{{ $article->content }}</td>
                    <td>{{ $article->image }}</td>
                    <td class="row">
                        <form method="DELETE" action="/articles/{{ $article->id }}">
                            <a href="updatearticle/{{ $article->id }}" class="btn-warning rounded px-3 py-2 w-100 mt-2 text-center" style="display: inline-block">Update</a>
                            <button type="submit" class="btn-danger rounded px-3 py-2 w-100">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
