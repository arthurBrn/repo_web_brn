<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'inc/head.php' ?>
    <title>SQL</title>
</head>

<body>
    <?php include 'inc/header.php' ?>

    <main>
        <div class="wrapper-one">
            <article class="article-one">
                <h3>Article 1</h3>
                <p> <abbr title="Sigle de Structured Query Language">SQL</abbr> est un langage informatique normalisé servant à exploiter des bases de données relationnelles. La partie langage de manipulation des données de SQL permet de rechercher, d'ajouter,
                    de modifier ou de supprimer des données dans les bases de données relationnelles. Outre le langage de manipulation des données, la partie langage de définition des données permet de créer et de modifier l'organisation des données dans
                    la base de données, la partie langage de contrôle de transaction permet de commencer et de terminer des transactions, et la partie langage de contrôle des données permet d'autoriser ou d'interdire l'accès à certaines données à certaines
                    personnes. </p>
            </article>

            <article class="article-two">
                <?php include 'inc/tableau.html' ?>
            </article>
        </div>

        <div class="wrapper-two">
            <article class="article-three">
                <h3>Article 3</h3>
                <p>Some comment about the technologie</p>
            </article>
            <article class="article-four">
                <h3>Article 4</h3>
                <p>Here is some SQL code : </p>
                <code>
                    "SELECT * FROM public.something
                    Where ..."
                </code>
                <aside>
                    Peace is a lie, there is only passion. Through passion, I gain strength. Through strength, I gain power. Through power, I gain victory. Through victory, my chains are broken. The Force shall free me
                </aside>
            </article>
            <article class="article-five">
                <h3>Progress article on SQL (5)</h3>
                SQL <progress value="50" max="100"></progress>
            </article>
        </div>
    </main>

    <?php include 'inc/footer.php' ?>
</body>

</html>