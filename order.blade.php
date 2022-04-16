<div id="appointment" class="appointment-main">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2>Order Now</h2>
						<p>Easy order placing facility </p>
					</div>
				</div>
			</div>
    <div align="center">
        <table bgcolor="#AFEEEE"; border=3px> 
            <tr align="center">
                <th style="padding: 30px">Medicine Name</th>
                <th style="padding: 30px">Price</th>
                <th style="padding: 30px">Description</th>
                <th style="padding: 30px">Add To Cart</th>
                
            </tr>
            @foreach($data as $data)
            <form action="{{url('/addtocart',$data->id)}}" method="post">
                @csrf
            <tr align="center">
                <td style="padding: 30px">{{$data->title}}</td>
                <td style="padding: 30px">tk. {{$data->price}}</td>
                <td style="padding: 30px">{{$data->description}}</td>
                <td style="padding: 30px"><input type="number" name="quantity" min="1" value="1" style= "width: 120px;">
                <input  style="color: blue" type="submit" value="Add"></td>
            </tr>
            </form>
            @endforeach
        </table>
    </div>
    </div>
	</div>
