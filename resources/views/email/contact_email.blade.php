<!DOCTYPE html>
<html>
<head>
<title>BDS UET KSK</title>
</head>
<body>
<h1>Contact form details from bdsuet.com</h1>
<p>Hi, have a look at this message</p>
<p><strong>IP :   </strong>{{ $details['ip'] }}</p>
<p><strong>Adress :   </strong>{{ $details['adress'] }}</p>
<p><strong>Name :   </strong>{{ $details['name'] }}</p>
<p><strong>Mobile Number :  </strong>{{ $details['number'] }}</p>
@if (isset($details['email']))
<p><strong>Email :  </strong>{{ $details['email'] }}</p>
@endif
<p><strong>Message :    </strong>{{ $details['message'] }}</p>
<p>Thank you</p>
</body>
</html>