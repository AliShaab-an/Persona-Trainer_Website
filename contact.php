<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/7f6ab6587f.js" crossorigin="anonymous"></script>
    <title>Contact Us</title>
    <link rel="stylesheet" href="Css/style.css">
    <link rel="stylesheet" href="Css/contact.css">
</head>
<body>
    <!--Header-->
    <?php include 'Header.html'; ?>

    
    <!--main-->
    <main>
      <section id="first-section">
        <img src="images/contactus.webp" alt="" />
        <div class="container">
          <div id="div-1" class="text-info">
            <div>
              <h4>QUESTION ABOUT YOUR ORDER?</h4>
              Send an email to info.aliShaaban.com and please allow 3-5 business
              days for a reply.
            </div>
          </div>
          <div class="text-info">
            <div class="text-info">
              <div>
                <h4>MONEY BACK INFORMATION</h4>
                We review your request and respond via email, and if approved, a
                credit will be issued within 30 days. Contact the card- issuing
                bank for details.
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="contactus-main">
        <div>
          <h1>Still Need Help?</h1>
          <div class="feedback">
            If you have any feedback or questions about our website or our
            service in general,please send us a message by completing our
            enquiry form.
          </div>
        </div>
        <div class="help-form">
          <div class="help-form_div">
            <div class="help-form_labels">
              <label for="">Full Name <span id="astrics">*</span></label>
            </div>
            <input type="text" required />
          </div>
          <div class="help-form_div">
            <div class="help-form_labels">
              <label for="">Email <span id="astrics">*</span></label>
            </div>
            <input type="email" required />
          </div>
          <div>
            <div class="help-form_labels">
              <label for="">Subject <span id="astrics">*</span></label>
            </div>
            <select name="" id="DropDown">
              <option value=""></option>
              <option value="">General</option>
              <option value="">Beginner</option>
              <option value="">Intermediate</option>
              <option value="">Expert</option>
            </select>
          </div>
          <div>
            <div for="" class="help-form_labels">
              <label>Message <span id="astrics">*</span></label>
            </div>
            <textarea name="" id="textarea"></textarea>
          </div>
          <div class="submint-btn"><button>SUBMIT</button></div>
        </div>
      </section>
    </main>




    <!--footer-->
    <?php include 'Footer.html'; ?>
    <script src="Js/app.js"></script>
</body>
</html>