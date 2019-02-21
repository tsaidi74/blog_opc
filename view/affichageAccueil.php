<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title> Mon BLog </title>
    <!-- Bootstrap CSS -->  
        <link rel="shortcut icon" href="assets/images/gt_favicon.png">
	
        <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">

        <!-- Custom styles for our template -->
        <link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
        <link rel="stylesheet" href="assets/css/main.css">


    </head>
    
    <body>
    <!-- Fixed navbar -->
	<
    <div class="container">
    <h1>Mon Super Blog</h1>
        <p><H3>Les derniers articles : </H3> </p>
        
        <?php
            foreach($articles as $article)
                {
                    ?>

                    <div class="col-lg-6">
                        <h3> <?= $article['titre']; ?></h3>
                        <p>  <?= $article['contenu']; ?></br> </p>
                        <p>  <?= $article['date']; ?></br> </p>
                        <p>  <?= $article['id_user']; ?></br> </p>
                        <a href="./view/updateForm.php?titre=<?= $article['titre']; ?>&amp;contenu=<?= $article['contenu']; ?>"><img src="../blog/assets/images/edit.png" alt="edit" height="20px"></a>
                        <a href="#"><img src="../blog/assets/images/delete.png" alt="edit" height="20px"></a>
                    </div>
               <?php
                }
        ?>
        <div class="col-lg-12" style="padding: 15px"> <H3>Ajouter un article </H3> </div>
         <form action="index.php?page=addArticle" method="post">
            <div class="form-group">
                <label for="pseudo">Titre</label> :
             </div>
            <div class="form-group">
                <input class="form-control" type="text" name="titre" id="titre" />
            </div>
            <div class="form-group">
                <label for="contenu">Contenu</label>
                <textarea class="form-control" id="contenu" name="contenu" rows="7" ></textarea>
            </div>
            <input type="submit" class="btn btn-primary" value="Envoyer" />
        </form>
    </div>
    </body>