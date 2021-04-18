<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie-edge">
<title>Contact us</title>
</head>
<body>
<h1> contact us anytime </h1>
<form action="{{route('contact')}}" method="post">
@csrf
<input type="text" name="name" placeholder="your name please"> 
<input type="email" name="email" placeholder="your email please"> 
<textarea name="message"  cols="30" rows="10" placeholder="your query" ></textarea>
<input type="submit" value="submit">
</form>
</body>
</html>