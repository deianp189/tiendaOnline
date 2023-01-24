<div class="login-box">
    <div class="login-logo">
        <a href="../../index2.html"><b>tienda</b>online</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">iniciar session</p>

        <form  method="post">
            <div class="form-group has-feedback">
                <input type="email" class="form-control" placeholder="Email" name="ingEmail">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" placeholder="Password" name="ingPassword">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">

                <!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">logearme</button>
                </div>
                <!-- /.col -->
            </div>

            <?php 

            $login = new ControladorAdministradores();
            $login ->ctrIngresoAdministrador();
            
            
            
            ?>




        </form>



    </div>
    <!-- /.login-box-body -->
</div>