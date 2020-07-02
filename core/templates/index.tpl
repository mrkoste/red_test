{var $v = rand(1000,9999) }
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-jgrowl/1.4.7/jquery.jgrowl.min.css"/>

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col pt-5">
            <div class="mb-3">
                <div class="input-group"> <!--  is-invalid -->
                    <label for="addTaskInput">Добавить задачу</label>
                    <div class="input-group">
                        <input id="addTaskInput" name="task" type="text" class="form-control"
                               aria-describedby="validatedInputGroupPrepend" required>  <!--  is-invalid -->
                        <div class="input-group-append">
                            <button type="submit" id="addTaskAction" class="btn btn-primary">Добавить задачу</button>
                        </div>
                    </div>

                </div>
                <div class="invalid-feedback">
                    Напишите задачу
                </div>
            </div>


            <ul id="task-list" class="task-list list-group">
                {foreach $tasks as $task}
                    {include '_task.tpl' name=$task['name'] id=$task['id']}
                {/foreach}
            </ul>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/7f03e47334.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-jgrowl/1.4.7/jquery.jgrowl.min.js"></script>
<script src="assets/js/scripts.js?v={$v}"></script>
</body>
</html>
