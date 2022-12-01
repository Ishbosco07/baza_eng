@extends('branches.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>BAZA ENGINEER ONLINE</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('branches.create') }}"> Create New Branch</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Details</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($branches as $branch)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $branch->name }}</td>
            <td>{{ $branch->detail }}</td>
            <td>
                <form action="{{ route('branches.destroy',$branch->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('branches.show',$branch->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('branches.edit',$branch->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $branches->links() !!}
      
@endsection