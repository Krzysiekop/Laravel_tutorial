@extends('layout')

@section('content')

  <table class="table table-hover">
        <tr>
            <th>ID</th>
            <th>TITLE</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>
        @foreach($pages as $page)
            <tr>
                <td>{{ $page->id }}</td>
                <td>{{ $page->title  }}</td>
                <td><a class="btn btn-info" href="">Edit</a></td>
                <td>
                    
                    <button class="btn btn-danger">Delete</button>
                </td>
            </tr>
        @endforeach
    </table>
  {{ $pages->links() }}
@endsection('content')
