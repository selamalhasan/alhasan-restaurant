<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    @include("admin.admincss")
  </head>
  <body>
    <div class="container-scroller">

    @include("admin.navbar")
    <div style="position: relative; top: 60px; right: -200;">
        <table>
            <tr>
                <th style="padding: 50px">Name</th>
                <th style="padding: 50px">Email</th>
                <th style="padding: 50px">Phone</th>
                <th style="padding: 50px">Data</th>
                <th style="padding: 50px">Time</th>
                <th style="padding: 50px">Message</th>
            </tr>
            @foreach ($data as $data)
            <tr align="center">
                <td>{{$data->name}}</td>
                <td>{{$data->email}}</td>
                <td>{{$data->phone}}</td>
                <td>{{$data->data}}</td>
                <td>{{$data->time}}</td>
                <td>{{$data->message}}</td>
            </tr>
            @endforeach
        </table>
    </div>
    </div>
    @include("admin.adminscript")

  </body>
</html>
