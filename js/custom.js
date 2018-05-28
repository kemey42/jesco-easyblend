var arr_item = new Array();

//Control Selection Pump	
function addControlPump(x){
	var pumphtml = "<div id=\"controlSelectionPumpItem"+ x +"\" class=\"input-group-text row\">";
	pumphtml += "<label for=\"ctrl_pump"+ x +"\" class=\"col-sm-3 col-form-label\">Dosing Pump "+ x +"</label>";
	pumphtml += "<div class=\"col-sm-9\">";
	pumphtml += "<div class=\"btn-group btn-group-toggle special\" data-toggle=\"buttons\" id=\"ctrl_pump"+ x +"\">";
	var arr_pump = ["Pulse", "Batch", "Timer", "4-20mA"];
	arr_pump.forEach(function(entry){
		pumphtml += "<label class=\"btn btn-secondary\">";
		pumphtml += "<input type=\"radio\" name=\"options\" value=\"" + entry + "\" autocomplete=\"off\">";
		pumphtml += entry + "</label>";
	});
	pumphtml += "</div></div>";
	$('#controlSelectionPump').append(pumphtml);
};
function delControlPump(x){
	$("#controlSelectionPumpItem" + x).remove();
};

//Sequence Control Pump
function addSeqPump(x){
	var pumphtml2 = "<div id=\"seqControlPumpItem"+ x +"\" class=\"form-group row border p-1\">";
	pumphtml2 += "<label for=\"seq_pump"+ x +"\" class=\"col-sm col-form-label\">Dosing Pump "+ x +"</label>";
	pumphtml2 += "<div class=\"col-sm-4 p-0\">";
	pumphtml2 += "<input type=\"number\" class=\"form-control\" id=\"seq_pump"+ x +"\">";
	pumphtml2 += "</div></div>";
	$('#seqControlPump').append(pumphtml2);
};
function delSeqPump(x){
	$("#seqControlPumpItem" + x).remove();
};

//Control Selection Valve
function addControlValve(x){
	var valvehtml = "<div id=\"controlSelectionValveItem"+ x +"\" class=\"input-group-text row\">";
	valvehtml += "<label for=\"ctrl_valve"+ x +"\" class=\"col-sm-3 col-form-label\">Solenoid Valve "+ x +"</label>";
	valvehtml += "<div class=\"col-sm-5\">";
	valvehtml += "<div class=\"btn-group btn-group-toggle special\" data-toggle=\"buttons\" id=\"ctrl_valve"+ x +"\">";
	var arr_valve = ["Normally-Closed", "Normally-Open"];
	arr_valve.forEach(function(entry){
		valvehtml += "<label class=\"btn btn-secondary\">";
		valvehtml += "<input type=\"radio\" name=\"options\" value=\"" + entry + "\" autocomplete=\"off\">";
		valvehtml += entry + "</label>";
	});
	valvehtml += "</div></div>";
	$('#controlSelectionValve').append(valvehtml);
};
function delControlValve(x){
	$("#controlSelectionValveItem" + x).remove();
};

//Sequence Control Valve
function addSeqValve(x){
	var valvehtml2 = "<div id=\"seqControlValveItem"+ x +"\" class=\"form-group row border p-1\">";
	valvehtml2 += "<label for=\"seq_valve"+ x +"\" class=\"col-sm col-form-label\">Solenoid Valve "+ x +"</label>";
	valvehtml2 += "<div class=\"col-sm-4 p-0\">";
	valvehtml2 += "<input type=\"number\" class=\"form-control\" id=\"seq_valve"+ x +"\">";
	valvehtml2 += "</div></div>";
	$('#seqControlValve').append(valvehtml2);
};
function delSeqValve(x){
	$("#seqControlValveItem" + x).remove();
};

