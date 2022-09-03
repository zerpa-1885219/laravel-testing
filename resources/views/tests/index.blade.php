<a href="{{ route('tests.create') }}">Create</a>
@foreach ($tests as $test)   	
<li>{{ $test->name }} - {{ $test->done ? "DONE" : "TODO" }}</li> @endforeach