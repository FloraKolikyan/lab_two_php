    <?php include('header.php'); ?>
    <body>
        <div class="container">
            <div class="wrapper">
                <header>
                    <h1> Silly Valentine Poem Generator </h1>
                </header>
                <form method="post" action="poem-generator.php">
                    <div class="form-group">
                        <input type="text" placeholder="Enter your favourite colour" name="colour" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Enter a plural noun" name="noun" class="form-control">
                    </div>
                    <div class="form-group">
                    <!--Needed to change <label> to input to create form-->
                        <input type="text" placeholder="Enter the name of a person" name="person" class="form-control">
                    </div>
                    <input type="submit" value="submit" class="btn btn-primary" name="submit">
                </form>
            </div>
        </div><!--end container-->
    </body>
</html>