<?php 
/** Fenom template 'index.tpl' compiled at 2020-07-02 12:59:54 */
return new Fenom\Render($fenom, function ($var, $tpl) {
?><?php
/* index.tpl:1: {var $v = rand(1000,9999) } */
 $var["v"]=rand(1000, 9999); ?>
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
            <form id="addTaskForm"> <!-- class="was-validated" -->
                <div class="mb-3">
                    <div class="input-group"> <!--  is-invalid -->
                        <label for="addTask">Добавить задачу</label>
                        <div class="input-group">
                            <input id="addTask" name="task" type="text" class="form-control"
                                   aria-describedby="validatedInputGroupPrepend" required>  <!--  is-invalid -->
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-primary">Добавить задачу</button>
                            </div>
                        </div>

                    </div>
                    <div class="invalid-feedback">
                        Напишите задачу
                    </div>
                </div>
            </form>
            <?php $t45e480cd_1 = (isset($var["tasks"]) ? $var["tasks"] : null); if(is_array($t45e480cd_1) && count($t45e480cd_1) || ($t45e480cd_1 instanceof \Traversable)) {
  foreach($t45e480cd_1 as $var["task"]) { ?>
                <?php
/* index.tpl:40: {$task['id']} */
 echo (isset($var["task"]['id']) ? $var["task"]['id'] : null); ?>
            <?php
/* index.tpl:41: {/foreach} */
   } } ?>

            <ul class="task-list list-group">
                <li data-task="0" class="task-list_task list-group-item d-flex align-items-center">
                    <div class="task-list_name flex-grow-1">
                        Task 1
                    </div>
                    <div class="task-list_actions">
                        <button class="btn btn-sm btn-outline-danger">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </li>
                <li data-task="1" class="task-list_task list-group-item d-flex align-items-center">
                    <div class="task-list_name flex-grow-1">
                        Task 2
                    </div>
                    <div class="task-list_actions">
                        <button class="btn btn-sm btn-outline-danger">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </li>
                <li data-task="2" class="task-list_task list-group-item d-flex align-items-center">
                    <div class="task-list_name flex-grow-1">
                        Task 3
                    </div>
                    <div class="task-list_actions">
                        <button class="btn btn-sm btn-outline-danger">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/7f03e47334.js" crossorigin="anonymous"></script>
<script src="http://malsup.github.io/min/jquery.form.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-jgrowl/1.4.7/jquery.jgrowl.min.js"></script>
<script src="assets/js/scripts.js?v=<?php
/* index.tpl:82: {$v} */
 echo (isset($var["v"]) ? $var["v"] : null); ?>"></script>
</body>
</html>
<?php
}, array(
	'options' => 2176,
	'provider' => false,
	'name' => 'index.tpl',
	'base_name' => 'index.tpl',
	'time' => 1593694784,
	'depends' => array (
  0 => 
  array (
    'index.tpl' => 1593694784,
  ),
),
	'macros' => array(),

        ));
