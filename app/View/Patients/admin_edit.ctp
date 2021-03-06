<!-- Content Header (Page header) -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/bs-3.3.5/jq-2.1.4,dt-1.10.8/datatables.min.css"/>

<script type="text/javascript" src="https://cdn.datatables.net/r/bs-3.3.5/jqc-1.11.3,dt-1.10.8/datatables.min.js"></script>


<!--  <section class="content-header">
<h1>
Dashboard
<small>Control panel</small>
</h1>

</section> -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-4">
          <!-- general form elements -->
      
            <div class="box-header with-border">
              <h2 style="margin:0 !important">Edit Patient Details</h2>
            </div>
 
    
          

    <div class="form_sec white">
    <div class="col-md-12 padding">
        <?php echo $this->Form->create('Patient');?>
       <div class="box-body">    
        <?php echo $this->Form->input('id'); ?>
        <?php // echo $this->Form->input('role', array('class' => 'form-control', 'options' => array('admin' => 'admin', 'customer' => 'customer','rest_admin'=>'Restaurant Admin'),'default'=> $this->request->data['User']['role'] )); ?>
        <br />
        <?php echo $this->Form->input('name', array('class' => 'form-control')); ?>
        <br />
         <?php echo $this->Form->input('address', array('class' => 'form-control','readOnly'=>'required')); ?>
        <br /> 
        <?php echo $this->Form->input('phonenumber', array('class' => 'form-control')); ?>
        <br /> 
        <?php echo $this->Form->input('dob', array('class' => 'form-control')); ?>
        <br />
		<?php echo $this->Form->input('insurancename', array('class' => 'form-control')); ?>
        <br />
        <?php echo $this->Form->input('insurancenumber', array('class' => 'form-control')); ?>
        <br />
        <?php echo $this->Form->input('doctorname', array('class' => 'form-control')); ?>
        <br />
        <?php echo $this->Form->input('doctornumber', array('class' => 'form-control')); ?>
        <br />
        <?php echo $this->Form->input('doctorfaxnumber', array('class' => 'form-control')); ?>
        <br />
        <?php echo $this->Form->input('npinumber', array('class' => 'form-control')); ?>
        <br />
        <?php echo $this->Form->input('diagnosis', array('class' => 'form-control')); ?>
        
        <div class="box-footer">
           <?php echo $this->Form->button('Submit', array('class' => 'btn btn-primary')); ?>
        </div>
</div>
    <?php $this->Form->end() ?>

</div>
</div></div></div>
</section>

<style>
.prcheck > label {
    float: left;
    margin-left: 5px;
    width: auto;
}
.prcheck > input {
    float: left;
}
</style>