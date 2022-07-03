@extends('layouts.app')

@section('content')
<div class="container">
    <a href="/addcategory" class="btn-primary rounded px-3 py-2 ms-auto">Add category</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <th scope="row">{{ $loop->index + 1 }}</th>
                    <td>{{ $category->name }}</td>
                    <td class="row">
                        <form method="DELETE" action="/categories/{{ $category->id }}">
                            <a href="updatecategory/{{ $category->id }}" class="btn-warning rounded px-3 py-2 w-100 mt-2 text-center" style="display: inline-block">Update</a>
                            <button type="submit" class="btn-danger rounded px-3 py-2 w-100">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
