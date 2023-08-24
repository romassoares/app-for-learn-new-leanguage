<?php $this->layout("master"); ?>
<div>
    <form action="/saveCard" method="post">
        <label for="front">front</label>
        <input type="text" name="front">
        <br>
        id
        name
        email
        password
        <button type="submit">save</button>
    </form>
</div>