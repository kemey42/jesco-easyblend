<div class="page-header row">
<div class="col">
	<h2 class="mb-0">Create New Program</h2>
</div>
	<button id="btnSaveProject" type="button" class="btn btn-success float-right">
	<span class="oi oi-file"></span>&nbsp;&nbsp;Save</button>
</div>
<hr>

<!--tab navigation-->
<nav>
  <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active" id="nav-eqp-tab" data-toggle="tab" href="#nav-eqp" role="tab" aria-controls="nav-eqp" aria-selected="true">1. Equipment Selection</a>
    <a class="nav-item nav-link" id="nav-ctl-tab" data-toggle="tab" href="#nav-ctl" role="tab" aria-controls="nav-ctl" aria-selected="false">2. Control Selection</a>
    <a class="nav-item nav-link" id="nav-seq-tab" data-toggle="tab" href="#nav-seq" role="tab" aria-controls="nav-seq" aria-selected="false">3. Sequence Control</a>
	<a class="nav-item nav-link" id="nav-sum-tab" data-toggle="tab" href="#nav-sum" role="tab" aria-controls="nav-sum" aria-selected="false">4. Program Summary</a>
  </div>
</nav>

<!--tab content-->
<div class="tab-content border-right border-bottom border-left" id="nav-tabContent">
  
  <!--tab 1. Equipment Selection-->
  <div class="tab-pane fade show active" id="nav-eqp" role="tabpanel" aria-labelledby="nav-eqp-tab">
  <div class="container pl-5 pr-5 pt-3 pb-3">
  <div class="row">
	<div class="card-deck">
	
	<!--Card 1: Dosing Pump-->
	<div class="card">
	<img class="card-img-top" src="././res/img/eqp_pump.jpg" alt="Dosing Pump">
	<div class="card-body">
	<h5 class="card-title">Dosing Pump</h5>
		<div class="input-group">
		<div class="input-group-prepend">
		<span class="input-group-text" id="inputQty">QTY</span>
		</div>
		<input id="qty_pump" type="number" class="form-control" aria-label="Medium" aria-describedby="inputGroup-sizing-sm" value="0" disabled>
		</div>
	</div>
	<div class="card-footer">
		<div class="btn-group special" role="group">
		<button id="btn_pump_minus" type="button" class="btn btn-danger">
		<span class="oi oi-minus" title="minus" aria-hidden="true"></span>
		</button>
		<button id="btn_pump_plus" type="button" class="btn btn-primary">
		<span class="oi oi-plus" title="plus" aria-hidden="true"></span>
		</button>
		</div>
	</div>
	</div>
	
	<!--Card 2: Solenoid Valve-->
	<div class="card">
	<img class="card-img-top" src="././res/img/eqp_valve.jpg" alt="Solenoid Valve">
	<div class="card-body">
	<h5 class="card-title">Solenoid Valve</h5>
		<div class="input-group">
		<div class="input-group-prepend">
		<span class="input-group-text" id="inputQty">QTY</span>
		</div>
		<input id="qty_valve" type="number" class="form-control" aria-label="Medium" aria-describedby="inputGroup-sizing-sm" value="0" disabled>
		</div>
	</div>
	<div class="card-footer">
		<div class="btn-group special" role="group">
		<button id="btn_valve_minus" type="button" class="btn btn-danger">
		<span class="oi oi-minus" title="minus" aria-hidden="true"></span>
		</button>
		<button id="btn_valve_plus" type="button" class="btn btn-primary">
		<span class="oi oi-plus" title="plus" aria-hidden="true"></span>
		</button>
		</div>
	</div>
	</div>

	<!--Card 3: Agitator-->
	<div class="card">
	<img class="card-img-top" src="././res/img/eqp_agitator.jpg" alt="Agitator">
	<div class="card-body">
	<h5 class="card-title">Agitator</h5>
		<div class="input-group">
		<div class="input-group-prepend">
		<span class="input-group-text" id="inputQty">QTY</span>
		</div>
		<input id="qty_agitator" type="number" class="form-control" aria-label="Medium" aria-describedby="inputGroup-sizing-sm" value="0" disabled>
		</div>
	</div>
	<div class="card-footer">
		<div class="btn-group special" role="group">
		<button id="btn_agitator_minus" type="button" class="btn btn-danger">
		<span class="oi oi-minus" title="minus" aria-hidden="true"></span>
		</button>
		<button id="btn_agitator_plus" type="button" class="btn btn-primary">
		<span class="oi oi-plus" title="plus" aria-hidden="true"></span>
		</button>
		</div>
	</div>
	</div>
	
	<!--Card 4: Level Sensor-->
	<div class="card">
	<img class="card-img-top" src="././res/img/eqp_level.jpg" alt="Level Sensor">
	<div class="card-body">
	<h5 class="card-title">Level Sensor</h5>
		<div class="input-group">
		<div class="input-group-prepend">
		<span class="input-group-text" id="inputQty">QTY</span>
		</div>
		<input id="qty_level" type="number" class="form-control" aria-label="Medium" aria-describedby="inputGroup-sizing-sm" value="0" disabled>
		</div>
	</div>
	<div class="card-footer">
		<div class="btn-group special" role="group">
		<button id="btn_level_minus" type="button" class="btn btn-danger">
		<span class="oi oi-minus" title="minus" aria-hidden="true"></span>
		</button>
		<button id="btn_level_plus" type="button" class="btn btn-primary">
		<span class="oi oi-plus" title="plus" aria-hidden="true"></span>
		</button>
		</div>
	</div>
	</div>

	</div>
  </div>
  </div>
  </div>
  
  <!--tab 2. Control Selection-->
  <div class="tab-pane fade" id="nav-ctl" role="tabpanel" aria-labelledby="nav-ctl-tab">
	<div class="container pl-5 pr-5 pt-3 pb-3">
	<form id="ctrlSelForm">
	
		<!--Dosing Pump-->
		<div id="controlSelectionPump" class="row collapse"></div>

		<!--Solenoid Valve-->
		<div id="controlSelectionValve" class="row collapse"></div>
		
		<!--Agitator-->
		<div id="controlSelectionAgit" class="row collapse"></div>

		<!--Level Sensor <div id="controlSelectionLevel" class="row collapse"></div>-->
		

	</form>	
	</div>
  </div>
  
  <!--tab 3. Sequence Control-->
  <div class="tab-pane fade" id="nav-seq" role="tabpanel" aria-labelledby="nav-seq-tab">
	<div class="container pl-5 pr-5 pt-3 pb-3">
	<form id="seqCtrlForm" class="row">
	
		<!--Dosing Pump-->
		<div id="seqControlPump" class="col-md-4 collapse"></div>

		<!--Solenoid Valve-->
		<div id="seqControlValve" class="col-md-4 collapse"></div>
		
		<!--Agitator-->
		<div id="seqControlAgit" class="col-md-4 collapse"></div>

		<!--Level Sensor<div id="seqControlLevel" class="col-sm-3 collapse"></div>-->

	</form>	
	</div>
  </div>
  
  <!--tab 4. Program Summary-->
  <div class="tab-pane fade" id="nav-sum" role="tabpanel" aria-labelledby="nav-sum-tab">
	<div class="container pl-5 pr-5 pt-3 pb-3">
	<form id="ProjectSummary">
		<div class="form-group row">
			<label for="inpProjName" class="col-sm-2 col-form-label">Program Name</label>
			<div class="col-sm-4">
			<input type="text" class="form-control" id="inpProjName">
			</div>
			<label for="inpProjDate" class="col-sm-2 col-form-label">Date & Time</label>
			<div class="col-sm-2 p-0">
			<input type="text" class="form-control" id="inpProjDate" value="<?php date_default_timezone_set("Asia/Kuala_Lumpur"); echo date("d/m/Y") ?>" disabled>
			</div>
			<div class="col-sm-2 p-0">
			<input type="text" class="form-control" id="inpProjTime" value="<?php date_default_timezone_set("Asia/Kuala_Lumpur"); echo date("h:i:sa") ?>" disabled>
			</div>
		</div>

		<div class="row">
			<table class="table table-bordered table-sm">
				<thead class="thead-light">
				<tr>
				<th scope="col">Equipment</th>
				<th scope="col">Details</th>
				<th scope="col">Step Sequence</th>
				</tr>
				</thead>
				<tbody id="datatable">
				</tbody>
			</table>
		</div>

	</form>
	</div>
  </div>

</div>


