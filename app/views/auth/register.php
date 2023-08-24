<?php $this->layout("master"); ?>
<div>
    <form action="/saveCard" method="post">
        <label for="front">front</label>
        <input type="text" name="front">
        <br>
        id
        front
        back
        correct_answers
        total_attemps
        deck_id
        <button type="submit">save</button>
    </form>
</div>