//Control Selection Agitator
function addControlAgitator(x){
	var agithtml = "<div id=\"controlSelectionAgitItem"+ x +"\" class=\"input-group-text row\">";
	agithtml += "<label for=\"ctrl_agit"+ x +"\" class=\"col-sm-3 col-form-label\">Agitator "+ x +"</label>";
	agithtml += "<div class=\"col-sm-5\">";
	agithtml += "<div class=\"btn-group btn-group-toggle special\" data-toggle=\"buttons\" id=\"ctrl_agit"+ x +"\">";
	var arr_agit = ["Normally-Closed", "Normally-Open"];
	arr_agit.forEach(function(entry){
		agithtml += "<label class=\"btn btn-secondary\">";
		agithtml += "<input type=\"radio\" name=\"options\" value=\"" + entry + "\" autocomplete=\"off\">";
		agithtml += entry + "</label>";
	});
	agithtml += "</div></div>";
	$('#controlSelectionAgit').append(agithtml);
};
function delControlAgitator(x){
	$("#controlSelectionAgitItem" + x).remove();
};

//Sequence Control Agitator
function addSeqAgitator(x){
	var agithtml2 = "<div id=\"seqControlAgitItem"+ x +"\" class=\"form-group row border p-1\">";
	agithtml2 += "<label for=\"seq_agit"+ x +"\" class=\"col-sm col-form-label\">Agitator "+ x +"</label>";
	agithtml2 += "<div class=\"col-sm-4 p-0\">";
	agithtml2 += "<input type=\"number\" class=\"form-control\" id=\"seq_agit"+ x +"\">";
	agithtml2 += "</div></div>";
	$('#seqControlAgit').append(agithtml2);
};
function delSeqAgitator(x){
	$("#seqControlAgitItem" + x).remove();
};

//Control Level
function addControlLevel(x){
	var levelhtml = "<div id=\"controlSelectionLevelItem"+ x +"\" class=\"input-group-text row\">";
	levelhtml += "<label for=\"ctrl_level"+ x +"\" class=\"col-sm-3 col-form-label\">Lever Sensor "+ x +"</label>";
	levelhtml += "<div class=\"col-sm-5\">";
	levelhtml += "<input type=\"number\" class=\"form-control\" placeholder=\"liter\" id=\"ctrl_level"+ x +"\">";
	levelhtml += "</label>";
	levelhtml += "</div></div>";
	$('#controlSelectionLevel').append(levelhtml);
};
function delControlLevel(x){
	$("#controlSelectionLevelItem" + x).remove();
};

//Sequence Control Level
function addSeqLevel(x){
	var levelhtml2 = "<div id=\"seqControlLevelItem"+ x +"\" class=\"form-group row border p-1\">";
	levelhtml2 += "<label for=\"seq_level"+ x +"\" class=\"col-sm col-form-label\">Level Sensor "+ x +"</label>";
	levelhtml2 += "<div class=\"col-sm-4 p-0\">";
	levelhtml2 += "<input type=\"number\" class=\"form-control\" id=\"seq_level"+ x +"\">";
	levelhtml2 += "</div></div>";
	$('#seqControlLevel').append(levelhtml2);
};
function delSeqLevel(x){
	$("#seqControlLevelItem" + x).remove();
};

