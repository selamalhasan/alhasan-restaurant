<!DOCTYPE html>
<html>
<head>
        <title>
        </title>
</head>
<body>
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

            <div style="position: relative; top: 60px; right: -150px">
                <table >
                    <tr>
                        <th style="padding: 75px">Ad</th>
                        <th style="padding: 75px">Email</th>
                        <th style="padding: 75px">Action</th>
                    </tr>

                    @foreach ($data as $data )
                    <tr align="center">
                        <td>{{$data->name}}</td>
                        <td>{{$data->email}}</td>

                        @if ($data->usertype=="0")
                        <td><a href="{{url('/deleteuser',$data->id)}}">delete</a></td>
                        @else
                        <td>not allowed</td>

                        @endif



                    </tr>
                    @endforeach


                </table>
            </div>

        </div>
        @include("admin.adminscript")

    </body>
    </html>

</body>
</html>
