

    <h1>Hello from user</h1>
 
@include ('inner')
    @foreach($users as $user)
    <h1>{{$user}}</h1>
    @endforeach


