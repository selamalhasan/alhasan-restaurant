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
    <form action="{{url('/uploadchef')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label>Name</label>
            <input style="color: blue" type="text" name="name" required="" placeholder="Enter name">
        </div>
        <div>
            <label>Speciality</label>
            <input style="color: blue" type="text" name="speciality" required="" placeholder="Enter The Speciality">
        </div>
        <div>
            <input type="file" name="image" required="">
        </div>
        <div>
            <input style="color: blue" type="submit" value="Save">
        </div>
    </form>
    <div>
    <table>
        <tr>
            <th style="padding: 50px;">Chef Name</th>
            <th style="padding: 50px;">Speciality</th>
            <th style="padding: 50px;">Image</th>
            <th style="padding: 50px;">Action</th>
            <th style="padding: 50px;">Action</th>
        </tr>
        @foreach ($data as $data)
        <tr align="center">
            <td>{{$data->name}}</td>
            <td>{{$data->speciality}}</td>
            <td><img height="50" width="50" src="/chefimage/{{$data->image}}"></td>
            <td><a href="{{url('/editchef',$data->id)}}">Edit</a></td>
            <td><a href="{{url('/deletechef',$data->id)}}">Delete</a></td>
        </tr>
        @endforeach
    </table>
    </div>
    </div>
    @include("admin.adminscript")

  </body>
</html>
