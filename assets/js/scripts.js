

(function() {

    var apiUrl = '/index.php';
    var elAddTaskInput = $('#addTaskInput');
    var elAddTaskAction = $('#addTaskAction');
    var elTaskList = $('#task-list');

    elAddTaskAction.on('click', addTask);

    elTaskList.on('click','.taskDelete',  deleteTask);

    function addTask() {
        var taskTitle = elAddTaskInput.val();
        if(taskTitle === '') {
            elAddTaskInput.addClass('is-invalid')
        } else {
            elAddTaskInput.removeClass('is-invalid')
            sendRequest('addTask', {'name' : taskTitle}, addTasksToList)
            Message.success('Задача добавлена');
            elAddTaskInput.val('');
        }

    }

    function deleteTask(el) {
        var id = $(this).data('id')
        sendRequest('removeTask', {'id' : id}, addTasksToList)
        Message.success('Задача удалена');
    }

    function addTasksToList(data) {
        data = JSON.parse(data);
        elTaskList.children().remove();
        elTaskList.append(data.data.content);
    }

    function sendRequest(action, data, callback) {
        var requestData = {
            action: action
        };
        Object.assign(requestData, data);
        $.post(apiUrl, requestData).done(callback);
    }


    var Message = {
        success: function (message, sticky) {
            if (message) {
                if (!sticky) {
                    sticky = false;
                }
                $.jGrowl(message, {theme: 'af-message-success', sticky: sticky});
            }
        },
        error: function (message, sticky) {
            if (message) {
                if (!sticky) {
                    sticky = false;
                }
                $.jGrowl(message, {theme: 'af-message-error', sticky: sticky});
            }
        },
        info: function (message, sticky) {
            if (message) {
                if (!sticky) {
                    sticky = false;
                }
                $.jGrowl(message, {theme: 'af-message-info', sticky: sticky});
            }
        },
        close: function () {
            $.jGrowl('close');
        },
    }
})();
