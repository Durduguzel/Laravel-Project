{{-- @if (count($student_list))
    @foreach ($student_list as $student)
        <li>{{$student}}</li><br>
    @endforeach
    {{$name}}
@endif --}}


@foreach ($students as $student)
        <li>{{$student}}</li><br>
    @endforeach