function appendPumpParam(rowname,optvalue,rowno){
		var paramhtml = "";
		//alert(rowname + ' ' + optvalue + ' ' + rowno);
		if (optvalue=="Pulse"){
			paramhtml += "<div class=\"w-100 pumpparam"+rowno+"\"></div><div class=\"col-sm-3 pumpparam"+rowno+"\"></div>";
			paramhtml += "<div class=\"col-sm-9 pumpparam"+rowno+"\"><div class=\"row\"><div class=\"col-sm-6\">";
			paramhtml += "<div class=\"input-group\"><div class=\"input-group-prepend\">";
			paramhtml += "<span class=\"input-group-text\">Pulse</span></div>";
			paramhtml += "<input type=\"number\" class=\"form-control\" id=\"pump_pulse"+rowno+"\">";
			paramhtml += "</div></div>";
			paramhtml += "<div class=\"col-sm-6\">";
			paramhtml += "<div class=\"input-group\"><div class=\"input-group-prepend\">";
			paramhtml += "<span class=\"input-group-text\">Stroke</span></div>";
			paramhtml += "<input type=\"number\" class=\"form-control\" id=\"pump_stroke"+rowno+"\">";
			paramhtml += "</div></div>";
			paramhtml += "</div></div>";
		}
		if (optvalue=="Batch"){
			paramhtml += "<div class=\"w-100 pumpparam"+rowno+"\"></div><div class=\"col-sm-3 pumpparam"+rowno+"\"></div>";
			paramhtml += "<div class=\"col-sm-9 pumpparam"+rowno+"\"><div class=\"row\"><div class=\"col-sm-6\">";
			paramhtml += "<div class=\"input-group\"><div class=\"input-group-prepend\">";
			paramhtml += "<span class=\"input-group-text\">Minutes</span></div>";
			paramhtml += "<input type=\"number\" class=\"form-control\" id=\"pump_batch"+rowno+"\">";
			paramhtml += "</div></div>";
			paramhtml += "</div></div>";
		} 
		if (optvalue=="Timer"){
			paramhtml += "<div class=\"w-100 pumpparam"+rowno+"\"></div><div class=\"col-sm-3 pumpparam"+rowno+"\"></div>";
			paramhtml += "<div class=\"col-sm-9 pumpparam"+rowno+"\"><div class=\"row\"><div class=\"col-sm-6\">";
			paramhtml += "<div class=\"input-group\"><div class=\"input-group-prepend\">";
			paramhtml += "<span class=\"input-group-text\">On time</span></div>";
			paramhtml += "<input type=\"input\" class=\"form-control datetimepicker-input\" id=\"ondt"+rowno+"\" data-toggle=\"datetimepicker\" data-target=\"#ondt"+rowno+"\">";
			paramhtml += "</div></div>";
			paramhtml += "<div class=\"col-sm-6\">";
			paramhtml += "<div class=\"input-group\"><div class=\"input-group-prepend\">";
			paramhtml += "<span class=\"input-group-text\">Off time</span></div>";
			paramhtml += "<input type=\"input\" class=\"form-control datetimepicker-input\" id=\"offdt"+rowno+"\" data-toggle=\"datetimepicker\" data-target=\"#offdt"+rowno+"\">";
			paramhtml += "</div></div>";
			paramhtml += "</div></div>";
			paramhtml += "<script type=\"text/javascript\">$(function () {";
			paramhtml += "$('#offdt"+rowno+"').datetimepicker({ format: 'LT' });"
			paramhtml += "$('#ondt"+rowno+"').datetimepicker({ format: 'LT' });});</script>";
		}
		if (optvalue=="4-20mA"){
			paramhtml += "<div class=\"w-100 pumpparam"+rowno+"\"></div><div class=\"col-sm-3 pumpparam"+rowno+"\"></div>";
			paramhtml += "<div class=\"col-sm-9 pumpparam"+rowno+"\"><div class=\"row\"><div class=\"col-sm-6\">";
			paramhtml += "<div class=\"input-group\"><div class=\"input-group-prepend\">";
			paramhtml += "<span class=\"input-group-text\">Percentage Capacity</span></div>";
			paramhtml += "<input type=\"number\" class=\"form-control\" id=\"pump_capacity"+rowno+"\">";
			paramhtml += "</div></div>";
			paramhtml += "</div></div>";
		} 
		$('#'+rowname).append(paramhtml);
	};

function clearData(){
	arr_item = [];
	$('#datatable').empty();
};

