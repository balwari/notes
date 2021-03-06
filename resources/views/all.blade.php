@extends('layouts.app')

@section('content')
<div class="container-fluid">
<h3 style="text-align:center;">All Notes</h3>           
</div>

<table class="table table-hover">
          <thead>
    <tr>
      <th>#</th>
      <th>Title</th>
      <th>Description</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>            
    @foreach($notes as $note)
        <tr>
            <th>{{ $loop->iteration }}</th>
            <td>{{ $note->title }}</td>
            <td>{{ $note->description }}</td>
            <td>
                <div class="btn-group btn-group-sm" role="group" aria-label="Option">
                    <button type="button" class="btn btn-info" onClick="location.href='{{ route('updatenote', ['id'=>$note->id]) }}'">
                        Update
                    </button>
                    <button type="button" class="btn btn-danger" onClick="location.href='{{ route('delete', ['id'=>$note->id]) }}'">
                        Delete
                    </button>
                </div>
            </td>
        </tr>
    @endforeach
    
</tbody>
</table>
<div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
    
                    <div class="panel-body">
    
<form class="form-horizontal" method="POST" action="{{route('create')}}" >
            <div class="form-group"><input type="text" class="form-control" name="title" placeholder="Title" required></div>
            <div class="form-group"><textarea class="form-control" name="description" placeholder="Description" required></textarea></div>
            <div class="form-group" style="text-align:center;"><input type="submit" class="btn btn-success" value="Add New"></div>
            {{ $notes->links() }}
        {{ csrf_field() }}
</form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection