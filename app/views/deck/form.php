<?php $this->layout("master"); ?>
<div>
    <form action="/saveCard" method="post">
        <label for="front">front</label>
        <input type="text" name="front">
        <br>
        id
        max_cards_per_day
        user_id
        <button type="submit">save</button>
    </form>
</div>