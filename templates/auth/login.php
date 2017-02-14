<body>
    <div class="jumbotron text-center">
        Daily Time Report System
    </div>
    <div class="container">
        <form action="/" method="post">
            <span class="text-center"><?php if (isset($error)) echo $error;?></span>
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" class="form-control" id="username" name="username">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" id="pwd" name="password">
                    </div>
                    <button type="submit" class="btn btn-default btn-block">Submit</button>
                </div>
            </div>
        </form>
    </div>
</body>