<form method="post" action="{{ route("flight.update",$flight->id) }}">
	@csrf
	@method('PUT')
	Full Name: <input type="text" name="full_name" value="{{ old('full_name',$flight->full_name) }}"><br/>
	Flight Name: <input type="text" name="flight_name" value="{{ old('flight_name',$flight->flight_name) }}"><br/>
	Email: <input type="email" name="email" value="{{ old('email',$flight->email) }}"><br/>
	Age: <input type="number" name="age" value="{{ old('age',$flight->age) }}"><br/>
	<button>CREATE</button>
</form>
<pre>
	<a href="{{ route('flight.index') }}">Flight List</a>
</pre>