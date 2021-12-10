<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $row['p_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Edit Member</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="edit.php">
				<input type="hidden" class="form-control" name="id" value="<?php echo $row['p_id']; ?>">
				<!------------------------------------------->
				<div class="row form-group">

					<div class="col-sm-2">
						<label class="control-label modal-label">name:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="pname" value="<?php echo $row['p_name']; ?>">
					</div>

					<div class="col-sm-2">
						<label class="control-label modal-label">Brand:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="pbrand" value="<?php echo $row['p_brand']; ?>">
					</div>

					<div class="col-sm-2">
						<label class="control-label modal-label">Category:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="pcategory" value="<?php echo $row['p_category']; ?>">
					</div>

					<div class="col-sm-2">
						<label class="control-label modal-label">Quantity:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="pquantity" value="<?php echo $row['p_quantity']; ?>">
					</div>

					<div class="col-sm-2">
						<label class="control-label modal-label">Supplier:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="psupplier" value="<?php echo $row['p_supplier']; ?>">
					</div>

					<div class="col-sm-2">
						<label class="control-label modal-label">Damaged:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="pdamaged" value="<?php echo $row['p_damaged']; ?>">
					</div>

					<div class="col-sm-2">
						<label class="control-label modal-label">Perishable:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="pperishable" value="<?php echo $row['p_perishable']; ?>">
					</div>

					<div class="col-sm-2">
						<label class="control-label modal-label">Date In:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="pdatein" value="<?php echo $row['p_date_in']; ?>">
					</div>

					<div class="col-sm-2">
						<label class="control-label modal-label">Price:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="pprice" value="<?php echo $row['p_price']; ?>">
					</div>

					<div class="col-sm-2">
						<label class="control-label modal-label">Available:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="pavailable" value="<?php echo $row['p_available']; ?>">
					</div>

					<div class="col-sm-2">
						<label class="control-label modal-label">Exp date:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="pexpdate" value="<?php echo $row['p_expiry_date']; ?>">
					</div>
				</div>
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="edit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update</a>
			</form>
            </div>

        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete_<?php echo $row['p_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Delete Member</h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center">Are you sure you want to Delete</p>
				<h2 class="text-center"><?php echo $row['p_id'].' '.$row['p_name']; ?></h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <a href="delete.php?id=<?php echo $row['p_id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</a>
            </div>

        </div>
    </div>
</div>