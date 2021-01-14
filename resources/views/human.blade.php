<h1>User Login </h1>
<form action="human" method="POST">
    @csrf
<input type="text" name="username" placeholder="Enter username" /><br /><br />
<input type="password" name="password" placeholder="Enter user password" /><br /><br />
<input type="submit" value="LOGIN" />
</form>