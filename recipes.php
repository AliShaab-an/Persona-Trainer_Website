<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="Css/style.css">
        <link rel="stylesheet" href="Css/recipes.css">
        <script src="https://kit.fontawesome.com/7f6ab6587f.js" crossorigin="anonymous"></script>
        <title>Recipes</title>
        

    </head>

    <body>
        <!--Header-->
        <?php include 'Header.html'; ?>
        <!--main-->
        <main>
            <section class="breadcrumb">
                <span>
                    <a href="index.html">Home</a>
                    <pre>\Recipes</pre>
                </span>
            </section>

            <section class="scard">
                <div class="card-container">
                    <div class="card">
                        <img src="images/protein-powde2.jpg" alt="">
                        <div class="card-content">
                            <h3>Protein Shake</h3>
                            <p>Easy protein shake using Bodybuilding.com 100% Signature Whey Isolate. In my household, we like an old fashioned...
                            </p>
                            <a href="" class="card-btn"><button>View</button></a>
                        </div>
                    </div>
                    <div class="card">
                        <img src="images/cesar-chicken1.jpeg" alt="">
                        <div class="card-content">
                            <h3>Cesar Chicken</h3>
                            <p>this chicken Caesar salad will not disappoint. So, grab a fork and dive right in!
                            </p>
                            <a href="FirstRecipe.php" class="card-btn"><button>View</button></a>
                        </div>
                    </div>
                    <div class="card">
                        <img src="images/creamcheesebagel.webp" alt="">
                        <div class="card-content">
                            <h3>Cream Cheese Bagel</h3>
                            <p>Smoked salmon, dill and cream cheese are a classic bagel combination.
                            </p>
                            <a href="" class="card-btn"><button>View</button></a>
                        </div>
                    </div>
                </div>
            </section>
            
        </main>
        <!--Footer-->
        <?php include 'Footer.html'; ?>
        <script src="JS/app.js"></script>
    </body>
</html>