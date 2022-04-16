<x-app-layout>
    
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
      <base href="/public">
  @include("admin.admincss")
  </head>
  <body>
  <h1>Update Medicine</h1>
    <div class="container-scroller"> 
    @include("admin.navbar")
    <div style="position: relative; top: -500px; right: -300px">
        <form action="{{url('/update',$data->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <label>Name</label>
                <input style="color: black" type="text" name="title" value={{$data->title}} required>
            </div>
            <div>
                <label>Price</label>
                <input style="color: black" type="number" name="price" value={{$data->price}} required>
            </div>
            <div>
                <label>Description</label>
                <input style="color: black" type="text" name="description" value={{$data->description}} required>
            </div>
            <div>
                <input style="color: blue" type="submit" value="Save">
            </div>
        </form>
    <div>
</div>
    @include("admin.adminscript")
    
  </body>
</html>