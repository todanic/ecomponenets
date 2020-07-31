<DOCTYPE html>
<html>
	<head>
	<title>Support</title>
	</head>
	<body>
		<div>
			<h3>First name: {{ $name }}</h3>
			<h3>Phone {{ $phone }}</h3>
			<h3>Country: {{ $country }}</h3>
			<h3>Email: {{ $email }}</h3>
			<h3>Message: {{ $messages }}</h3>
			@if(is_array($img))
				@foreach($img as $image)
					<img width="200px" src="<?php echo $message->embed(storage_path() . '/app/' . $image); ?>">
				@endforeach
			@elseif(!empty($img))
				<img width="200px" src="<?php echo $message->embed(storage_path() . '/app/' . $img); ?>">
			@endif
		</div>
	</body>
</html>