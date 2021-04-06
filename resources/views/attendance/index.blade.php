 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Student Attendance Report</h2>
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
            <th>Student ID</th>
            <th>Parent Number</th>
            <th>Status</th>
            
        </tr>
        @foreach ($students as $student)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $student->student_name }}</td>
            <td>{{ $student->student_id }}</td>
            <td>{{ $student->parent_number }}</td>
            <td>{{ $attendance->status }}</td>
        </tr>
        @endforeach
    </table>
@endsection
      