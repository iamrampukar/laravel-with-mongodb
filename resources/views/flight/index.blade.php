<div class="list">
	<table border="1">
		@forelse($flightModel as $key => $value)
		<tr>
			<td>{{ ++$key }}</td>
			<td>{{ $value->full_name }}</td>
			<td>{{ $value->flight_name }}</td>
			<td>{{ $value->email }}</td>
			<td>{{ $value->age }}</td>
			<td>
				<form method="post" action="{{ route('flight.destroy',$value->id) }}">
				<a href="{{ route('flight.show',$value->id) }}">Show</a>
				<a href="{{ route('flight.edit',$value->id) }}">Edit</a>
				@csrf
				@method('DELETE')
				<button>
					DELETE
				</button>
				</form>
			</td>
		</tr>
		@empty
		<tr>
			<td colspan="6">No Data</td>
		</tr>
		@endforelse
	</table>
	<pre>
		<a href="{{ route('flight.create') }}">CREATE</a>
	</pre>
</div>