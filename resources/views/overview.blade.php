<h2>Students</h2>
@foreach($students as $student)
<ul>
    <li>{{ $student->firstName }}</li>
    <li>{{ $student->lastName }}</li>
    <li>{{ $student->created_at }}</li>
    <li>{{ $student->updated_at }}</li>
</ul>
@endforeach
</div>
