<?php
include('server/register.php');
include('head.php');
?>


<div class="container">
    <form method="post" class="form" action="register.php" style="width:500px;margin-top:50px">

        <?php
        if (count($errors) > 0) : ?>
            <div class="error">
                <?php foreach ($errors as $error) : ?>
                    <p><?php echo $error ?></p>
                <?php endforeach ?>
            </div>
        <?php
        endif
        ?>
        <div class="row">
            <div class="col-25">
                <label>Log in info</label>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="username">Username</label>
            </div>
            <div class="col-75">
                <input type="text" name="username" value="<?php echo $username; ?>" id="username">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="password">Password</label>
            </div>
            <div class="col-75">
                <input type="password" name="password_1" id="password">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="password">Retype password</label>
            </div>
            <div class="col-75">
                <input type="password" name="password_2" id="password">
            </div>
        </div>

        <div class="row">
            <div class="col-75">
                <input type="submit" name="reg_user" value="Register">
            </div>
        </div>


    </form>
</div>
<?php include('footer.php') ?>