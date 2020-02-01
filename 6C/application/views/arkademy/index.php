<?php if ($this->session->flashdata('delete')) : ?>
  <div class="alert" tabindex="-1" role="dialog" style="position: absolute; right: 35%;">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header border-0">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <center> 
          <h4>Data Raisa Andriani ID #1</h4>
          <i class="far fa-check-circle fa-10x"></i>
          <h4>Berhasil Di Hapus</h4>
        </center>
      </div>
      <div class="modal-footer border-0">
       
      </div>
    </div>
  </div>
</div>
<?php endif; ?>





<div class="container">
	<table class="table mt-5 border shadow rounded-lg">
	  <thead style="background-color: #fdda47 ">
	    <tr class="text-white">
	      <th scope="col">No</th>
	      <th scope="col">Cashier</th>
	      <th scope="col">Product</th>
	      <th scope="col">Category</th>
	      <th scope="col">Price</th>
	      <th scope="col">Action</th>
	    </tr>
	  </thead>
	  <tbody>
      <?php $no = 1; ?>
      <?php foreach($table as $data) : ?>
	    <tr>
	      <th><?php echo $no++; ?></th>
	      <td><?php echo $data['Cashier']; ?></td>
	      <td><?php echo $data['Product']; ?></td>
	      <td><?php echo $data['Category']; ?></td>
	      <td><?php echo $data['Price']; ?></td>
	      <td>
	      	<a class="ml-2" href="<?php echo base_url(); ?>arkademy/delete/<?php echo $data['id'] ;?>"> <i class="fas fa-trash-alt"></i> </a>
	      	<a class="ml-2" href="" data-toggle="modal" data-target="#edit"> <i class="fas fa-edit"></i> </a>
	      </td>
	    </tr>
      <?php endforeach; ?>
	  </tbody>
	</table>


</div>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url(); ?>arkademy/add" method="post">
          <select class="form-control mb-3" name="Cashier" id="exampleFormControlSelect1">
            <?php foreach($table as $data) : ?>
            <option value="<?php echo $data['Cashier']; ?>"><?php echo $data['Cashier']; ?></option>
            <?php endforeach; ?>
          </select>
          <select class="form-control mb-3" name="Category" id="exampleFormControlSelect1">
            <?php foreach($table as $data) : ?>
            <option value="<?php echo $data['Category']; ?>"><?php echo $data['Category']; ?></option>
            <?php endforeach; ?>
          </select>
          <div class="form-group">
            <input type="text" class="form-control" name="Product" placeholder="Ice Tea">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="Price" placeholder="10.000">
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="submit" name="submit" class="btn rounded shadow" style="background-color: #fdda47; width:100px; color: white;">ADD</button>
        </form>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header border-0">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <center>	
        	<h4>Data Raisa Andriani ID #1</h4>
        	<i class="far fa-check-circle fa-10x"></i>
        	<h4>Berhasil Di Hapus</h4>
        </center>
      </div>
      <div class="modal-footer border-0">
      	
      </div>
    </div>
  </div>
</div>




<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
    <select class="form-control mb-2" id="exampleFormControlSelect1">
      <option>Pevita Pearce</option>
      <option>Raisa Andriana</option>
      <option>Joko Purwadi</option>
      <option>Mohamad Diki Alfin</option>
    </select>
    <select class="form-control mb-2" id="exampleFormControlSelect1">
      <option>Drink</option>
      <option>Food</option>
    </select>
    <input type="text" class="form-control mb-2" placeholder="Ice Tea">
    <input type="text" class="form-control" placeholder="Rp. 10.000">
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn rounded shadow" style="background-color: #fdda47; width:100px; color: white;">ADD</button>
      </div>
    </div>
  </div>
</div>