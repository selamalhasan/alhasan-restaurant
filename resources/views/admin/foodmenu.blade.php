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
    <div style="position: relative;left:0%; top: 60px; right:-200px;">
        <form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <label>Title:</label>
                <input style="color: blue;" type="text" name="title" placeholder="Write a title" required>
            </div>
            <div>
                <br>
                <label>Price:</label>
                <input style="color: blue;" type="num" name="price" placeholder="price" required>
            </div>
            <br>
            <div>
                <br>
                <label>Image:</label>
                <input style="color: blue;" type="file" name="image"  required>
            </div>
            <div>
                <label>Description:</label>
                <input style="color: blue;" type="text" name="description" placeholder="Description" required>
            </div>
            <div>
                <input type="submit" value="Save">
            </div>
            <br>
        </form>
    </div>

        <div style= " overflow-x: scroll;">
            <table>
                <tr>
                    <th style="padding: 30px">Food Name</th>
                    <th style="padding: 30px">Price</th>
                    <th style="padding: 30px">Description</th>
                    <th style="padding: 30px">Image</th>
                    <th style="padding: 30px">Action</th>
                    <th style="padding: 30px">Action</th>
                </tr>
                @foreach ($data as $data )
                <tr align="center">
                    <td>{{$data->title}}</td>
                    <td>{{$data->price}}</td>
                    <td>{{$data->description}}</td>
                    <td><img height="50" width="50" src="/foodimage/{{$data->image}}"></td>
                    <td><a href="{{url('/deletemenu',$data->id)}}">Delete</a></td>
                    <td><a href="{{url('/editview',$data->id)}}">Edit</a></td>
                </tr>
                @endforeach
            </table>
        </div>

    </div>


    @include("admin.adminscript")

  </body>
</html>
