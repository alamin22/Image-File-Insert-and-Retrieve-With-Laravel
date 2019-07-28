<!DOCTYPE html>
<html>
<head>
	<title>Insert and View File</title>
	<style type="text/css">
		td{
			padding: 8px 8px;

		}
		#name{
		    width: 260px;
			height: 24px;
		}
		#submit{
		    width: 60px;
			height: 30px;
			background-color: blue;
			color:white;
		}
	</style>
</head>
<body>
	<center>
		<div class="container">
			<h3>Laravel Insert and Retrieve image </h3>

	  @php

         $message=Session::get("message");
         if($message){
         echo $message;
         Session::put("message",null);
         }

       @endphp
              <form method="post" action="{{url('/insertFile')}}" enctype="multipart/form-data">
              	{{csrf_field()}}
              	 <table>
              	 	<tr>
              	 		<td>
              	 			<input id="name" type="text" name="name" placeholder="Enter Name">
              	 		</td>
              	 	</tr>
              	 	<tr>
              	 		<td>
              	 			<input id="name" type="file" name="file">
              	 		</td>
              	 	</tr>
              	 	<tr> 
              	 		<td>
              	 			<input id="submit" type="submit" value="Submit">
              	 		</td>
              	 	</tr>
              	 </table>
              </form>
		</div>

     </br></br>

     <table>
     	<tr>
     		<th>Name</th>
     		<th>File</th>
     	</tr>

     	@foreach($value as $display)
     	<tr>
               <td>{{$display->name}}</td>
                <td><img src="{{asset('files/' . $display->file)}}" width="80" height="90"></td>	
     	</tr>
     	@endforeach

     </table>

	</center>
   
   	

</body>
</html>