<?php 

  // check if whoever that viewing this page is logged in.
  // if not logged in, you want to redirect back to login page
  checkIfuserIsNotLoggedIn();

require "parts/header.php"; ?>
<div class="container mx-auto my-5" style="max-width: 700px;">
      <div class="d-flex justify-content-between align-items-center mb-2">
        <h1 class="h1">Manage Posts</h1>
        <div class="text-end">
          <a href="/manage-posts-add" class="btn btn-primary btn-sm"
            >Add New Post</a
          >
        </div>
      </div>
      <div class="card mb-2 p-4">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col" style="width: 40%;">Title</th>
              <th scope="col">Status</th>
              <th scope="col" class="text-end">Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <? foreach ($posts as $post): ?>
                <th scope="row"><?=($post['id']); ?></th>
                    <td><?= ($post['title']); ?></td>
                    <td>
                        <?php if ($post['status'] === 'Publish'): ?>
                        <span class="badge bg-success">Publish</span>
                        <?php else: ?>
                        <span class="badge bg-warning"><?= ($post['status']); ?></span>
                        <?php endif; ?>
                    </td>
                    <td class="text-end">
                        <div class="buttons">
                            <a href="/post?id=<?= ($post['id']); ?>" target="_blank" class="btn btn-primary btn-sm me-2">
                                <i class="bi bi-eye"></i>
                            </a>
                            <a href="/manage-posts-edit?id=<?= ($post['id']); ?>" class="btn btn-secondary btn-sm me-2">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <a href="/delete-post?id=<?= ($post['id']); ?>" class="btn btn-danger btn-sm">
                                <i class="bi bi-trash"></i>
                            </a>
                </div>
              </td>
            </tr>
            <?php endforeach;  ?>
          </tbody>
        </table>
      </div>
      <div class="text-center">
        <a href="/dashboard" class="btn btn-link btn-sm"
          ><i class="bi bi-arrow-left"></i> Back to Dashboard</a
        >
      </div>
    </div>
    <?php require 'parts/footer.php';
