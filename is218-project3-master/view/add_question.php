<?php include './templates/header.php';?>
<div class="container h-100 justify-content-center">
    <h2>Add question</h2>
    <form action="../index.php" name="add_question" method="post">
        <input type="hidden" name="form_action" value="add_question">
        <div class="form-group">
            <label for="q-name">Name</label>
            <input id="q-name" class="form-control" type="text" name="name">

            <label for="q-body">Body</label>
            <textarea id="q-body" class="form-control" type="text" class="bigtext" name="body"></textarea>

            <label for="q-skills">Skills</label>
            <input id="q-skills" class="form-control" type="text" name="skills">

            <input class="btn btn-primary" type="submit">
        </div>
    </form>
</div>
<?php include './templates/footer.php'; ?>