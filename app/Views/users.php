<?= view('templates/header', ['title' => $title]) ?>

<h1>User Accounts</h1>

<p>Below are the user and staff accounts in the POS system.</p>

<table>
    <thead>
        <tr>
            <th>Username</th>
            <th>Full Name</th>
            <th>Role</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?= esc($user['username']) ?></td>
                <td><?= esc($user['full_name']) ?></td>
                <td><?= esc($user['role']) ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<p>Total users: <?= count($users) ?></p>

<?= view('templates/footer') ?>