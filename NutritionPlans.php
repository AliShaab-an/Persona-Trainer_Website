<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="Css/style.css" />
    <script
      src="https://kit.fontawesome.com/7f6ab6587f.js"
      crossorigin="anonymous"
    ></script>
    <title>Nutrition Plans</title>
  </head>
  <body>
      <!--Header-->
      <?php include 'Header.html'; ?>
      <main>
      <div class="FirstProgram">
        <div class="program-image">
          <img
            src="images/The-Ultimate-Guide-To-Body-Recomposition-2.webp"
            alt=""
          />
        </div>

        <div class="program-description">
          <h1>THE ULTIMATE GUIDE TO BODY RECOMPOSITION</h1>
          <div class="star">
            <span id="stars">&starf;&starf;&starf;&starf;&starf; <p id="reviews">125 reviews</p></span>
          </div>
          <p>ALL EXPERIENCE LEVELS</p>
          <h2>$49.99</h2>
          <hr width="90%"/>
          <button onclick="showToast(successMsg)">ADD TO CART</button>
          <hr width="90%" />
          <div id="toastBox"></div>
          <div class="icons">
            <div class="first-icon">
              <svg xmlns="http://www.w3.org/2000/svg" height="50px" viewBox="0 -960 960 960" width="50px" fill="#717171"><path d="M280-400q-33 0-56.5-23.5T200-480q0-33 23.5-56.5T280-560q33 0 56.5 23.5T360-480q0 33-23.5 56.5T280-400Zm0 160q-100 0-170-70T40-480q0-100 70-170t170-70q67 0 121.5 33t86.5 87h352l120 120-180 180-80-60-80 60-85-60h-47q-32 54-86.5 87T280-240Zm0-80q56 0 98.5-34t56.5-86h125l58 41 82-61 71 55 75-75-40-40H435q-14-52-56.5-86T280-640q-66 0-113 47t-47 113q0 66 47 113t113 47Z"/></svg>
              <p>Instant Access</p>
            </div>
            <div class="second-icon">
              <svg xmlns="http://www.w3.org/2000/svg" height="50px" viewBox="0 -960 960 960" width="50px" fill="#717171"><path d="M240-160q-50 0-85-35t-35-85H40v-440q0-33 23.5-56.5T120-800h560v160h120l120 160v200h-80q0 50-35 85t-85 35q-50 0-85-35t-35-85H360q0 50-35 85t-85 35Zm0-80q17 0 28.5-11.5T280-280q0-17-11.5-28.5T240-320q-17 0-28.5 11.5T200-280q0 17 11.5 28.5T240-240ZM120-360h32q17-18 39-29t49-11q27 0 49 11t39 29h272v-360H120v360Zm600 120q17 0 28.5-11.5T760-280q0-17-11.5-28.5T720-320q-17 0-28.5 11.5T680-280q0 17 11.5 28.5T720-240Zm-40-200h170l-90-120h-80v120ZM360-540Z"/></svg>
              <p>Free Delivery</p>
            </div>
            <div class="third-icon">
              <svg xmlns="http://www.w3.org/2000/svg" height="50px" viewBox="0 -960 960 960" width="50px" fill="#717171"><path d="M441-120v-86q-53-12-91.5-46T293-348l74-30q15 48 44.5 73t77.5 25q41 0 69.5-18.5T587-356q0-35-22-55.5T463-458q-86-27-118-64.5T313-614q0-65 42-101t86-41v-84h80v84q50 8 82.5 36.5T651-650l-74 32q-12-32-34-48t-60-16q-44 0-67 19.5T393-614q0 33 30 52t104 40q69 20 104.5 63.5T667-358q0 71-42 108t-104 46v84h-80Z"/></svg>
              <p>Mony Back Guarantee</p>
            </div>
          </div>
        </div>
      </div>
    </main>

    <!--Footer-->
    <?php include 'Footer.html'; ?>
    <script src="JS/app.js"></script>
  </body>
</html>
