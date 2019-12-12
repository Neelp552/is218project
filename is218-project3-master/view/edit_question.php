<?php session_start() ?>
<?php include './templates/header.php';?>
<div class="container h-100 justify-content-center">
    <h2>Edit question</h2>
    <form action="../index.php" name="edit_question" method="post">
        <input type="hidden" name="form_action" value="edit_question">
        <input type="hidden" name="id" value="<?php echo $_SESSION["selected_question"]["id"]?>">
        <div class="form-group">
            <label for="q-name">Name</label>
            <input id="q-name" class="form-control" type="text" name="name" value="<?php echo $_SESSION["selected_question"]["title"]?>">

            <label for="q-body">Body</label>
            <textarea id="q-body" class="form-control" type="text" class="bigtext" name="body"><?php echo $_SESSION["selected_question"]["body"]?></textarea>

            <label for="q-skills" >Skills</label>
            <input id="q-skills" class="form-control" type="text" name="skills" value="<?php echo $_SESSION["selected_question"]["skills"]?>">

            <input class="btn btn-primary" type="submit">
        </div>
    </form>
</div>
<?php include './templates/footer.php'; ?>