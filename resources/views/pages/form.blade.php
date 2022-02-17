

<form 
action="{{route('postcards.store')}}" 
method="post" 
enctype="multipart/form-data">

@method('POST')
@csrf

<label for="sender">Sender</label> <br>
<input type="text" name="sender"><br>
<label for="address">Address</label><br>
<input type="text" name="address"><br>
<label for="text">Text</label><br>
<input type="text" name="text"><br> <br>
<label for="image">Image</label><br>
<input type="file" name="image"><br>
<br>
<input type="submit" value="CREATE" class="btn btn-primary">

</form>