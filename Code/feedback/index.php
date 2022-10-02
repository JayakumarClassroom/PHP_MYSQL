<?php include 'inc/header.php'; ?>

<?php
$name = $email = $body = '';
$nameErr = $emailErr = $bodyErr = '';

// Form submit
if (isset($_POST['submit'])) {
  // Validate name
  if (empty($_POST['name'])) {
    $nameErr = 'Name is required';
  } else {
    $name = $_POST['name'];
  }

  // Validate email
  if (empty($_POST['email'])) {
    $emailErr = 'Email is required';
  } else {
    $email = $_POST['email'];
  }

  // Validate body
  if (empty($_POST['body'])) {
    $bodyErr = 'Body is required';
  } else {
    $body = $_POST['body'];
  }

  if (empty($nameErr) && empty($emailErr) && empty($bodyErr)) {
    // add to database
    $sql = "INSERT INTO feedback (name, email, body) VALUES ('$name', '$email', '$body')";
    if (mysqli_query($conn, $sql)) {
      // success
      header('Location: feedback.php');
    } else {
      // error
      echo 'Error: ' . mysqli_error($conn);
    }
  }
}
?>

<h1 class="text-primary">Feedback</h1>
<?php echo isset($name) ? $name : ''; ?>
<p class="lead text-center">Leave feedback for IWP</p>

<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="mt-4 w-75">
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control <?php echo !$nameErr ?: 'is-invalid'; ?>" id="name" name="name"
            placeholder="Enter your name" value="<?php echo $name; ?>">
        <div id="validationServerFeedback" class="invalid-feedback">
            Please provide a valid name.
        </div>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control <?php echo !$emailErr ?: 'is-invalid'; ?>" id="email" name="email"
            placeholder="Enter your email" value="<?php echo $email; ?>">
    </div>
    <div class="mb-3">
        <label for="body" class="form-label">Feedback</label>
        <textarea class="form-control <?php echo !$bodyErr ?: 'is-invalid'; ?>" id="body" name="body"
            placeholder="Enter your feedback"><?php echo $body; ?></textarea>
    </div>
    <div class="mb-3">
        <input type="submit" name="submit" value="Send" class="btn btn-dark w-100">
    </div>
</form>
<?php include 'inc/footer.php'; ?>