<div class="container top-margin text-white bg-dark">
  
    <div class="form-group">
      <label>Title</label>
      <input type="text" class="form-control" name="title" placeholder="Add Title">
    </div>
    <div class="form-group">
      <label>Description</label>
      <textarea id="editor1" class="form-control" name="description" placeholder="Add Description"></textarea>
    </div>

    <div class="form-group">
    	<label>Category</label>
    	<select name="category_id" class="form-control">
    		
  			<option value=""></option>
    		 
    	</select>
    </div>

    <div class="form-group">
    <div class="input-group mb-3">
      <div class="custom-file">
        <input type="file" accept="image/png, image/jpeg, image/jpg" name="userfile" class="custom-file-input" id="inputGroupFile02">
        <label class="custom-file-label" for="inputGroupFile02">Upload Image</label>
      </div>
    </div>
    
    <button type="submit" class="btn btn-primary mb-3">Submit</button>
 
  </div>
</div>
<script type="text/javascript">
  CKEDITOR.replace( 'editor1' );
</script>