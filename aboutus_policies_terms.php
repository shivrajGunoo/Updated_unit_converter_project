<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars(trim($_POST["name"]));
  $email = htmlspecialchars(trim($_POST["email"]));
  $message = htmlspecialchars(trim($_POST["message"]));

  // Optional: send email or store in a database
  // For now, just prepare a success message
  $success = "Thank you, $name. Your message has been received.";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="Universal Unit Converter - Privacy Policy, Terms of Use, and Contact Us. Read our transparent policies and get in touch." />
  <meta name="keywords" content="privacy policy, terms of use, contact us, unit converter, Google AdSense compliant, data policy" />
  <title>Privacy Policy, Terms & Contact | Universal Unit Converter</title>
  <style>
    <?php include "styles/privacy-policy.css"; ?>
  </style>
</head>
<body>

<header>
  <div class="logo">UNIT <span>CONVERTER</span></div>
  <nav aria-label="Primary navigation">
    <ul>
      <li><a href="#" tabindex="0">Home</a></li>
      <li><a href="#" tabindex="0">All Converters</a></li>
      <li><a href="#about-us-title" tabindex="0">About</a></li>
      <li><a href="#contact-us" tabindex="0">Contact</a></li>
    </ul>
  </nav>
</header>

<main class="container" role="main" aria-labelledby="page-title">
  <h1 id="page-title">Privacy Policy, Terms of Use & Contact</h1>

  <!-- About Section -->
  <!-- [Same as HTML version – omitted here for brevity, but identical content inside PHP file] -->

  <section id="contact-us" aria-labelledby="contact-title">
    <h2 id="contact-title">Contact Us</h2>
    <p>If you have any questions about this Privacy Policy, Terms, or About Us, you can contact us directly at:</p>
    <p><a href="mailto:info@synasateam.com">info@synasateam.com</a></p>

    <?php if (!empty($success)): ?>
      <p style="color: green; font-weight: bold;"><?php echo $success; ?></p>
    <?php endif; ?>

    <form id="contact-form" method="POST" action="#contact-us" aria-label="Contact form">
      <label for="name">Your name:</label>
      <input type="text" id="name" name="name" required maxlength="100" placeholder="Enter your name" />

      <label for="email">Your email:</label>
      <input type="email" id="email" name="email" required maxlength="100" placeholder="Enter your email" />

      <label for="message">Message to us:</label>
      <textarea id="message" name="message" required maxlength="10000" placeholder="Write your message here (max 10,000 characters)" rows="8"><?php echo isset($message) ? $message : ''; ?></textarea>

      <div class="char-count" id="char-count">You can enter up to 10,000 characters.</div>

      <p>If you have suggestions for our page, please feel free to let us know to improve our service.</p>

      <button type="submit">Send Message</button>
    </form>
  </section>
</main>

<footer role="contentinfo">
  <p>&copy; 2025 Synasateam. All rights reserved.</p>
  <p>
    <a href="#privacy-policy-title">Privacy Policy</a> |
    <a href="#terms-title">Terms of Use</a> |
    <a href="#contact-us">Contact Us</a>
  </p>
</footer>

<script>
  (function() {
    const textarea = document.getElementById('message');
    const charCount = document.getElementById('char-count');
    const maxChars = 10000;

    if (textarea && charCount) {
      textarea.addEventListener('input', () => {
        const remaining = maxChars - textarea.value.length;
        charCount.textContent = remaining >= 0
          ? `You can enter up to ${remaining.toLocaleString()} characters.`
          : `You have exceeded the limit by ${-remaining.toLocaleString()} characters.`;
      });
    }
  })();
</script>

</body>
</html>
