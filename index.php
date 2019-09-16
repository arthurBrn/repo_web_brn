<!DOCTYPE html>
<html lang="en">


<?php include '/var/www/html/inc/header.php' ?>

<title>Index</title>

<body>
    <header>
        <?php // include '/var/www/html/inc/navbar.html' 
        ?>
        <h1>Welcome to coding Pedia</h1>
        <!-- That will became a php include to put it on every pages -->
        <span class="navbar">
            <a href="../index.php">Home</a>
            <a href="php.php">PHP</a>
            <a href="sql.php">SQL</a>
        </span>
    </header>


    <main>
        <div class="row">
            <p class="first-paragraph left-bordered-and-big">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsam suscipit quibusdam quisquam maxime asperiores temporibus magnam labore pariatur delectus, ut, excepturi vero quo omnis nulla ducimus enim accusamus nobis, dolore unde incidunt deleniti eaque
                eveniet! Ratione, illum impedit architecto nemo autem quidem necessitatibus officia, laboriosam est, porro dolores recusandae libero.
            </p>
        </div>
        <br>

        <div class="form">
            <form action="">
                <label for="">Name</label>
                <input type="text" name="name" required> <br>
                <label for="">First name</label>
                <input type="text" name="first_name" required> <br> 
                <label for="">Email</label> 
                <input type="text" name="email" required><br>
                <label for="">Age</label>
                <input type="text" name="age" min="3" max="99"><br>
                <label for="">Phone</label>
                <input type="text" name="phone" min="10" max="10"><br>
                <label for="">Sex</label>
                <select name="" id="">
                    <option value="male" selected="selected"> Male</option>
                    <option value="female">Female</option>
                </select><br>
                <label for="">Hair color</label>
                <input type="color" id="colorHaire" name="hairColor" value="#e66465"><br>
                <label for="">Date</label>
                <input type="date" name="Date" value="" required><br>
                <label for="">Technology</label>
                <select name="" id="">
                    <option value="php">Php</option>
                    <option value="SQL">SQL</option>
                    <option value="Java">Java</option>
                    <option value="Kotlin">Kotlin</option>
                </select> <br>
                <label for="">Question</label>
                <input type="Textarea" name="Question"><br>
                
                <button type="submit">
                    Submit
                </button>
            </form>
        </div>



        <aside>
            <p class="second-paragraph right-bordered-and-small">
                My name is Arthur, I've been studying IT for four years....
            </p>
        </aside>


        <div class="row mt-5">
            <div class="col-md-12">
                <h2>Snow white story (short version)</h2>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <p class="a-great-style">Once upon a time there lived a lovely princess with fair skin and blue eyes . She was
                    so fair that she was named Snow White .</p>
            </div>
            <div class="col-md-6">
                <p class="a-great-style">One day , she was knitting and pricked herself . Three drops of <span class="blood">blood</span> fell in the snow .</p>
            </div>
        </div>
    </main>

</body>
<?php include 'inc/footer.html' ?>

</html>