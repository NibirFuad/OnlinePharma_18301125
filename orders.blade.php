<x-app-layout>
    
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
  @include("admin.admincss")
  </head>
  <body>
  <h2>Orders</h2>
    <div class="container-scroller"> 
    @include("admin.navbar")
    
    <div style="position: relative; top: -530px; right: -300px">
    
    <form action="{{url('/search')}}" method="get">
        <input type="text" name="search" style="colour: black">
        <input type="submit" value="Search" class="btn btn-info">
    </form>
    <p>


    </p>
    <table bgcolor="#add8e6"; border=3px>
        <tr align="center">
            <th style="padding: 20px">Customer Name</th>
            <th style="padding: 20px">Contact no.</th>
            <th style="padding: 20px">Address</th>
            <th style="padding: 20px">Medicine</th>
            <th style="padding: 20px">Price</th>
            <th style="padding: 20px">Quantity</th>
            <th style="padding: 20px">Total Price</th>
        </tr>
        @foreach($data as $data)
        <tr align="center">
            <td style="padding: 20px">{{$data->username}}</td>
            <td style="padding: 20px">{{$data->phone}}</td>
            <td style="padding: 20px">{{$data->address}}</td>
            <td style="padding: 20px">{{$data->medicine}}</td>
            <td style="padding: 20px">tk. {{$data->price}}</td>
            <td style="padding: 20px">{{$data->quantity}}units</td>
            <td style="padding: 20px">tk. {{$data->price*$data->quantity}}</td>
        </tr>
        @endforeach

    </table>
</div>
</div>
    @include("admin.adminscript")
    
  </body>
</html>