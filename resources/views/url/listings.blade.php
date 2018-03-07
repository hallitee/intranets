
<table class="table table-responsive table-dark table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Url</th>
      <th scope="col">Description</th>
      <th scope="col">Screenshot</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>      
    </tr>
  </thead>
  <tbody>
    @foreach($url as $l)
    <tr>
      <th scope="row">{{ $loop->iteration}}</th>
      <td>{{ $l->name }}</td>
      <td>{{ $l->url }}</td>
      <td>{{ $l->descr }}</td>
      <td><div class="thumbnail"><img src="{{asset("uploads/".$l->img1)}}" alt="{{$l->name}}" width="100" height="50"> </div></td>     
      <td><a href="{{ route('url.edit', $l->id) }}"><u>Edit</u></a></td>
      <td>
        {!! Form::open(['action' => array('linksController@destroy', $l->id),'method'=>'DELETE', 'files'=>true]) !!}
        <button type="submit"><u>Delete</u></a>

       {!! Form::close() !!}
      </td>         
    </tr>
    @endforeach
  </tbody>
</table> <!-- /table -->
{{ $url->links() }}