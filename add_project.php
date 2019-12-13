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
                            <h1>New Project</h1>
                        </div>
                    </div>
                </div>
            </section>
            <section class="content">
                <div class="card card-primary">
                    <form role="form" method="POST">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="project_name">Project Name</label>
                                <input type="text" name="name" class="form-control" id="project_name" placeholder="Enter a name for this project" required>
                            </div>
                            <div class="form-group">
                                <label>Users</label>
                                <select class="select2" multiple="multiple" name="users[]" data-placeholder="Select Users" style="width: 100%;" required>
                                    <!-- Exemple à reproduire pour chaque utilisateur -->
                                    <option value="1">User 1</option>
                                    <!-- Fin exemple -->
                                    <option value="2">User 2</option>
                                    <option value="3">User 3</option>
                                </select>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="node_modules/select2/dist/js/select2.full.min.js"></script>
    <script src="node_modules/admin-lte/dist/js/adminlte.min.js"></script>
    <script>
        $('.select2').select2()
    </script>
</body>

</html>