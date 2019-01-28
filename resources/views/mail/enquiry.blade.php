<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" />
<title>Enquiry Form</title>
</head>
<body>
<div style="max-width:700px;min-width: 320px;margin:0 auto;border:solid 2px #fff;">
  <table width="100%" border="0" cellspacing="0" cellpadding="0" 
  style="padding:10px;border-bottom: solid 9px #85b540;">
    <tbody>
      <tr>
        <td><h1>Name</h1></td><td>{{ $data['name'] }}</td></tr>
        <tr><td><h1>Mobile</h1></td><td>{{ $data['mobile'] }}</td></tr>
        <tr><td><h1>Email</h1></td><td>{{ $data['email'] }}</td></tr>
        <tr><td><h1>Message</h1></td><td>{{ $data['message'] }}</td></tr>
      </tr>
    </tbody>
  </table>
    
</div>
 </div>
</div>
</body>
</html>