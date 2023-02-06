<!doctype html>
<html lang="en">

<head>

    <title>Todo App</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.3/font/bootstrap-icons.min.css" integrity="sha512-YFENbnqHbCRmJt5d+9lHimyEMt8LKSNTMLSaHjvsclnZGICeY/0KYEeiHwD1Ux4Tcao0h60tdcMv+0GljvWyHg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    @livewireStyles
    <style>
  @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;500&display=swap');
  .jso{
    font-family: 'Josefin Sans', sans-serif;
  }
  .fnt{
    font-family: 'Josefin Sans', sans-serif;
  }
</style>
</head>

<body>
    <div class="card w-50 mx-auto mt-4">
    <div class="card-header text-uppercase jso">TodoApp with laravel livewire</div>

        @livewire('todo')
    </div>

    @livewireScripts

</body>

</html>