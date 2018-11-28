                        <tr>
                        	<td>{{ $park->id }}</td>
                            <td><a href="/parks/{{ $park->slug }}" title="{{ $park->name }}">{{ $park->name }}</td>
                            <td>
                            	@foreach($park->counties as $county)
                            		<a href="/counties/{{ $county->slug }}" title="{{ $county->name }}">{{ $county->name }}</a>{{ $loop->last ? '' : ', ' }}
                            	@endforeach
                            </td>
                            <td>
                            	{{ $park->acres }}
                            </td>
                        </tr>
