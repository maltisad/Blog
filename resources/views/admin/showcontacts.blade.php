

<table >
  <tr>
    <th>Firstname</th>
    <th>Email</th>
    <th>City</th>
    <th>Text</th>
    <th>Time</th>
  </tr>
   @foreach($contacts as $contact)
   <tr>
    <td>{{$contact->fullname}}</td>
    <td>{{$contact->email}}</td>
    <td>{{$contact->city}}</td>
 	<td>{{$contact->content}}</td>
 	<td>{{$contact->created_at->diffForHumans()}}</td>
 </tr>
 	@endforeach
</table>


