<?php $pageTitle = "Create Task"; ?>
<?php include_once "partials/header.php" ?>

<div class="container-fluid">
    <section class="col-xs-12 main">
       <div id="ajax_msg" class=" col-xs-6 pull-right alert alert-success"></div>
        <h3 class="text-primary">Manage Task </h3><hr>
        <table class="table table-striped table-bordered table-responsive">
            <thead>
            <tr><th>Name</th><th>Description</th><th>Status</th><th>Created</th><th>Action</th></tr>
            </thead>
           
            <tbody id="task-list"></tbody>
        </table>
    </section>
</div>

<?php include_once "partials/footer.php" ?>