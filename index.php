<!DOCTYPE html>
<html lang="en">


<?php include '/var/www/html/inc/header.php' ?>

<title>Index</title>

<body>
    <header>
        <?php include '/var/www/html/inc/navbar.html' ?>
        <div class="jumbotron">
            <h1 class="lead">Welcome to coding Pedia</h1>
        </div>
        <!-- That will became a php include to put it on every pages -->
        <p>Cliquer sur le menu</p>
        <menu type="toolbar" id="popup-menu" label="go to">
            <menuitem label="Home" onclick="">
            </menuitem>
            <menuitem label="PHP" onclick="">
            </menuitem>
            <menuitem label="SQL" onclick="">
            </menuitem>
        </menu>
    </header>


    <main>
        <div class="container">
            <div class="row">
                <div class="col-md-6 bg-success">
                    <p class="first-paragraph left-bordered-and-big">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsam suscipit quibusdam quisquam maxime asperiores temporibus magnam labore pariatur delectus, ut, excepturi vero quo omnis nulla ducimus enim accusamus nobis, dolore unde incidunt deleniti eaque
                        eveniet! Ratione, illum impedit architecto nemo autem quidem necessitatibus officia, laboriosam est, porro dolores recusandae libero.
                    </p>
                </div>
                <div class="col-md-6">
                    <aside>
                        <p class="second-paragraph right-bordered-and-small">
                            My name is Arthur, I've been studying IT for four years....
                        </p>
                    </aside>
                </div>
            </div>


            <div class="row">
                <div class="col-md-12">
                    <!-- Form -->
                    <form action="" class="form">
                        Name
                        <input type="text" name="name" required> <br>
                        First name
                        <input type="text" name="first_name" required> <br>
                        Email
                        <input type="text" name="email" required><br>
                        Age
                        <input type="text" name="age" min="3" max="99"><br>
                        Phone
                        <input type="text" name="phone" min="10" max="10"><br>
                        Sex
                        <select name="" id="">
                            <option value="male" selected="selected"> Male</option>
                            <option value="female">Female</option>
                        </select> Hair color
                        <input type="color" id="colorHaire" name="hairColor" value="#e66465"><br>
                        Date
                        <input type="date" name="Date" value="" required><br>
                        Technology
                        <select name="" id="">
                            <option value="php">Php</option>
                            <option value="SQL">SQL</option>
                            <option value="Java">Java</option>
                            <option value="Kotlin">Kotlin</option>
                        </select> <br>
                        Question
                        <input type="Textarea" name="Question"><br>
                        <br>
                        <button type="submit">
                            Submit
                        </button>
                    </form>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-12">
                    <h2>Snow white story (short version)</h2>
                    <hr>
                </div>
            </div>
            <div class="row mt-3 mb-5">
                <div class="col-md-6">
                    <p class="a-great-style">Once upon a time there lived a lovely princess with fair skin and blue eyes . She was
                        so fair that she was named Snow White .</p>
                </div>
                <div class="col-md-6">
                    <p class="a-great-style">One day , she was knitting and pricked herself . Three drops of <span class="blood">blood</span> fell in the snow .</p>
                </div>
            </div>
        </div>
    </main>

</body>
<?php include 'inc/footer.html' ?>

</html>