<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>IPT DUMMY</title>
  <style>
    .mb{
      margin-bottom: 8px;
    }
  </style>
</head>
<body>

  <h1>Send Email</h1>

  <form action="{{url('/send-mail')}}" method="POST">
    {{ csrf_field() }}
    <div class="mb">
      <label for="email">Email To:</label> <br>
      <input type="email" name="email" id="email">
    </div>
    <div class="mb">
      <label for="subject">Subject:</label> <br>
      <input type="text" name="subject" id="subject">
    </div>
    <div class="mb">
      <label for="content">Message:</label> <br>
      <textarea name="content" id="content" cols="30" rows="10"></textarea>
    </div>
    <div class="mb">
      <button type="submit">Send Mail</button>
    </div>
  </form>

</body>
</html>