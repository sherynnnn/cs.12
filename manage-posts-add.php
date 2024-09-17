<?php 

$database = connectToDB();
  
// 2. get all the users
// 2.1
$sql = "SELECT * FROM posts";
// 2.2
$query = $database->prepare( $sql );
// 2.3
$query->execute();
// 2.4
$posts = $query->fetchAll();

require "parts/header.php"; ?>
<div class="container mx-auto my-5" style="max-width: 700px;">
      <div class="d-flex justify-content-between align-items-center mb-2">
        <h1 class="h1">Add New Post</h1>
      </div>
      <div class="card mb-2 p-4">
        <form action="/user/add" method="post" >
          <div class="mb-3">
            <label for="post-title" class="form-label">Title</label>
            <input type="text" class="form-control" id="post-title" />
          </div>
          <div class="mb-3">
            <label for="post-content" class="form-label">Content</label>
            <textarea
              class="form-control"
              id="post-content"
              rows="10"
            ></textarea>
          </div>
          <div class="text-end">
            <button type="submit" class="btn btn-primary">Add</button>
          </div>
        </form>
      </div>
      <div class="text-center">
        <a href="/manage-posts" class="btn btn-link btn-sm"
          ><i class="bi bi-arrow-left"></i> Back to Posts</a
        >
      </div>
    </div>
    <?php require 'parts/footer.php';