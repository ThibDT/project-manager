<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Project Manager</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="node_modules/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="node_modules/admin-lte/dist/css/adminlte.min.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <?php
        include('includes/nav.php');
        include('includes/aside.php');
        ?>
        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-12">
                            <h1>Project Detail</h1>
                        </div>
                    </div>
                </div>
            </section>
            <section class="content">
                <div class="card card-primary">
                    <div class="card-header">
                        <h2 class="card-title">Project Name</h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="info-box">
                                    <div class="info-box-content">
                                        <span class="info-box-text text-center text-muted">Created</span>
                                        <span class="info-box-number text-center text-muted mb-0">Project Creation Date</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="card card-info">
                                    <div class="card-header">
                                        <h3 class="card-title">Team Members</h3>
                                    </div>
                                    <div class="card-body p-0">
                                        <ul class="users-list clearfix">
                                            <li>
                                                <img src="http://lorempixel.com/400/400/people/1/" alt="User Image">
                                                <span class="users-list-name">User Full Name</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="card card-indigo">
                                    <div class="card-header">
                                        <h3 class="card-title text-light">Tasks</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <form id="task-form">
                                                    <div class="form-group">
                                                        <label for="label">Label</label>
                                                        <input type="text" class="form-control" name="label" id="label">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="description">Description</label>
                                                        <textarea name="description" id="description" class="form-control" cols="30" rows="3"></textarea>
                                                    </div>
                                                    <div class="form-group text-right">
                                                        <input type="submit" class="btn btn-success" value="Ajouter">
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="col-12">
                                                <div class="callout callout-info">
                                                    <div class="row">
                                                        <div class="col d-flex justify-content-center align-items-center">
                                                        <div class="custom-control custom-switch">
                                                            <input type="checkbox" checked class="custom-control-input" id="customSwitch1">
                                                            <label class="custom-control-label" for="customSwitch1"></label>
                                                        </div>
                                                        </div>
                                                        <div class="col-11">
                                                            <h5>Sample task</h5>
                                                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptas hic ipsum fugiat libero labore quod natus minima nihil veniam fugit, ex nobis, vitae aut rem doloribus, explicabo repudiandae vel impedit?</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="callout callout-info">
                                                    <div class="row">
                                                        <div class="col d-flex justify-content-center align-items-center">
                                                        <div class="custom-control custom-switch">
                                                            <input type="checkbox" checked class="custom-control-input" id="customSwitch2">
                                                            <label class="custom-control-label" for="customSwitch2"></label>
                                                        </div>
                                                        </div>
                                                        <div class="col-11">
                                                            <h5>Sample task</h5>
                                                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptas hic ipsum fugiat libero labore quod natus minima nihil veniam fugit, ex nobis, vitae aut rem doloribus, explicabo repudiandae vel impedit?</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="callout callout-info">
                                                    <div class="row">
                                                        <div class="col d-flex justify-content-center align-items-center">
                                                        <div class="custom-control custom-switch">
                                                            <input type="checkbox" class="custom-control-input" id="customSwitch3">
                                                            <label class="custom-control-label" for="customSwitch3"></label>
                                                        </div>
                                                        </div>
                                                        <div class="col-11">
                                                            <h5>Sample task</h5>
                                                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptas hic ipsum fugiat libero labore quod natus minima nihil veniam fugit, ex nobis, vitae aut rem doloribus, explicabo repudiandae vel impedit?</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="callout callout-info">
                                                    <div class="row">
                                                        <div class="col d-flex justify-content-center align-items-center">
                                                        <div class="custom-control custom-switch">
                                                            <input type="checkbox" class="custom-control-input" id="customSwitch4">
                                                            <label class="custom-control-label" for="customSwitch4"></label>
                                                        </div>
                                                        </div>
                                                        <div class="col-11">
                                                            <h5>Sample task</h5>
                                                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptas hic ipsum fugiat libero labore quod natus minima nihil veniam fugit, ex nobis, vitae aut rem doloribus, explicabo repudiandae vel impedit?</p>
                                                        </div>
                                                    </div>
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
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="node_modules/select2/dist/js/select2.full.min.js"></script>
    <script src="node_modules/admin-lte/dist/js/adminlte.min.js"></script>
    <script src="static/js/view_project.js"></script>
    <script>
        $('.select2').select2()
    </script>
</body>

</html>