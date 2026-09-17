<?= view('templates/header', ['title' => $title]) ?>

<h1>User Accounts</h1>

<p>Below are the user and staff accounts registered in the system.</p>

<table>
    <thead>
        <tr>
            <th>Username</th>
            <th>Full Name</th>
            <th>Date Created</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?= esc($user['username']) ?></td>
                <td><?= esc($user['full_name']) ?></td>
                <td><?= esc($user['created_at']) ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<p class="record-count">
    Total users: <?= count($users) ?>
</p>
<?= view('templates/footer') ?>