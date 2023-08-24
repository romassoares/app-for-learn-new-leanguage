<?php $this->layout("master"); ?>
<div class="row">
    <p>id: </p>
    <p>name:</p>
    <p>email:</p>
    <p>password:</p>
    <hr>
    <h2>Decks:</h2>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>name</th>
                <th>email</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>

                <?php foreach ($users as $user) : ?>
                    <td> <?php echo ($user) ?> </td>
                <?php endforeach ?>
            </tr>

        </tbody>
    </table>
</div>