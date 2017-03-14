<div class="row">
    <h1 class="page-header">
        All Orders
    </h1>
    <?php display_message(); ?>
</div>
<div class="row">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Amount</th>
                <th>Transaction Id</th>
                <th>Currency</th>
                <th>Status</th>
                <th>PayPal Transaction</th>
            </tr>
        </thead>
        <tbody>
            <?php display_orders(); ?>
        </tbody>
    </table>
</div>