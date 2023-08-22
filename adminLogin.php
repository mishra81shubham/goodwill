<?php include('header.php'); ?>
<section class="admiLoginForm">
<div class="container">
  <div class="card">
    <h2>Login Form</h2>
    <form>
      <label for="username">Username</label>
      <input type="text" id="username" placeholder="Enter your username">

      <label for="password">Password</label>
      <input type="password" id="password" placeholder="Enter your password">

      <button type="submit">Login</button>
    </form>
    <div class="switch">Don't have an account? <a  onclick="switchCard()">Register here</a></div>
  </div>

  <div class="card" style="display: none;">
    <h2>Register Form</h2>
    <form>
      <label for="fullname">Full Name</label>
      <input type="text" id="fullname" placeholder="Enter your full name">

      <label for="email">Email</label>
      <input type="email" id="email" placeholder="Enter your email">

      <label for="new-password">New Password</label>
      <input type="password" id="new-password" placeholder="Enter your new password">

      <button type="submit">Register</button>
    </form>
    <div class="switch">Already have an account? <a  onclick="switchCard()">Login here</a></div>
  </div>
</div>
</section>

<?php include('footer.php'); ?>