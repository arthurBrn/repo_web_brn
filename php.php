<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'inc/head.php' ?>
    <title>PHP</title>
</head>

<body>
    <?php include 'inc/header.php' ?>

    <main>
        <div class="wrapper-one">
            <article class="article-one">
                <h3 class="titre">Article 1</h3>
                <p>
                    <abbr title="Hypertext Preprocessor5">PHP</abbr> est un langage de programmation libre6, principalement utilisé pour produire des pages Web dynamiques via un serveur HTTP5, mais pouvant également fonctionner comme n'importe quel langage
                    interprété de façon locale. PHP est un langage impératif orienté objet. PHP a permis de créer un grand nombre de sites web célèbres, comme Facebook, Wikipédia, etc.7 Il est considéré comme une des bases de la création de sites web
                    dits dynamiques mais également des applications web.
                </p>
            </article>
            <article class="article-two">
                <?php include 'inc/tableau.html' ?>
            </article>
        </div>
        <div class="wrapper-two">
            <article class="article-three">
                <h3 class="titre">Article 3</h3>
                <!-- List of my comments on this techno-->
                <p>Some comment about this techno</p>

            </article>
            <article class="article-four">
                <h3 class="titre">Article 4</h3>
                <!-- Code example with appropriate tag-->
                <p>
                    This code would be the one used to import files on our site. The menu for example.
                </p>
                <code> " < ? php include 'path/to/file/filename' ; ?> " </code>


                <aside>
                    Peace is a lie, there is only passion. <br>
                    Through passion, I gain strength. <br>
                    Through strength, I gain power. <br>
                    Through power, I gain victory. <br>
                    Through victory, my chains are broken. <br>
                    The Force shall free me
                </aside>
            </article>
            <article class="article-five">
                <h3 class="titre">Progress article on PHP (5)</h3>
                PHP <progress value="50" max="100"></progress>
            </article>
        </div>
    </main>
</body>

<?php include 'inc/footer.php' ?>

</html>