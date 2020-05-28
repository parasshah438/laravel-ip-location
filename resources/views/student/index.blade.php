@extends('layouts.default')

@section('content')
<div class="container">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                </div>
                <div class="col-sm-5">
					<h2><b>Student</b></h2>
				</div>
            </div>
        </div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>						
					<th>Email</th>
					<th>Mobile</th>
                    <th>Ip Address</th>
                    <th>Created at</th>
                </tr>
            </thead>
            <tbody>
                @if(count($data))
                @foreach($data as $student)
                <tr>
                    <td>{{$student->id}}</td>
                    <td>{{ucfirst($student->name)}}</td>
                    <td>{{$student->email}}</td>                        
                    <td>{{$student->mobile}}</td>
                    <td> <a href="{{route('student.show', $student->ip_address)}}">{{$student->ip_address}}</a></td>
                    <td>{{$student->created_at->diffForHumans()}}</td>
                </tr>
                @endforeach
                @else
                <tr>
                    <td colspan="10" align="center">No Records Found</td>
                </tr>
                @endif
            </tbody>
        </table>
        @if(count($data))
		<div class="clearfix">
             <div class="hint-text">Showing <b>{{ $data->lastItem() }}</b> out of <b>{{ $data->total() }}</b> entries</div>
                {{$data->links("pagination::bootstrap-4")}}
        </div>
        @endif
    </div>
</div>     
@endsection                              		                            