function populateData(){
	//0 equipment | 1 number | 2 control | 3 sequence
	
	//for pump
	for(var x=1; x<=$("#qty_pump").val(); x++){
		
		var ctrl = $('#ctrl_pump' + x + ' label.active input').val();
		var param;
		if(ctrl == 'Pulse'){
			param = $('#pump_pulse' + x).val() + " pulse, " + $('#pump_stroke' + x + '').val() + " stroke";
		}else if(ctrl == 'Batch'){
			param = $('#pump_batch' + x).val() + " minutes";
		}else if(ctrl == 'Timer'){
			param = $('#ondt' + x).val() + " on-time, " + $('#offdt' + x + '').val() + " off-time";
		}else if(ctrl == '4-20mA'){
			param = $('#pump_capacity' + x).val() + "% pump capacity";
		}else{
			param = "";
		}
		
		arr_item.push({
			equipment: 'Dosing Pump',
			number: x,
			control: $('#ctrl_pump' + x + ' label.active input').val(),
			sequence: $('#seq_pump' + x + '').val(),
			pumpparam: param
		});
	}
	
	//for valve
	for(var x=1; x<=$("#qty_valve").val(); x++){
		arr_item.push({
			equipment: 'Solenoid Valve',
			number: x,
			control: $('#ctrl_valve' + x + ' label.active input').val(),
			sequence: $('#seq_valve' + x + '').val(),
			pumpparam: null
		});
	}
	
	//for agitator
	for(var x=1; x<=$("#qty_agitator").val(); x++){
		arr_item.push({
			equipment: 'Agitator',
			number: x,
			control: $('#ctrl_agit' + x + ' label.active input').val(),
			sequence: $('#seq_agit' + x + '').val(),
			pumpparam: null
		});
	}
	
	//for level
	for(var x=1; x<=$("#qty_level").val(); x++){
		arr_item.push({
			equipment: 'Level Sensor',
			number: x,
			control: null,
			sequence: null,
			pumpparam: null
		});
	}
	
	for(var i=0; i<arr_item.length; i++){
		var tablehtml = "<tr>";
		tablehtml += "<td>" + arr_item[i].equipment + " " + arr_item[i].number + "</td>";
		tablehtml += "<td>" + nvl(arr_item[i].control,'N/A') + " " + pumpwrap(arr_item[i].pumpparam) +"</td>";
		tablehtml += "<td>" + nvl(arr_item[i].sequence,'N/A') + "</td>";
		tablehtml += "</tr>";
		
		$('#datatable').append(tablehtml);
	}	
};

//undefined checker before save
function chkUndefined(){
	var errorCnt = 0;
	var errorMsg = 'Please complete below items before proceed to Save\n';
	var qty = $("#qty_pump").val() + $("#qty_pump").val() + $("#qty_pump").val() + $("#qty_pump").val();
	
	if(qty==0){
		errorMsg = 'Please select at least one equipment';
		return errorMsg;
	}
	
	if (!$('#inpProjName').val()){
		errorCnt++;
		errorMsg += errorCnt + ". ";
		errorMsg += "Project Name\n";
	}
	
	//check control pump
	for(var x=1; x<=$("#qty_pump").val(); x++){
		if (typeof $('#ctrl_pump' + x + ' label.active input').val() == 'undefined'){
			errorCnt++;
			errorMsg += errorCnt + ". ";
			errorMsg += "Dosing Pump " + x + " : Control Selection";
			if (!$('#seq_pump' + x).val()){
			errorMsg += " and Sequence Control";
			}
			errorMsg += "\n";
		}else{
			if (!$('#seq_pump' + x).val()){
			errorCnt++;
			errorMsg += errorCnt + ". ";
			errorMsg += "Dosing Pump " + x + " : Sequence Control\n"
			}
		}
	}
	
	//check solenoid valve
	for(var x=1; x<=$("#qty_valve").val(); x++){
		if (typeof $('#ctrl_valve' + x + ' label.active input').val() == 'undefined'){
			errorCnt++;
			errorMsg += errorCnt + ". ";
			errorMsg += "Solenoid Valve " + x + " : Control Selection";
			if (!$('#seq_valve' + x).val()){
			errorMsg += " and Sequence Control";
			}
			errorMsg += "\n";
		}else{
			if (!$('#seq_valve' + x).val()){
			errorCnt++;
			errorMsg += errorCnt + ". ";
			errorMsg += "Solenoid Valve " + x + " : Sequence Control\n"
			}
		}
	}
	
	//check agitator
	for(var x=1; x<=$("#qty_agitator").val(); x++){
		if (typeof $('#ctrl_agit' + x + ' label.active input').val() == 'undefined'){
			errorCnt++;
			errorMsg += errorCnt + ". ";
			errorMsg += "Agitator " + x + " : Control Selection";
			if (!$('#seq_agit' + x).val()){
			errorMsg += " and Sequence Control";
			}
			errorMsg += "\n";
		}else{
			if (!$('#seq_agit' + x).val()){
			errorCnt++;
			errorMsg += errorCnt + ". ";
			errorMsg += "Agitator " + x + " : Sequence Control\n"
			}
		}
	}

	if (errorCnt==0){errorMsg = ''}
	return errorMsg;
};

