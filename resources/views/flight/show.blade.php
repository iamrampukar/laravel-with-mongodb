<pre>
	Full Name: {{ $flight->full_name }}
	Flight Name: {{ $flight->flight_name }}
	Email: {{ $flight->email }}
	Age: {{ $flight->age }}
	<a href="{{ route('flight.index') }}">Flight List</a> || <a href="{{ route('flight.create') }}">CREATE</a>

</pre>