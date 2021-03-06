<?php 
$posts = Post::where('user_id', $_SESSION['user']['id'])->orderBy('id', 'desc')->get();
?>
<?php require 'header.php'; ?>

<div class="container">
  <div class="card mt-5">
    <table class="table table-bordered">
      <tr>
        <th>title</th>
        <th>Action</th>
      </tr>
      <?php foreach ($posts as $post): ?>
        <tr>
          <td><?php echo $post->title ?></td>
          <td>
            <a class="btn btn-info" href="/dashboard/edit?id=<?php echo $post->id ?>">Edit</a>
            <a class="btn btn-info" href="/dashboard/delete?id=<?php echo $post->id ?>">Delete</a>
          </td>
        </tr>
      <?php endforeach ?>
    </table>
  </div>
</div>
<?php require 'footer.php'; ?>