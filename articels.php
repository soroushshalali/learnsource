<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/style.css">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">


    <script src="https://kit.fontawesome.com/7b691a6b0e.js" crossorigin="anonymous"></script>
    <title>Articles</title>
</head>

<body>
    <?php include './components/navbar.php'; ?>

    <div class="header mb-5">
        <div class="container">
            <div class="row flex-column-reverse flex-md-row">
                <article class="col-md-6 text-dark header-article mt-3">
                    <h1>Lorem Ipsum Dorom sit amet</h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sed quo quisquam dolores nobis nam laudantium aut harum excepturi dolorem, sequi illum, quod fugiat temporibus earum quasi officia voluptatibus voluptatum eveniet?</p>
                    <button class="btn btn-success signin-btn px-4">Contact </button>
                    <button class="btn btn-outline-primary signin-btn px-4">Services</button>
                </article>
                <div class="col-md-6 header-image-section">
                    <img class="img-fluid" src="assets/img/banner-3.png" alt="banner-3">
                </div>
            </div>
        </div>
    </div>

    <main>
        <div class="container">
            <ul class="media p-0 flex-column" style="list-style-type: none;">

                <?php
                include './libs/articles_crud.php';
                $rows = (new crud())->select();
                foreach ($rows as $key => $value) {
                ?>
                    <li class="articles-list-item mt-4 media-body bg-light px-2 py-4 px-md-5 py-md-4">
                        <h3 class="mt-0"><?= $value['id'] . '_' . $value['title'] ?></h3>
                        <p><?= $value['abstract'] ?></p>
                        <div class="d-flex flex-column">
                            <span class="text-muted">date: <?= date('m/d/Y', $value['created-at'])  ?></span>
                            <span class="text-muted">َAuthor: <?php
                                                                $author_name = (new crud())->select("SELECT `name` FROM `user` WHERE id={$value['author_id']}");
                                                                echo $author_name[0]['name'];
                                                                ?></span>
                            <span class="text-muted">َCAT: <a class="mx-1" href="#">
                                    <?php
                                    $cat_name = (new crud())->select("SELECT `name` FROM `category` WHERE id={$value['cat']}");
                                    echo $cat_name[0]['name'];
                                    ?>
                                </a></span>
                        </div>
                        <div class=" d-flex justify-content-end">
                            <a class="btn btn-outline-dark px-5 btn-lg" href="./article.php?article_id=<?= $value['id'] ?>">More</a>
                            <a class="btn btn-primary d-none " href="#">Edit </a>
                            <a class="btn btn-danger  d-none" href="#">Delete</a>
                        </div>
                    </li>
                <?php
                }
                ?>
            </ul>
        </div>
    </main>

    <?php
    include './components/footer.php';
    ?>

</body>

</html>