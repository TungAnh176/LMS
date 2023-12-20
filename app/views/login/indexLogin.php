<?php
include(APP_Root. "/app/layout/header.php");
?>
<div id="page" class="container-fluid mt-0">
    <div id="page-content" class="row">
        <div id="region-main-box" class="col-12">
            <section id="region-main" class="col-12">
                <span class="notifications" id="user-notifications"></span>
                <div role="main"><span id="maincontent"></span>
                    <div class="my-1 my-sm-5"></div>
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-sm-8 ">
                            <div class="card">
                                <div class="card-block">
                                    <h1 style="background-color: #88B77B;" class="h2 card-header text-center" aria-label="Elearning TLU: Log in">Elearning TLU</h1>
                                    <div class="card-body">
                                        <div class="row justify-content-md-center">
                                            <div class="col-md-5">
                                                <?php
                                                    if(isset($_GET['error'])){
                                                        echo "<p style='color:red'>{$_GET['error']}</p>";
                                                    }
                                                ?>
                                                <form class="mt-3" action="index.php?c=user&a=login" method="post" id="login">
                                                    <div class="form-group">
                                                        <label for="username" class="sr-only">
                                                            Username
                                                        </label>
                                                        <input type="text" name="username" id="username" class="form-control" value="" placeholder="Username or Email">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="password" class="sr-only">Password</label>
                                                        <input type="password" name="password" id="password" value="" class="form-control" placeholder="Password">
                                                    </div>
                                                    <button type="submit" class="btn btn-primary btn-block mt-3" id="loginbtn">Log in</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
</div>
<?php
include(APP_Root. "/app/layout/footer.php");
?>