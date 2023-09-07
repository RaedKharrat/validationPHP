<?PHP

require_once "../../config.php";
require_once "../core/articleC.php";


include_once 'includes/header.inc.php';
$blogActive = "active";
include_once 'includes/navbar.inc.php';

if (isset($_GET['id'])) {
    $article = afficherArticle($_GET['id']);
    foreach ($article as $row) {
        $id = $row['id'];
        $titre = $row['titre'];
        $contenue = $row['contenue'];
        $date = $row['date'];
        $image = $row['image'];
    }
}
$listeCommentaire = afficherCommentaires($_GET['id']);
//var_dump($listeEmployes->fetchAll());
?>
    <section class="home-slider owl-carousel">
        <div class="slider-item" style="background-image: url(assets/images/bg_1.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                    <div class="col-md-8 col-sm-12 text-center ftco-animate">
                        <span class="subheading">Welcome</span>
                        <h1 class="mb-4">The Best Coffee Testing Experience</h1>
                        <p class="mb-4 mb-md-5">A small river named Duden flows by their place and supplies it with the
                            necessary regelialia.</p>
                        <p><a href="shop.php" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a> <a
                                    href="menu.php" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View
                                Menu</a></p>
                    </div>

                </div>
            </div>
        </div>

        <div class="slider-item" style="background-image: url(assets/images/bg_2.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                    <div class="col-md-8 col-sm-12 text-center ftco-animate">
                        <span class="subheading">Welcome</span>
                        <h1 class="mb-4">Amazing Taste &amp; Beautiful Place</h1>
                        <p class="mb-4 mb-md-5">A small river named Duden flows by their place and supplies it with the
                            necessary regelialia.</p>
                        <p><a href="shop.php" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a> <a
                                    href="menu.php" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View
                                Menu</a></p>
                    </div>

                </div>
            </div>
        </div>

        <div class="slider-item" style="background-image: url(assets/images/bg_3.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                    <div class="col-md-8 col-sm-12 text-center ftco-animate">
                        <span class="subheading">Welcome</span>
                        <h1 class="mb-4">Creamy Hot and Ready to Serve</h1>
                        <p class="mb-4 mb-md-5">A small river named Duden flows by their place and supplies it with the
                            necessary regelialia.</p>
                        <p><a href="shop.php" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a> <a
                                    href="menu.php" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View
                                Menu</a></p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ftco-animate">
                    <h2 class="mb-3"><?php echo($titre); ?></h2>
                    <p><?php echo($contenue); ?></p>
                    <p>
                        <img src="<?PHP echo '/Obladi/BO/views/pages/Blog/uploads/' . $image; ?>"
                             alt=""
                             class="img-fluid" style="width: 500px;">
                    </p>


                    <div class="pt-5 mt-5">
                        <h3 class="mb-5"><?php echo($listeCommentaire->rowCount()) ?> Comments</h3>
                        <?PHP
                        foreach ($listeCommentaire as $row) {
                            ?>
                            <ul class="comment-list">
                                <li class="comment">
                                    <div class="vcard bio">
                                    </div>

                                    <div class="comment-body">
                                        <h3></h3>
                                        <div class="meta"><?PHP echo $row['date']; ?></div>
                                        <p><?PHP echo $row['contenue']; ?></p>
                                    </div>
                                </li>

                            </ul> <?PHP
                        }
                        ?>
                        <!-- END comment-list -->
                        <?php

                        if (isset($_SESSION['id'])) {

                            ?>
                            <div class="comment-form-wrap pt-5">
                                <h3 class="mb-5">Leave a comment</h3>
                                <form action="ajouterCommentaire.php?id=<?php echo($_GET['id']) ?>" method="POST">

                                    <div class="form-group">
                                        <label for="message">Message</label>
                                        <textarea name="contenue" id="message" cols="30" rows="10"
                                                  class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="Post Comment" name="valider"
                                               class="btn py-3 px-4 btn-primary">
                                    </div>
                                </form>

                            </div>
                        <?php } ?>
                    </div>

                </div> <!-- .col-md-8 -->
                <div class="col-md-4 sidebar ftco-animate">
                    <div class="sidebar-box">
                        <form action="#" class="search-form">
                            <div class="form-group">
                                <div class="icon">
                                    <span class="icon-search"></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Search...">
                            </div>
                        </form>
                    </div>
                    <div class="sidebar-box ftco-animate">
                        <div class="categories">
                            <h3>Categories</h3>
                            <li><a href="#">Tour <span>(12)</span></a></li>
                            <li><a href="#">Hotel <span>(22)</span></a></li>
                            <li><a href="#">Coffee <span>(37)</span></a></li>
                            <li><a href="#">Drinks <span>(42)</span></a></li>
                            <li><a href="#">Foods <span>(14)</span></a></li>
                            <li><a href="#">Travel <span>(140)</span></a></li>
                        </div>
                    </div>

                    <div class="sidebar-box ftco-animate">
                        <h3>Recent Blog</h3>
                        <div class="block-21 mb-4 d-flex">
                            <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
                            <div class="text">
                                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the
                                        blind texts</a></h3>
                                <div class="meta">
                                    <div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>
                                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="block-21 mb-4 d-flex">
                            <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                            <div class="text">
                                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the
                                        blind texts</a></h3>
                                <div class="meta">
                                    <div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>
                                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="block-21 mb-4 d-flex">
                            <a class="blog-img mr-4" style="background-image: url(images/image_3.jpg);"></a>
                            <div class="text">
                                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the
                                        blind texts</a></h3>
                                <div class="meta">
                                    <div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>
                                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="sidebar-box ftco-animate">
                        <h3>Tag Cloud</h3>
                        <div class="tagcloud">
                            <a href="#" class="tag-cloud-link">dish</a>
                            <a href="#" class="tag-cloud-link">menu</a>
                            <a href="#" class="tag-cloud-link">food</a>
                            <a href="#" class="tag-cloud-link">sweet</a>
                            <a href="#" class="tag-cloud-link">tasty</a>
                            <a href="#" class="tag-cloud-link">delicious</a>
                            <a href="#" class="tag-cloud-link">desserts</a>
                            <a href="#" class="tag-cloud-link">drinks</a>
                        </div>
                    </div>

                    <div class="sidebar-box ftco-animate">
                        <h3>Paragraph</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem
                            necessitatibus
                            voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur
                            similique, inventore eos fugit cupiditate numquam!</p>
                    </div>
                </div>

            </div>
        </div>
    </section> <!-- .section -->

<?php
include_once 'includes/footer.inc.php';
?>