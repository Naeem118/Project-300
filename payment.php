<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Payment</title>
  <link rel="stylesheet" href="payment.css">
</head>
<body>
  <div class="container">
    <header>
      <h1>Welcome to Online Fee Payment System</h1>
    </header>
    <nav class="navbar">
      <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="payment.php">Payment</a></li>
      <li><a href="dues.php">Dues</a></li>
      <li><a href="history.php">History</a></li>
      </ul>
    </nav>
    <h2>Payment</h2>
    <form action="process_payment.php" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label>Payment Type:</label>
        <div class="payment-options">
          <div class="option"><input type="checkbox" id="registration" name="payment_type[]" value="registration"><label for="registration">Registration Fee</label></div>
          <div class="option"><input type="checkbox" id="admission" name="payment_type[]" value="admission"><label for="admission">Admission Fee</label></div>
          <div class="option"><input type="checkbox" id="tuition" name="payment_type[]" value="tuition"><label for="tuition">Tuition Fee</label></div>
          <div class="option"><input type="checkbox" id="re-admission" name="payment_type[]" value="re-admission"><label for="re-admission">Re-admission Fee</label></div>
          <div class="option"><input type="checkbox" id="retake" name="payment_type[]" value="retake"><label for="retake">Retake Fee</label></div>
          <div class="option"><input type="checkbox" id="supplementary-exam" name="payment_type[]" value="supplementary_exam"><label for="supplementary-exam">Supplementary Exam Fee</label></div>
          <div class="option"><input type="checkbox" id="other" name="payment_type[]" value="other" onchange="toggleOtherInput(this)"><label for="other">Other:</label><input type="text" id="other-text" name="other_text" style="display: none;" placeholder="Specify other fee"></div>
        </div>
      </div>
      <div class="form-group">
        <label for="amount">Amount:</label>
        <input type="text" id="amount" name="amount" required>
      </div>
      <p class="payment-instructions">Transfer the amount through Bkash: 017**** or NRBC bank</p>
      <div class="form-group">
        <label for="file">Please upload your receipt:</label>
        <input type="file" id="file" name="file" accept=".png, .jpg, .jpeg, .pdf" required>
      </div>
      <button type="submit">Submit</button>
    </form>
  </div>
  <script>
    function toggleOtherInput(checkbox) {
      var otherText = document.getElementById('other-text');
      otherText.style.display = checkbox.checked ? 'block' : 'none';
      otherText.required = checkbox.checked;
    }
  </script>
</body>
</html>
