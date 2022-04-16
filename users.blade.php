<x-app-layout>
    
</x-app-layout>

<!DOCTYPE html>
<html>
    <head>
    @include("admin.admincss")
</head>
<body>
    
    <div class="container-scroller">
    @include("admin.navbar")
    
    <div style="position: relative; top: -500px; right: -420px">
        <table bgcolor="#add8e6"; border=3px> 
            <tr>
                <th style="padding: 30px">Name</th>
                <th style="padding: 30px">Email</th>
                <th style="padding: 30px">UserType</th>
                <th style="padding: 30px">Action</th>
            </tr>
            @foreach($data as $data) 
            <tr align="center">
                <td style="padding: 30px">{{$data->name}}</td>
                <td style="padding: 30px">{{$data->email}}</td>
                @if($data->usertype=="1")
                    <td style="padding: 30px">Admin</td>
                    <td style="padding: 30px"><a>Not Allowed</a></td>
                @elseif($data->usertype=="0")
                    <td style="padding: 30px">Customer</td>
                    <td style="padding: 30px"><a href="{{url('/deleteuser',$data->id)}}">Delete</a></td>
                @elseif($data->usertype=="2")
                    <td style="padding: 30px">Delivery Person</td>
                    <td style="padding: 30px"><a href="{{url('/deleteuser',$data->id)}}">Delete</a></td>    
                @endif
            </tr>
            @endforeach
        </table>
    </div>
</div>

@include("admin.adminscript")
    
</body>
</html>