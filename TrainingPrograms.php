<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/7f6ab6587f.js" crossorigin="anonymous"></script>
    <title>Training Programs</title>
    <link rel="stylesheet" href="Css/style.css">
</head>
<body>
    <!--Header-->
    <?php include 'Header.html'; ?>

    <div class="mainaside">
      <aside>
        <div class="asideTtop">
          <pre>TRAINING
PROGRAMS
<span>3 products </span>           
                </pre>
        </div>
        <div class="tsearch">
          <input type="search" placeholder="search" />
          <a id="searchicon"><i class="fa-solid fa-magnifying-glass"></i></a>
        </div>
        <hr width="75%" />

        <div class="aside-featured">
          <p>Sort by:</p>
          <div><input type="radio" name="1" /> <span>Featured</span></div>
          <div><input type="radio" name="1" /> <span>Best selling</span></div>
          <div>
            <input type="radio" name="1" /> <span>Alphabetially,A-Z</span>
          </div>
          <div>
            <input type="radio" name="1" /> <span>Alphabetially,Z-A</span>
          </div>
          <div>
            <input type="radio" name="1" /> <span>Price,low to high</span>
          </div>
          <div>
            <input type="radio" name="1" /> <span>Price,hight to low</span>
          </div>
        </div>

        <div class="levels">
          <label for="">Experience Level</label>
          <div><input type="radio" name="2" id="" /><span>Beginner</span></div>
          <div>
            <input type="radio" name="2" id="" /><span>Intermediate</span>
          </div>
          <div><input type="radio" name="2" id="" /><span>Advanced</span></div>
        </div>

        <div class="Goal">
          <label for="">Goal</label>
          <div>
            <input type="checkbox" name="3" id="first" /><span
              >Gain Strength</span
            >
          </div>
          <div>
            <input type="checkbox" name="3" id="" /><span>Gain Muscle</span>
          </div>
          <div><input type="checkbox" name="3" id="" /><span>Both</span></div>
          <div class="range">
                    <label for="">Price</label>
                    <!-- <div class="slider">
                        <div class="progress"></div>
                    </div>  -->
          <!-- <div class="range-input">
                        <input type="range" class="range-min" min="1" max="100" value="1">
                        <input type="range" class="range-max" min="1" max="100" value="100">
                    </div> 
                </div>-->
          <div class="price-input">
            <div class="field">
              <span>Min</span>
              <input type="number" class="input-min" value="1" />
            </div>
            <div class="separator">to</div>
            <div class="field">
              <span>Max</span>
              <input type="number" class="input-max" value="100" />
            </div>
          </div>
        </div>
      </aside>

      <main class="Trainingmain">
        <div class="maintop">
          <img src="images/new-program.webp" alt="" />
          <hr width="95%" />
        </div>
        <div class="tp-container">
          <div class="tp">
            <a href="FirstTrainingProgram.php" class="desc">
              <img
                src="images/Intermediate-AdvancedPushPullLegsHypertrophyProgram.webp"
                alt=""
              />
              <p>
PUSH/PULL/LEGS HYPERTROPHY
                PROGRAM
                </p>
            </a>
            <div class="level-price">
              <p>INTERMEDIATE-ADVANCED</p>
              <p class="price">$39.99</p>
            </div>
          </div>
          <div class="tp">
            <a href="" class="desc">
              <img src="images/BenchPressSpecializationProgram.webp" alt="" />
              <p>
BENCH PRESS SPECIALIZATION
                PROGRAM
                </p>
            </a>
            <div class="level-price">
              <p>INTERMEDIATE-ADVANCED</p>
              <p class="price">$29.99</p>
            </div>
          </div>
          <div class="tp">
            <a href="" class="desc">
              <img src="images/BackHypertrophyProgram.webp" alt="" />
              <p>BACK HYPERTROPHY PROGRAM</p>
            </a>
            <div class="level-price">
              <p id="level">INTERMEDIATE-ADVANCED</p>
              <p class="price">$19.99</p>
            </div>
          </div>
        </div>
      </main>
    </div>

    <!--Footer-->
    <?php include 'Footer.html'; ?>
    <script src="JS/app.js"></script>
    
</body>
</html>