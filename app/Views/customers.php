<?= view('templates/header', ['title' => $title]) ?>

<h1>Customer Accounts</h1>

<p>Below are the customer records currently registered in the system.</p>

<table>
    <thead>
        <tr>
            <th>Full Name</th>
            <th>Email Address</th>
            <th>Phone Number</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($customers as $customer): ?>
            <tr>
                <td><?= esc($customer['full_name']) ?></td>
                <td><?= esc($customer['email']) ?></td>
                <td><?= esc($customer['phone']) ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<p class="record-count">
    Total customers: <?= count($customers) ?>
</p>

<?= view('templates/footer') ?>