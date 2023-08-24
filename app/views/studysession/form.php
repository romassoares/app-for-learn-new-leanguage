<?php $this->layout("master"); ?>
<div>
    <form action="/saveCard" method="post">
        <label for="front">front</label>
        <input type="text" name="front">
        <br>
        id
        user_id
        deck_id
        card_to_study
        current_card_index
        <button type="submit">save</button>
    </form>
</div>