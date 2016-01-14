<section class="content">
<div class="row">
<div class="col-md-8 col-sm-16 col-xs-18">
    <div>
        <h1>All Invoice</h1>
    </div>
    
    <h3>Total Invoice: <?php echo $count_invoice; ?></h3>
    <form class="form-inline" role="form" action="<?=  base_url()?>inventory/gettotalreport" method="post">
        <input type="submit" value="Get Report">
    </form>

    <form class="form-inline" role="form" action="<?=  base_url()?>inventory/gettotalverbosereport" method="post">
        <input type="submit" value="Get Verbose Report">
    </form>


    <table class="table table-bordered table-hover">
        <thead>
            <th>SI No.</th>
            <th>Date</th>
            <th>Invoice No.</th>
            <th>Customer Name</th>
            <th>Product Quantity</th>
            <th>Subtotal</th>
            <th>Discount</th>
            <th>Total</th>
            <th>Sold By</th>
            <th></th>
        </thead>
        <tbody class="inventory">
        <?php $i = 1;?>
        <?php foreach($invoices as $inv){ ?>
            <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $inv->date;?></td>
                <td><?php echo $inv->invoice_no;?></td>
                <td><?php echo $inv->customer_name;?></td>
                <td><?php echo $inv->quantity ;?></td>
                <td><?php echo $inv->subtotal ;?></td>
                <td><?php echo $inv->totalDiscount ;?></td>
                <td><?php echo $inv->total ;?></td>
                <td><?php echo $inv->sells_person_name ;?></td>
                <td><a class="btn btn-default" href="<?php base_url();?>print_later_from_invoice_data/<?php echo $inv->customer_id ;?>">Print</a></td>
                <td><a class="btn btn-default" href="<?php base_url();?>modify_invoice_data/<?php echo $inv->customer_id ;?>">Edit</a></td>
            </tr>
        <?php }  ?>
        </tbody>
    </table>
    <?php echo $this->pagination->create_links(); ?>
</div>
</div>

    <h2>Total Sell by Invoice</h2>
<table class="table table-bordered table-hover">
        <thead>           
            <th>Name</th>            
            <th>Total Sell</th>      
        </thead>
        <tbody class="inventory">
        <?php foreach($total_sold_by as $sell){ ?>
            <tr>              
                <td><?php echo $sell->sells_person_name ;?></td>
                <td><?php echo $sell->total_no_of_sell ;?></td>              
            </tr>
        <?php }  ?>
        </tbody>
    </table>
    <h2>Total Sell by Quantity and Amount</h2>
<table class="table table-bordered table-hover">
        <thead>
            <th>Name</th>
            <th>Quantity</th>
            <th>Quantity</th>
            <th>Amount</th>
        </thead>
        <tbody class="inventory">
        <?php foreach($total_sold_amount_by as $sell){ ?>
            <tr>
                <td><?php echo $sell->Seller ;?></td>
                <td><?php echo $sell->Quantity ;?></td>
                <td><?php echo $sell->TotalAmount ;?></td>
            </tr>
        <?php }  ?>
        </tbody>
    </table>
</section>
