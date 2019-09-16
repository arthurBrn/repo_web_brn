<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'inc/header.php' ?>
    <title>SQL</title>
</head>

<body>
    <header>
    <?php include '/var/www/html/inc/navbar.html' ?>
        <!-- That will became a php include to put it on every pages -->
        <menu type="context" id="popup-menu">
            <ul>
                <a href="#">
                    <li>Home</li>
                </a>
                <a href="#">
                    <li>PHP</li>
                </a>
                <a href="#">
                    <li>SQL</li>
                </a>
            </ul>
        </menu>
    </header>

    <main>
        <div class="row">
            <div class="col-md-6">
                <h3>Article 1</h3>
                <p> <abbr title="Sigle de Structured Query Language">SQL</abbr> est un langage informatique normalisé servant à exploiter des bases de données relationnelles. La partie langage de manipulation des données de SQL permet de rechercher, d'ajouter,
                    de modifier ou de supprimer des données dans les bases de données relationnelles. Outre le langage de manipulation des données, la partie langage de définition des données permet de créer et de modifier l'organisation des données dans
                    la base de données, la partie langage de contrôle de transaction permet de commencer et de terminer des transactions, et la partie langage de contrôle des données permet d'autoriser ou d'interdire l'accès à certaines données à certaines
                    personnes. </p>
            </div>
            <div class="col-md-6">
                <h3>Article 2</h3>
                <p></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <h3>Article 3</h3>
                <p>Some comment about the technologie
                    <p>
            </div>
            <div class="col-md-6">
                <h3>Article 4</h3>
                <p>Here is some SQL code : </p>
                <code>
                    "SELECT * FROM public.something
                    Where ..."
                </code>
            </div>
        </div>

        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6">
                <aside>
            Peace is a lie, there is only passion. Through passion, I gain strength. Through strength, I gain power. Through power, I gain victory. Through victory, my chains are broken. The Force shall free me
        </aside>
                </div>
                <div class="col-md-6">
                    <h3>Progress article on SQL (5)</h3>
                    SQL <progress value="50" max="100"></progress>
                </div>
            </div>
        </div>

        
    </main>

    <?php include 'inc/footer.php' ?>
</body>

</html>