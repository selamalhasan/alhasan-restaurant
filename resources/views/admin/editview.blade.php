<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    @include("admin.admincss")
  </head>
  <body>
    <div class="container-scroller">

    @include("admin.navbar")

    <div style="position: relative;left:0%; top: 60px; right:-200px;">
        <form action="{{url('/editfood',$data->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <label>Title:</label>
                <input style="color: blue;" type="text" name="title" value="{{$data->title}}" required>
            </div>
            <div>
                <br>
                <label>Price:</label>
                <input style="color: blue;" type="num" name="price" value="{{$data->price}}" required>
            </div>
            <br>

            <div>
                <label>Description:</label>
                <input style="color: blue;" type="text" name="description" value="{{$data->description}}" required>
            </div>
            <div>
                <br>
                <label>Old Image:</label>
                <img height="200" width="200" src="/foodimage/{{$data->image}}">
            </div>
            <div>
                <br>
                <label>New Image:</label>
                <input style="color: blue;" type="file" name="image"  required>
            </div>
            <div>
                <input type="submit" value="Save">
            </div>
            <br>
        </form>
    </div>
    </div>

    @include("admin.adminscript")

  </body>
</html>
