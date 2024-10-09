<?php include 'inc/header.php'; ?>
<?php
  $sql = 'SELECT * FROM review';
  $result = mysqli_query($conn, $sql);
  $reviews = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<h2>课程评价</h2>

<?php if(empty($reviews)): ?>
  <p class="lead mt3">目前没有课程评价！</p>
<?php endif; ?>

          
<?php foreach($reviews as $review):?>
  <div class="card my-3" style="width: 18rem;">
  <div class="card-title text-center mt-2">
    <?php echo $review['course_name']; ?>
  </div>
    <div class="card-body text-center">
      "
        <?php echo $review['content'];?>"
      <div class="text-secondary mt-2">
        来自 <?php echo $review['name'];?>
      </div>
      <div class="text-secondary mt-2">
        <?php echo $review['date'];?>
      </div>
    </div>
  </div>
<?php endforeach; ?>

          
<?php include 'inc/footer.php'; ?>