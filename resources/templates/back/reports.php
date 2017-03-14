<h1 class="page-header">
   All Products
</h1>
    <?php display_message(); ?>
<table class="table table-hover">
    <thead>
      <tr>
           <th>Id</th>
           <th>Product Id</th>
           <th>Order Id</th>
           <th>Price</th>
           <th>Product title</th>
           <th>Product quantity</th>
      </tr>
    </thead>
    <tbody>
        <?php get_reports(); ?>
    </tbody>
</table>