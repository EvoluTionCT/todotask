<?php

//ใช้ HTTP Message สำหรับการทำ Request และ Response
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app = new \Slim\App;

$app->options('/{routes:.+}', function ($request, $response, $args) {
    return $response;
});
//add parameter $req,$res,$next to compile with restful-api
$app->add(function ($req, $res, $next) {
    $response = $next($req, $res);
    return $response
            ->withHeader('Access-Control-Allow-Origin', '*')
            ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization')
            ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');
});

// View all items in the list
$app->get('/api/tasks', function(Request $request, Response $response){
    //SQL Query
    $sql = "SELECT * FROM tasks";

    try{
        // Get DB Object
        $db = new db();
        // Connect
        $db = $db->connect();
        //Get all of task
        $stmt = $db->query($sql);
        $tasks = $stmt->fetchAll(PDO::FETCH_OBJ);
        $db = null;
        echo json_encode($tasks);
    } catch(PDOException $e){
        echo '{"error": {"text": '.$e->getMessage().'}';
    }
});

// View a single task in the list
$app->get('/api/task/{id}', function(Request $request, Response $response){
    //To fetch single request parameter value
    $id = $request->getAttribute('id');
    $sql = "SELECT * FROM tasks WHERE id = $id";
    try{
        // Get DB Object
        $db = new db();
        // Connect
        $db = $db->connect();
        //Query data from $sql statement
        $stmt = $db->query($sql);
        //Send $stmt fecth Query and keep on $task
        $task = $stmt->fetch(PDO::FETCH_OBJ);

        $db = null;
        //print Result task with JSON FORMAT
        echo json_encode($task);
    } catch(PDOException $e){
        echo '{"error": {"text": '.$e->getMessage().'}';
    }
});

// Add a task to the list
$app->post('/api/task/add', function(Request $request, Response $response){
    //To fetch single request parameter value
    $subject = $request->getParam('subject');
    $detail = $request->getParam('detail');
    $status = $request->getParam('status');
    //SQL QUERY
    $sql = "INSERT INTO tasks (subject,detail,status) VALUES (:subject,:detail,:status)";

    try{
        // Get DB Object
        $db = new db();
        // Connect
        $db = $db->connect();
        //Add task to database
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':subject',$subject);
        $stmt->bindParam(':detail',$detail);
        $stmt->bindParam(':status',$status);
        $stmt->execute();
        //print text when complete to add task
        echo '{"notice": {"text": "Task has been added"}';

    } catch(PDOException $e){
        echo '{"error": {"text": '.$e->getMessage().'}';
    }
});

// Edit existing task
$app->put('/api/task/update/{id}', function(Request $request, Response $response){
    //To fetch single request parameter value
    $id = $request->getAttribute('id');
    $subject = $request->getParam('subject');
    $detail = $request->getParam('detail');
    $status = $request->getParam('status');

    //SQL QUERY
    $sql = "UPDATE tasks SET
		    subject = :subject,
				detail = :detail,
        status = :status,
			WHERE id = $id";

    try{
        // Get DB Object
        $db = new db();
        // Connect
        $db = $db->connect();
        // Update Task
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':subject', $subject);
        $stmt->bindParam(':detail',  $detail);
        $stmt->bindParam(':status',  $status);
        $stmt->execute();

        echo '{"notice": {"text": "Task has been Updated"}';

    } catch(PDOException $e){
        echo '{"error": {"text": '.$e->getMessage().'}';
    }
});

// Set the task status
$app->put('/api/task/update/status/{id}', function(Request $request, Response $response){
    //To fetch single request parameter value
    $id = $request->getAttribute('id');
    $status = $request->getParam('status');
    //SQL QUERY
    $sql = "UPDATE tasks SET
      status = :status
    WHERE id = $id";

    try{
        // Get DB Object
        $db = new db();
        // Connect
        $db = $db->connect();
        // Update status
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':status',  $status);
        $stmt->execute();

        echo '{"notice": {"text": "Status has been changed"}';

    } catch(PDOException $e){
        echo '{"error": {"text": '.$e->getMessage().'}';
    }
});

// Delete a task from the list
$app->delete('/api/task/delete/{id}', function(Request $request, Response $response){
    //To fetch single request parameter value
    $id = $request->getAttribute('id');
    //SQL QUERY
    $sql = "DELETE FROM tasks WHERE id = $id";

    try{
        // Get DB Object
        $db = new db();
        // Connect
        $db = $db->connect();
        //Delete Task
        $stmt = $db->prepare($sql);
        $stmt->execute();
        $db = null;
        echo '{"notice": {"text": "Task Deleted"}';
    } catch(PDOException $e){
        echo '{"error": {"text": '.$e->getMessage().'}';
    }
});
