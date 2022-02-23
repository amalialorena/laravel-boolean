

<form 
action="{{route('postcards.store')}}" 
method="post" 
enctype="multipart/form-data">

@method('POST')
@csrf

<label for="sender">Sender</label> <br>
<input type="text" name="sender" value="test"><br>
<label for="address" >Address</label><br>
<input type="text" name="address" value="test"><br>
<label for="text">Text</label><br>
<input type="text" name="text" value="test"><br> <br>
<label for="image">Image</label><br>
<input type="file" multiple="multiple" name="image"><br>
<br>
<input type="submit" value="CREATE" class="btn btn-primary">

</form>