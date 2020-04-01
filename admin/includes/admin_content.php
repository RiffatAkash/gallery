<div class="container-fluid">

<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Blank Page
            <small>Subheading</small>
        </h1>

        <?php

        //INSERT
        
        // $user = new User();
        
        // $user->username    = "DEMO1";
        // $user->password    = "DEMO1";
        // $user->first_name  = "DEMO1";
        // $user->last_name   = "DEMO1";

        // $user->save();

        //UPDATE

        $user = User::find_users_by_id(12);
        
        $user->username    = "INILABS";
        $user->password    = "123456";
        $user->first_name  = "INILABS";
        $user->last_name   = "INILABS";
        
        $user->save();

        //DELETE

        // $user = User::find_users_by_id(3);
        // $user->delete();

            
        
        ?>

        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
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