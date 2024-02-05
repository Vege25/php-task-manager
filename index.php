<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Manager</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container-xl">
        <div class="form-container">
            <h1 class="my-4">Task Manager</h1>
        
            <form id="taskForm" action="add_task.php" method="post">
                <label for="task_name">Task Name:</label>
                <input type="text" name="task_name" required>
                
                <label for="task_description">Task Description:</label>
                <textarea name="task_description"></textarea>

                <label for="task_due_date">Post it color: </label>
                <div class="radio-container">
                    <input type="radio" id="html" name="col" value="red">
                    <label for="html">Red</label><br>
                    <input type="radio" id="css" name="col" value="blue">
                    <label for="css">Blue</label><br>
                    <input type="radio" id="javascript" name="col" value="green">
                    <label for="javascript">Green</label>
                </div>
        
                <button type="button" id="submitTask">Add Task</button>
            </form>
        </div>
        <div class="tasks-container">
            <h2 class="mt-4">Task List</h2>
            <div id="taskList">
                <?php include 'get_tasks.php'; ?>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#submitTask').click(function() {
                $.ajax({
                    type: 'POST',
                    url: 'add_task.php',
                    data: $('#taskForm').serialize(),
                    success: function(response) {
                        // Update task list
                        $('#taskList').load('get_tasks.php');
                        // Show success message or handle as needed
                        console.log(response);
                    },
                    error: function(error) {
                        // Handle errors
                        console.log(error);
                    }
                });
            });
        });
    </script>
</body>
</html>
