@extends('home')
@section('content') 
<div class="container" >
    <div class="row">
        <div class="col-4">
        </div>
        <center>
            <table class="table table-bordered table-danger table-striped mt-5" style="width:90% ;">
                <tr>
                    <th>First Name</th>
                    <th>last name</th>
                    <th>Phone</th>
                    <th>Company</th>
                    <th>Email</th>
                    <th colspan="2"> Action</th>
                    
                </tr>
                @foreach($data as $datas)
                <tr>
                    <td>{{ $datas->firstname }}</td>
                    <td>{{ $datas->lastname }}</td>
                    <td>{{ $datas->company }}</td>
                    <td>{{ $datas->phone }}</td>
                    <td>{{ $datas->email }}</td>
                    <td><a class="btn btn-primary" href="{{ route('edit', $datas->id) }}">edit</a> </td>
                    <td><a  class="btn btn-danger"href="{{ route('delete', $datas->id) }}"> delete</a></td>
                    
                 </tr> 
                @endforeach
            </table>
            </center>
    
    </div> 
</div>
@endsection