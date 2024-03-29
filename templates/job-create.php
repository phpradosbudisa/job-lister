<?php include 'inc/header.php'; ?>
<h2 class="header">Create Job Listing</h2>
<form action="create.php" method="post">
    <div class="form-group">
        <label>Company</label>
        <input type="text" name="company" class="form-control">
    </div>
    <div class="form-group">
        <label>Category</label>
        <select type="text" name="category_id" class="form-control">
        <option value="0">Chose Category</option>
        <?php foreach($categories as $category) : ?>
             <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
        <?php endforeach; ?>
</select>
    </div>
    <div class="form-group">
        <label>Job title</label>
        <input type="text" name="job_title" class="form-control">
    </div>
    <div class="form-group">
        <label>Description</label>
        <textarea type="text" name="description" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <label>Location</label>
        <input type="text" name="location" class="form-control">
    </div>
    <div class="form-group">
        <label>Salary</label>
        <input type="text" name="salary" class="form-control">
    </div>
    <div class="form-group">
        <label>Contact User</label>
        <input type="text" name="contact_user" class="form-control">
    </div>
    <div class="form-group">
        <label>Contact Email</label>
        <input type="text" name="contact_email" class="form-control">
    </div>
    <br>
    <input type="submit" class="btn btn-default" value="submit" name="submit">
    <br><br>
</form>
<?php include 'inc/footer.php'; ?>
