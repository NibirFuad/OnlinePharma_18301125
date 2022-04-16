<x-app-layout>
    
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
  @include("admin.admincss")
  </head>
  <body>
  <h1>Inventory</h1>
    <div class="container-scroller">
    @include("admin.navbar")
    <div style="position: relative; top: -550px; right: -300px">
        <form action="{{url('/uploadmedicine')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <label>Name</label>
                <input style="color: black" type="text" name="title" placeholder="Enter medicine name" required>
            </div>
            <div>
                <label>Price</label>
                <input style="color: black" type="number" name="price" placeholder="Enter price" required>
            </div>
            <div>
                <label>Description</label>
                <input style="color: black" type="text" name="description" placeholder="Enter description" required>
            </div>
            <div>
                <input style="color: blue" type="submit" value="Save">
            </div>
        </form>
    <div>
        <p>

        
        </p>
        <table bgcolor="#add8e6"; border=3px> 
            <tr>
                <th style="padding: 30px">Medicine Name</th>
                <th style="padding: 30px">Price</th>
                <th style="padding: 30px">Description</th>
                <th style="padding: 30px">Delete Medicine</th>
                <th style="padding: 30px">Update Medicine</th>
            </tr>
            @foreach($data as $data)
            <tr align="center">
                <td style="padding: 30px">{{$data->title}}</td>
                <td style="padding: 30px">tk. {{$data->price}}/unit</td>
                <td style="padding: 30px">{{$data->description}}</td>
                <td style="padding: 30px"><a href="{{url('/deletemed',$data->id)}}">Delete</a></td>
                <td style="padding: 30px"><a href="{{url('/updatemed',$data->id)}}">Update</a></td>
            </tr>
            @endforeach
        </table>
    </div>
    </div>
    
    @include("admin.adminscript")
</body>
</html>