<form method="post" action="{{ route("flight.store") }}">
	@csrf
	@method('POST')
	Full Name: <input type="text" name="full_name"><br/>
	Flight Name: <input type="text" name="flight_name"><br/>
	Email: <input type="email" name="email"><br/>
	Age: <input type="number" name="age"><br/>
	<button>CREATE</button>
</form>
<pre>
	<a href="{{ route('flight.index') }}">Flight List</a>
</pre>