function postProgram(){
	
	var prog_name = $('#inpProjName').val();
	var arr_string = JSON.stringify(arr_item);
		
	var posting = $.ajax({
		type: "POST",
		url: "submit_program.php",
		data: {name: prog_name, data : arr_string},
		cache: false,
		success: function(response) { 
			postLog(response,'new');
			alert('Program Saved!');
			window.location.replace("index.php?exists=true");
		},
		error: function(xhr, textStatus, error) {
			console.log(xhr.statusText);
			console.log(textStatus);
			console.log(error);
			alert(error);
		}
	});
};

function postLog(pid,type){
	
	var posting = $.ajax({
		type: "POST",
		url: "submit_log.php",
		data: {pid: pid, type: type},
		cache: false,
		success: function() {
			console.log('Logged ' + pid + ' ' + type);
		},
		error: function(xhr, textStatus, error) {
			console.log(xhr.statusText);
			console.log(textStatus);
			console.log(error);
			alert(error);
		}
	});
};

function postSetting(mode){
	
	var posting = $.ajax({
		type: "POST",
		url: "submit_setting.php",
		data: {mode: mode},
		cache: false,
		success: function() {
			console.log('Records removed');
		},
		error: function(xhr, textStatus, error) {
			console.log(xhr.statusText);
			console.log(textStatus);
			console.log(error);
			alert(error);
		}
	});
};

function nvl(value1,value2) {
	if (value1 == null){
		return value2;
	} else {
		return value1;
	}
};

function pumpwrap(value1) {
	if (value1 == null){
		return '';
	} else {
		return "(" + value1 + ")";
	}
};

