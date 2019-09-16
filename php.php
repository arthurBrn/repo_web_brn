<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'inc/header.php' ?>
    <title>Document</title>
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
                <!-- Description of pages technology -->
                <p>
                    <abbr title="Hypertext Preprocessor5">PHP</abbr> est un langage de programmation libre6, principalement utilisé pour produire des pages Web dynamiques via un serveur HTTP5, mais pouvant également fonctionner comme n'importe quel langage
                    interprété de façon locale. PHP est un langage impératif orienté objet. PHP a permis de créer un grand nombre de sites web célèbres, comme Facebook, Wikipédia, etc.7 Il est considéré comme une des bases de la création de sites web
                    dits dynamiques mais également des applications web.
                </p>
            </div>
            <div class="col-md-6">
                <h3>Article 2</h3>
                <!-- Empty article -->
                <!-- Its title will be “Course planning” and it must contain in its header the columns “Subject”, “Description” and
“Grade obtained” -->
                <table class="table">
                    <thead>
                        <tr>
                            <th colspan="3">Course planning </th>
                        </tr>
                        <tr>
                            <td></td>
                            <th>Subject</th>
                            <th>Description</th>
                            <th>Grade optained</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- lundi -->
                        <tr>
                            <td>lundi</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <!-- mardi...-->
                        <tr>
                            <td>Mardi</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Mercredi</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Jeudi</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Vendredi</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-6">
                <h3>Article 3</h3>
                <!-- List of my comments on this techno-->
                <p>Some comment about this techno</p>
            </div>
            <div class="col-md-6">
                <h3>Article 4</h3>
                <!-- Code example with appropriate tag-->
                <p>
                    This code would be the one used to import files on our site. The menu for example.
                </p>
                <code> " < ? php include 'path/to/file/filename' ; ?> " </code>
            </div>
        </div>

        <div class="container">
            <div class="row mt-5">
                <div class="col-md-6">
                <aside>
                    Peace is a lie, there is only passion. <br>
                    Through passion, I gain strength. <br>
                    Through strength, I gain power. <br>
                    Through power, I gain victory. <br>
                    Through victory, my chains are broken. <br>
                    The Force shall free me
                </aside>
                </div>
                <div class="col-md-6">
                    <h3>Progress article on PHP (5)</h3>
                    PHP <progress value="50" max="100"></progress>
                </div>
            </div>
        </div>
    </main>
</body>

</html>