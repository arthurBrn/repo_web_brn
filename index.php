<!DOCTYPE html>
<html lang="en">

<head>
    <?php // include '/var/www/html/inc/header.php' 
    ?>
    <link rel="stylesheet" href="css/codingpedia.css">
    <title>Index</title>
</head>

<body>
    <header>
        <?php // include '/var/www/html/inc/navbar.html' 
        ?>
        <h1>Bienvenue
            <!-- That will became a php include to put it on every pages -->
            <span>
                <a href="../index.php">Home</a>
                <a href="php.php">PHP</a>
                <a href="sql.php">SQL</a>
            </span>
        </h1>
    </header>

    <main>
        <div class="wrapper">
            <p class="first-paragraph left-bordered-and-big">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsam suscipit quibusdam quisquam maxime asperiores temporibus magnam labore pariatur delectus, ut, excepturi vero quo omnis nulla ducimus enim accusamus nobis, dolore unde incidunt deleniti eaque
                eveniet! Ratione, illum impedit architecto nemo autem quidem necessitatibus officia, laboriosam est, porro dolores recusandae libero.
            </p>
            <br>
            <form action="">
                <label for="">Name</label>
                <input class="input" type="text" name="name" required> <br>
                <label for="">First name</label>
                <input class="input" type="text" name="first_name" required> <br>
                <label for="">Email</label>
                <input class="input" type="text" name="email" required><br>
                <label for="">Age</label>
                <input class="input" type="text" name="age" min="3" max="99"><br>
                <label for="">Phone</label>
                <input class="input" type="text" name="phone" min="10" max="10"><br>
                <label for="">Sex</label>
                <select name="" id="">
                    <option value="male" selected="selected"> Male</option>
                    <option value="female">Female</option>
                </select>
                <label for="">Hair color</label>
                <input class="input" type="color" id="colorHaire" name="hairColor" value="#e66465"><br>
                <label for="">Date</label>
                <input type="date" name="Date" value="" required><br>
                <label for="">Technology</label>
                <select name="" id="">
                    <option value="php">Php</option>
                    <option value="SQL">SQL</option>
                    <option value="Java">Java</option>
                    <option value="Kotlin">Kotlin</option>
                </select>
                <label for="">Question</label>
                <input type="Textarea" name="Question"><br>

                <button type="submit">
                    Submit
                </button>
            </form>
        </div>

        <aside>
            <!-- second-paragraph right-bordered-and-small -->
            <p class="">
                My name is Arthur, I've been studying IT for four years....
            </p>
        </aside>
    </main>

</body>
<?php include 'inc/footer.php' ?>

</html>