$(document).ready(function(){
	
	//1. Equipment Selection (define variables)
	var pumpval=0;
	var valveval=0;
	var agitval=0;
	var levelval=0;
	
	//1.1 Equipment Selection - Dosing Pump
    $("#btn_pump_minus").click(function(){
		delControlPump(pumpval);
		delSeqPump(pumpval);
		pumpval = pumpval-1;
		if(pumpval<1){ 
			pumpval=0;
			$('#controlSelectionPump').collapse('hide');
			$('#seqControlPump').collapse('hide');
		}
        $("#qty_pump").val(pumpval);
    });
    $("#btn_pump_plus").click(function(){
		pumpval = pumpval+1;
        $("#qty_pump").val(pumpval);
		$('#controlSelectionPump').collapse('show');
		$('#seqControlPump').collapse('show');
		addControlPump(pumpval);
		addSeqPump(pumpval);
    });
	
	//1.2 Equipment Selection - Solenoid Valve
    $("#btn_valve_minus").click(function(){
		delControlValve(valveval);
		delSeqValve(valveval);
		valveval = valveval-1;
		if(valveval<1){ 
			valveval=0;
			$('#controlSelectionValve').collapse('hide');
			$('#seqControlValve').collapse('hide');
		}
        $("#qty_valve").val(valveval);
    });
    $("#btn_valve_plus").click(function(){
		valveval = valveval+1;
        $("#qty_valve").val(valveval);
		$('#controlSelectionValve').collapse('show');
		$('#seqControlValve').collapse('show');
		addControlValve(valveval);
		addSeqValve(valveval);
    });
	
	//1.3 Equipment Selection - Agitator
    $("#btn_agitator_minus").click(function(){
		delControlAgitator(agitval);
		delSeqAgitator(agitval);
		agitval = agitval-1;
		if(agitval<1){ 
			agitval=0;
			$('#controlSelectionAgit').collapse('hide');
			$('#seqControlAgit').collapse('hide');
		}
        $("#qty_agitator").val(agitval);
    });
    $("#btn_agitator_plus").click(function(){
		agitval = agitval+1;
        $("#qty_agitator").val(agitval);
		$('#controlSelectionAgit').collapse('show');
		$('#seqControlAgit').collapse('show');
		addControlAgitator(agitval);
		addSeqAgitator(agitval);
    });
	
	//1.4 Equipment Selection - Level
    $("#btn_level_minus").click(function(){
		//delControlLevel(levelval);
		//delSeqLevel(levelval);
		levelval = levelval-1;
		if(levelval<1){ 
			levelval=0;
			//$('#controlSelectionLevel').collapse('hide');
			//$('#seqControlLevel').collapse('hide');
		}
        $("#qty_level").val(levelval);
    });
    $("#btn_level_plus").click(function(){
		levelval = levelval+1;
        $("#qty_level").val(levelval);
		//$('#controlSelectionLevel').collapse('show');
		//$('#seqControlLevel').collapse('show');
		//addControlLevel(levelval);
		//addSeqLevel(levelval);
    });
	
	$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
			clearData();
			populateData();
	});

	$("#btnSaveProject").click(function(){
		var err = chkUndefined();
		if (err != ''){
			alert(err);
		}else{
			postProgram();
		}
	});
	
	$("#btnRunProgram").click(function(){
		var dt = new Date();
		var time = dt.getDate() + "/"
                + (dt.getMonth()+1)  + "/" 
                + dt.getFullYear() + " @ "  
                + dt.getHours() + ":"  
                + dt.getMinutes() + ":" 
                + dt.getSeconds();
		$('#start-time').val(time);
		$(this).prop("disabled",true);
		$("#btnStopProgram").collapse('show');
		$('#progBar').attr('aria-valuenow', 100).css('width','100%');
		$('#progBar span').text('In Progress');
		postLog($(ProjectID).val(),'start',time);
	});
	
	$("#btnStopProgram").click(function(){
		var dt = new Date();
		var time = dt.getDate() + "/"
                + (dt.getMonth()+1)  + "/" 
                + dt.getFullYear() + " @ "  
                + dt.getHours() + ":"  
                + dt.getMinutes() + ":" 
                + dt.getSeconds();
		$('#end-time').val(time);
		$(this).prop("disabled",true);
		$('#progBar').removeClass("progress-bar-striped progress-bar-animated").addClass("bg-success");
		$('#progBar span').text('Completed');
		postLog($(ProjectID).val(),'end',time);
	});
	
	$("#setting").submit(function( event ) {
				
		if($("#clrProgram").is(":checked")){
			postSetting(1);
			alert('Existing program has been removed');
		}
		if($("#clrLog").is(":checked")){
			postSetting(2);
			alert('Data logs has been removed');
		}
		event.preventDefault();
	});
	
	$(window).scroll(function() {
		$("#sidebar").collapse('hide');
	});
	
	$(document).on("change","input[type=radio]",function(){
		var val = $(this).attr('value');
		var id = $(this).closest('.row').attr('id');
		var no = id.slice(-1);
		var ans1 = ["Pulse", "Batch", "Timer", "4-20mA"];
		if ($.inArray(val, ans1) > -1) {
			$(".pumpparam"+no).remove();
			appendPumpParam(id,val,no);
		}
		
	});

});