

<div>
	<form action="{{ route('register')}}" method="post">
		@csrf

		<input type="text" name="username" placeholder="username">
		<br>
		<br>
		<input type="email" name="email" placeholder="email">
		<br>
		<br>
		<input type="text" name="password" placeholder="password">
		<br>
		<br>
		<button type="submit">Register</button>
	</form>
</div>