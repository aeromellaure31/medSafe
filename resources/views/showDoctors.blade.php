<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        $foreach($doctors as $doctor)
        <tr>
            {{$doctor->firstname}} 
        </tr>
       <a href="route('doctor.request',{{$doctor->id}})"><button> request for appointment</button></a>
        $endforeach 
    </table>
</body>
</html>