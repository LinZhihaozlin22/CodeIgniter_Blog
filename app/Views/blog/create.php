<div class ="container">
  <h1>Create new post </h1>
  <?php if($_POST): ?>
    <?= \Config\Services::validation()->listErrors(); ?>
  <?php endif; ?>
  <form class="" action="/blog/create" enctype="multipart/form-data" method ="post">
    <div class="form-group">
      <label for="title"><strong>Title:</strong></label>
      <input type="text" class="form-control" name="title" id="title" value="">
    </div>
    <div class ="form-group">
      <label for ="description"><strong>Description:</strong></label>
      <textarea class="form-control" name="description" id="description"></textarea>
    </div>
    <div class="form-group">
      <label for="formGroupExampleInput"><strong>Image:</strong></label>
      <input type="file" name="image" class="form-control" id="image" style="height:45px;">
    </div>
    <div class="form-group">
    <label for="formGroupExampleInput"><strong>Tag:</strong></label>
    <select name = "tag">
      <option disabled selected value> -- select an option -- </option>
      <option value = "CodeIgniter">CodeIgniter</option>
      <option value = "TeamCal">TeamCal</option>
      <option value = "San Francisco">San Francisco</option>
      <option value = "others">Others</option>
    </select>
  </div>
    <div class ="form-group">
      <button type="submit" class ="btn btn-primary" style="font-size:120%;">Post</button>
    </div>
  </form>
</div>
