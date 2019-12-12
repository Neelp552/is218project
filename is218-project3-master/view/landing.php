<?php session_start(); ?>
<?php include './templates/header.php'; ?>
<body>
<h1><?php echo sprintf("%s %s's", $_SESSION["firstname"], $_SESSION["lastname"])?> questions</h1>
<div class="container h-100 justify-content-center">
    <form action="index.php" name="question_table">
    <table id="questions" class="table">
        <tr>
            <th>Select</th>
            <th>Title</th>
            <th>Body</th>
            <th>Skills</th>
            <th>Score</th>
        </tr>
        <?php
            foreach($_SESSION["questions"] as $question){
                echo sprintf("<tr><td><input type='radio' name='id' class='form-control form-control-sm' value='%s'></td><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>", $question["id"], $question["title"], $question["body"], $question["skills"], $question["score"]);
            }
        ?>
    </table>
        <button class="btn btn-primary" name="form_action" formmethod="post" formaction="../index.php" value="display_add_question">Add a question</button>
        <button class="btn btn-primary" name="form_action" formmethod="post" formaction="../index.php" value="display_edit_question">Edit question</button>
        <button class="btn btn-primary" name="form_action" formmethod="post" formaction="../index.php" value="delete_question">Delete question</button>
    </form>
</div>
<?php include './templates/footer.php'; ?>