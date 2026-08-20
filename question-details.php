<div class="container">
<h1 class="header">Question</h1>
<div class="col-8">
<?php
    include("./common/db.php");
    $query = "select * from questions where Id = $qid ";
    $result =  $conn->query($query);
    $row = $result->fetch_assoc();
    echo "<h4 class= 'margin-bottom question-title'>"."Question: ".$row['title']."</h4>
    <p class ='margin-bottom'>"."Description: ".$row['description']."</p>";

?>
<form action="./server/requests.php" method="post">
    <input type="hidden" name="question_id" value="<?php echo $qid ?>">
<textarea class="form-control margin-bottom" name="answer" placeholder="Your Answer..."></textarea>
<button class="btn btn-primary margin-bottom">Post</button>
</form>
<?php 
    include("answers.php");
?>
</div>
</div>