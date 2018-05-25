<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Admin
                <small>Subheading</small>
            </h1>

            <?php
            /*            if (isset($_POST['submit'])) {
                            $user = new User();
                            $user->username = $_POST['username'];
                            $user->password = $_POST['password'];
                            $user->first_name = $_POST['first_name'];
                            $user->last_name = $_POST['last_name'];

                            $user->create();
                        }
                            $user->update();
                           $photo = new Photo();
                            $photo->filename = $_POST['username'];
                            $photo->save();


                        $user = User::find_by_id(1);*/

            /*$user = User::find_user_by_id(11);
            $user->delete();*/

            //$user = User::find_user_by_id(10);
            /*$user = new User();
            $user->first_name = "Kalyan";
            $user->save();*/

            $users = User::find_all();
            //print_r($users);
            foreach ($users as $user) {
                echo $user->username . "<br>";
            }

            /*$photos = Photo::find_all();
            foreach ($photos as $photo) {
                echo $photo->title;
            }*/
            /*$photo = Photo::find_by_id(1);
            echo $photo->description;*/

            echo INCLUDES_PATH;
            ?>
            <!--
                        <form action="" method="post">
                            <label>Username:</label>
                            <input type="text" name="username">
                            <label>Password:</label>
                            <input type="password" name="password">
                            <label>First Name:</label>
                            <input type="text" name="first_name">
                            <label>Last Name:</label>
                            <input type="text" name="last_name">
                            <br>
                            <br>
                            <input type="submit" name="submit" value="Submit">
                        </form>
            -->
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i> <a href="index.html">Dashboard</a>
                </li>
                <li class="active">
                    <i class="fa fa-file"></i> Blank Page
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

</div>
<!-- /.container-fluid -->