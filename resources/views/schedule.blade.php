@extends('layout') 
@section('main')
<div class="col-md-12">

    <a href="/create_schedule">Add Schedule</a>
    <div class="table-responsive">
        <table class="table table-bordered table-condensed table-striped">
            <thead>

                <th>ID</th>
                <th>EMAIL</th>
                <th>Start Time</th>
                <th>End Time</th>
            </thead>

            <tbody>
                @foreach($data2 as $row)
                <tr>

                    <td>{{$row->id }}</td>
                    <td>{{$row->email }}</td>
                    <td>{{$row->start_time }}</td>
                    <td>{{$row->end_time }}</td>
                    <td><a href="schedule/{{$row->id}}">Delete</a></td>



                </tr>
                @endforeach
            </tbody>

        </table>
    </div>
    <div>
        <a href="/logout">Log Out </a>
        
    </div>
</div>

@endsection