$(document).ready(function(){

	//Initializing arrays with position names
	var IT = [
	    {display: "System Administrator", value: "System Administrator" }, 
	    {display: "Network Administrator", value: "Network Administrator" }, 
	    {display: "Computer Technician", value: "Computer Technician" }];
	    
	var Accounting = [
		{display: "Accounting Supervisor", value: "Accounting Supervisor" },
	    {display: "Accountant", value: "Accountant" }, 
	    {display: "Bookkeeper", value: "Bookkeeper" }, 
	    {display: "Cashier", value: "Cashier" },
		{display: "Accounting Clerk", value: "Accounting Clerk" },
	    {display: "Petty Cash Custodian", value: "Petty Cash Custodian" }];
	    
	var Library = [
	    {display: "Head Librarian", value: "Head Librarian" }, 
	    {display: "Assistant Librian", value: "Assistant Libririan" }, 
	    {display: "Office Staff", value: "Office Staff" }];

	var Guidance = [
		{display: "Student Formation Center Head", value: "Student Formation Center Head" },
	    {display: "Guidance Counselor", value: "Guidance Counselor" }];
		
	var Principal =[
	    {display: "Principal", value: "Principal" }, 
	    {display: "Executive secretary", value: "Executive Secretary" }, 
	    {display: "Office Staff", value: "Office Staff" }];

	var Registrar = [
	    {display: "Registrar Head", value: "Registrar Head" }, 
	    {display: "Assistant Registrar", value: "Assistant Registrar" }, 
	    {display: "Office Staff", value: "Office Staff" }];

	var HR = [
	    {display: "HR Officer", value: "HR Officer" }, 
	    {display: "Assistant HR Officer", value: "Assistant HR Officer" }, 
	    {display: "Office Staff", value: "Office Staff" }];

	var Preschool = [
	    {display: "Academic Coordinator", value: "Academic Coordinator" }, 
	    {display: "Preschool Teacher", value: "Preschool Teacher"}];
		
	var Humanities = [
		{display: "Reading Teacher", value: "Reading Teacher" },
		{display: "Language Teacher", value: "Language Teacher" },
	    {display: "Filipino Teacher", value: "Filipino Teacher" }, 
	    {display: "English Teacher", value: "English Teacher" },
	    {display: "Araling Panlipunan Teacher", value: "Araling Panlipunan Teacher" },
	    {display: "MAPEH Teacher", value: "MAPEH Teacher" },
	    {display: "Mother Tongue Teacher", value: "Mother Tongue Teacher" },
	    {display: "Edukasyon sa Pagpapakatao Teacher", value: "Edukasyon sa Pagpapakatao Teacher" },
	    {display: "HELE Teacher", value: "HELE Teacher" },
		{display: "Physical Education Teacher", value: "Physical Education Teacher" },
		{display: "TLE Teacher", value: "TLE Teacher" },
		{display: "Music Teacher", value: "Music Teacher" },
	    {display: "Arts Teacher", value: "Arts Teacher" },
	    {display: "Health Teacher", value: "Health Teacher" },
   
		//{display: "Social Studies Teacher", value: "Social Studies Teacher" },
		//{display: "SIBIKA Teacher", value: "SIBIKA Teacher" },
		//{display: "HEKASI Teacher", value: "HEKASI Teacher" },
		//{display: "Values Education Teacher", value: "Values Education Teacher" },

		{display: "Academic Coordinator for Component Subjects", value: "Academic Coordinator for Component Subjects" },	
		{display: "Academic Coordinator for Social Studies", value: "Academic Coordinator for Social Studies" },
		{display: "Academic Coordinator for English", value: "Academic Coordinator for English" },
		{display: "Academic Coordinator for Filipino", value: "Academic Coordinator for Filipino" }];
		
	var SMIT = [
		{display: "Mathematics Teacher", value: "Mathematics Teacher" }, 
	    {display: "Science Teacher", value: "Science Teacher" }, 
	    {display: "Science & Health Teacher", value: "Science & Health Teacher" }, 
	    {display: "Computer Teacher", value: "Computer Teacher" },
	    {display: "Natural Science Teacher", value: "Natural Science Teacher" }, 
	    {display: "General Math Teacher", value: "General Math Teacher" }, 
	    {display: "Computer Education Teacher", value: "Computer Education Teacher" },
	    {display: "Practical Math Teacher", value: "Practical Math Teacher" }, 
	    {display: "Environmental Science Teacher", value: "Environmental Science Teacher" }, 
	    {display: "Statistics Teacher", value: "Statistics Teacher" }, 
	    {display: "Biology Teacher", value: "Biology Teacher" }, 
	    {display: "Trigonometry Teacher", value: "Trigonometry Teacher" }, 
	    {display: "Physics Teacher", value: "Physics Teacher" }, 
	    {display: "TLE-Computer Teacher", value: "TLE-Computer Teacher" }, 
	    {display: "Chemistry Teacher", value: "Chemistry Teacher" }, 

	    //{display: "Science Research Teacher", value: "Science Research Teacher" }, 
	    //{display: "Geometry Teacher", value: "Geometry Teacher" }, 
	        
		{display: "Academic Coordinator for Science", value: "Academic Coordinator for Science" },
		{display: "Academic Coordinator for Math & IT", value: "Academic Coordinator for Math & IT" }];

	var Others = [
		{display: "Coordinator for Extension Service and Special Program", value: "Coordinator for Extension Service and Special Program" },    
		{display: "Coordinator for Institutional Values Formation", value: "Coordinator for Institutional Values Formation" },    
		{display: "Prefect of Discipline", value: "Prefect of Discipline" },
		{display: "Science and Laboratory Aide", value: "Science Lab Assistant" },
	    {display: "School Nurse", value: "School Nurse" }];

	  //list of the levels corresponding to the academic position
	var preschoolK1K2 = [{display: "Preschool K1", value: "Preschool K1"},
					 {display: "Preschool K2", value: "Preschool K2"}];

	var presToInter = [{display: "Preschool K1", value: "Preschool K1"},
					 	   {display: "Preschool K2", value: "Preschool K2"},
					 	   {display: "Primary", value: "Primary"},
					 	   {display: "Intermediate", value: "Intermediate"}];

	var presAndInter = [{display: "Preschool K1", value: "Preschool K1"},						
				 	    {display: "Preschool K2", value: "Preschool K2"},					 	   
				 	    {display: "Intermediate", value: "Intermediate"}];

	var kinder2ToHS = [{display: "Preschool K2", value: "Preschool K2"},	
					   {display: "Primary", value: "Primary"},				 	   
				 	   {display: "Intermediate", value: "Intermediate"},
				 	   {display: "Highschool", value: "Highschool"}];

	var primaryToInter = [{display: "Primary", value: "Primary"},
				 	   {display: "Intermediate", value: "Intermediate"}];

	var primaryToHS = [{display: "Primary", value: "Primary"},
			 	   {display: "Intermediate", value: "Intermediate"},
			 	   {display: "Highschool", value: "Highschool"}];

 	var primary = [{display: "Primary", value: "Primary"}];
 	var inter = [{display: "Intermediate", value: "Intermediate"}];
 	var high = [{display: "Highschool", value: "Highschool"}];

	//Function To List out Positions in Second Select tags
	function position(arr){
		$("#position").empty();//To reset cities
		$("#position").append("<option>--Select--</option>");
		$(arr).each(function(i){//to list cities
			$("#position").append("<option value=\""+arr[i].value+"\">"+arr[i].display+"</option>");
		});
	}

	//Function To List out Levels in Third Select tags
	function level(arr){
		$("#level").empty();//To reset cities
		$("#level").append("<option>--Select--</option>");
		$(arr).each(function(i){//to list cities
			$("#level").append("<option value=\""+arr[i].value+"\">"+arr[i].display+"</option>");
		});
	}
	 function modal(){
          $("#modal-1").getElementById().show();
     }

//Function executes on change of first select option field 
$("#department").change(function(){

	var select = $("#department option:selected").val();	

	switch(select)
	{

	case "Preschool":
		position(Preschool);
		break;
	case "IT":
		position(IT);
		break;

	case "Accounting":
		position(Accounting);
		break;

	case "Library":
		position(Library);
		break;

	case "Guidance Counselling":
		position(Guidance);
		break;

	case "Principal & Director's Office":
		position(Principal);
		break;

	case "Registrar":
		position(Registrar);
		break;

	case "HR":
		position(HR);
		break;

	case "Humanities":
		position(Humanities);
		break;

	case "SMIT":
		position(SMIT);
		break;

	case "Others":
		position(Others);
		break;

	default:
		$("#position").empty();
		$("#position").append("<option>--Select--</option>");
	break;
	}


	$("#position").change(function(){

	var select2 = $("#position option:selected").val();
		switch(select2)
		{	
			//Preschool
		case "Academic Coordinator": 		level(primary); break;
		case "Preschool Teacher": 			level(primary); break;
			//Guidance
		case "Guidance Counselor": 			level(primaryToHS); break;
			//SMIT Teachers
		case "Mathematics Teacher": 		level(presToInter); break;
		case "Science Teacher": 			level(presAndInter); break;
		case "Science & Health Teacher": 	level(primary); break;
		case "Computer Teacher": 			level(primaryToInter); break;
		case "Natural Science Teacher": 	level(high); break;
		case "General Math Teacher": 		level(high); break;
		case "Computer Education Teacher": 	level(high); break;
		case "Practical Math Teacher": 		level(high); break;
		case "Environmental Science Teacher": level(high); break;
		case "Statistics Teacher": 			level(high); break;
		case "Biology Teacher": 			level(high); break;
		case "Trigonometry Teacher": 		level(high); break;
		case "Physics Teacher": 			level(high); break;
		case "TLE-Computer Teacher": 		level(high); break;
		case "Chemistry Teacher": 			level(high); break;
			//Humanities Teachers
		case "Reading Teacher": 			level(preschoolK1K2); break;
		case "Language Teacher": 			level(preschoolK1K2); break;
		case "Filipino Teacher": 			level(primaryToHS); break;
		case "English Teacher": 			level(primaryToHS); break;
		case "Araling Panlipunan Teacher":	level(primaryToHS); break;
		case "MAPEH Teacher": 				level(primaryToInter); break;
		case "Mother Tongue Teacher": 		level(inter); break;
		case "Edukasyon sa Pagpapakatao Teacher": level(primaryToHS); break;
		case "HELE Teacher": 				level(inter); break;
		case "Physical Education Teacher": 	level(high); break;
		case "TLE Teacher": 				level(high); break;
		case "Music Teacher": 				level(high); break;
		case "Arts Teacher": 				level(high); break;
		case "Health Teacher": 				level(high); break;

		default:
			$('#level').empty();
			$('#level').append("<option>--N/A--</option>");
		break;
		}
		});
  });	

	//for adding and removing textboxes
	var count = 0;
    var count1 = 0;
    var count2= 0;
    var count3 = 0;
    var count4 = 0;			
    // CREATE A "DIV" ELEMENT AND DESIGN IT USING JQUERY ".css()" CLASS.
    var divAward = $(document.createElement('div')).css({
        padding: '5px', margin: '20px', width: '170px', border: '1px dashed',
        borderTopColor: '#999', borderBottomColor: '#999',
        borderLeftColor: '#999', borderRightColor: '#999'
    });

    var divOrg = $(document.createElement('div')).css({
        padding: '5px', margin: '20px', width: '170px', border: '1px dashed',
        borderTopColor: '#999', borderBottomColor: '#999',
        borderLeftColor: '#999', borderRightColor: '#999'
    });

     var divExp = $(document.createElement('div')).css({
        padding: '5px', margin: '20px', width: '170px', border: '1px dashed',
        borderTopColor: '#999', borderBottomColor: '#999',
        borderLeftColor: '#999', borderRightColor: '#999'
    });

         var divSkill = $(document.createElement('div')).css({
        padding: '5px', margin: '20px', width: '170px', border: '1px dashed',
        borderTopColor: '#999', borderBottomColor: '#999',
        borderLeftColor: '#999', borderRightColor: '#999'

    });

        var divChildren = $(document.createElement('div')).css({
        padding: '5px', margin: '20px', width: '170px', border: '1px dashed',
        borderTopColor: '#999', borderBottomColor: '#999',
        borderLeftColor: '#999', borderRightColor: '#999'

        
    });

        var divChildren2 = $(document.createElement('div')).css({
        padding: '5px', margin: '20px', width: '170px', border: '1px dashed',
        borderTopColor: '#999', borderBottomColor: '#999',
        borderLeftColor: '#999', borderRightColor: '#999'

        
    });



     $('#addAward').click(function() {
        if (count <= 4) {
            count = count + 1;
            // ADD TEXTBOX.
            $(divAward).append('<input type=text class="input" id=tb' + count + ' ' +
                        'placeholder="Award ' + count + '" name="Award'+ count +'"/>');

            if (count == 1) {        // SHOW SUBMIT BUTTON IF ATLEAST "1" ELEMENT HAS BEEN CREATED.
                var divSubmit = $(document.createElement('div'));
            }
            $('#Awards').after(divAward, divSubmit);   // ADD BOTH THE DIV ELEMENTS TO THE "main" divAward.
        }
        else{      // AFTER REACHING THE SPECIFIED LIMIT, DISABLE THE "ADD" BUTTON. (20 IS THE LIMIT WE HAVE SET)
            $(divAward).append('<label>-</label>'); 
            $('#addAward').attr('class', 'bt-disable'); 
            $('#addAward').attr('disabled', 'disabled');
        }
    });

      $('#addOrg').click(function() {
	            if (count1 <= 4) {
	                count1 = count1 + 1;
	                // ADD TEXTBOX.
	                $(divOrg).append('<input type=text class="input" id=tb1' + count1 + ' ' +
	                            'placeholder="Organization' + count1 + '" name="Org'+ count1 +'"/>');

	                if (count1 == 1) {        // SHOW SUBMIT BUTTON IF ATLEAST "1" ELEMENT HAS BEEN CREATED.
	                     var divSubmit1 = $(document.createElement('div'));
	                }
	                $('#Organizations').after(divOrg, divSubmit1);   // ADD BOTH THE DIV ELEMENTS TO THE "main" divAward.
	            }
	            else{      // AFTER REACHING THE SPECIFIED LIMIT, DISABLE THE "ADD" BUTTON. (20 IS THE LIMIT WE HAVE SET)
	                $(divOrg).append('<label>--</label>'); 
	                $('#addOrg').attr('class', 'bt-disable'); 
	                $('#addOrg').attr('disabled', 'disabled');
	            }
	        });

      $('#addExp').click(function() {
	            if (count2 <= 4) {
	                count2 = count2 + 1;
	                // ADD TEXTBOX.
	                $(divExp).append('<input type=text class="input" id=tb2' + count2 + ' ' +
	                            'placeholder="Former Job Position' + count2 + '" name="Exp'+ count2 +'"/>');

	                if (count2 == 1) {        // SHOW SUBMIT BUTTON IF ATLEAST "1" ELEMENT HAS BEEN CREATED.
	                     var divSubmit2 = $(document.createElement('div'));
	                }
	                $('#Experience').after(divExp, divSubmit2);   // ADD BOTH THE DIV ELEMENTS TO THE "main" divAward.
	            }
	            else{      // AFTER REACHING THE SPECIFIED LIMIT, DISABLE THE "ADD" BUTTON. (20 IS THE LIMIT WE HAVE SET)
	                $(divExp).append('<label>--</label>'); 
	                $('#addExp').attr('class', 'bt-disable'); 
	                $('#addExp').attr('disabled', 'disabled');
	            }
	        });

      $('#addSkill').click(function() {
	            if (count3 <= 4) {
	                count3 = count3 + 1;
	                // ADD TEXTBOX.
	                $(divSkill).append('<input type=text class="input" id=tb3' + count3 + ' ' +
	                            'placeholder="Skill ' + count3 + '" name="Skill'+ count3 +'" />');

	                if (count3 == 1) {        // SHOW SUBMIT BUTTON IF ATLEAST "1" ELEMENT HAS BEEN CREATED.
	                    var divSubmit3 = $(document.createElement('div'));
	                }
	                $('#Skill').after(divSkill, divSubmit3);   // ADD BOTH THE DIV ELEMENTS TO THE "main" divAward.
	            }
	            else{      // AFTER REACHING THE SPECIFIED LIMIT, DISABLE THE "ADD" BUTTON. (20 IS THE LIMIT WE HAVE SET)
	                $(divSkill).append('<label>-</label>'); 
	                $('#addSkill').attr('class', 'bt-disable'); 
	                $('#addSkill').attr('disabled', 'disabled');
	            }
	        });

	$('#addChild').click(function() {
	            if (count4 <= 9) {
	                count4 = count4 + 1;
	                // ADD TEXTBOX.
	                $(divChildren).append('<input type=text class="input" id=tb4' + count4 + ' ' + 
	                            'placeholder="First Name ' + count4 + '" name="FNChild '+ count4 +'" />');

	                $(divChildren2).append('<input type=text class="input" id=tb5' + count4 + ' ' +
	                            'placeholder="Last Name ' + count4 + '" name="LNChild '+ count4 +'" />');

	                if (count4 ==1) {        // SHOW SUBMIT BUTTON IF ATLEAST "1" ELEMENT HAS BEEN CREATED.
	                    var divSubmit3 = $(document.createElement('div'));
	                	var divSubmit4 = $(document.createElement('div'));
	                }
	                $('#Children').after(divChildren, divSubmit3);   // ADD BOTH THE DIV ELEMENTS TO THE "main" divAward.
	                $('#Children2').after(divChildren2, divSubmit4); 
	            }
	            else{      // AFTER REACHING THE SPECIFIED LIMIT, DISABLE THE "ADD" BUTTON. (20 IS THE LIMIT WE HAVE SET)
	                $(divChildren).append('<label>-</label>'); 
	                $(divChildren2).append('<label>-</label>'); 
	                $('#addChild').attr('class', 'bt-disable'); 
	                $('#addChild').attr('disabled', 'disabled');
	            }
	        });


      $('#removeAward').click(function() {   // REMOVE ELEMENTS ONE PER CLICK.
	            if (count > 0 && count<=5) { $('#tb' + count).remove(); count = count - 1; }
	            if (count == 0 || count <0) { $(divAward).empty(); 
	                $(divAward).remove(); 
	                $('#addAward').removeAttr('disabled'); 
	                $('#addAward').attr('class', 'bt');
	                count = 0;
	            }
	        });

      $('#removeOrg').click(function() {   // REMOVE ELEMENTS ONE PER CLICK.
	            if (count1 > 0 && count1<=5) { $('#tb1' + count1).remove(); count1 = count1 - 1; }
	            if (count1 == 0 || count1 <0) { $(divOrg).empty(); 
	                $(divOrg).remove(); 
	                $('#addOrg').removeAttr('disabled'); 
	                $('#addOrg').attr('class', 'bt'); 
	                count1 = 0;
	            }
	        });

        $('#removeExp').click(function() {   // REMOVE ELEMENTS ONE PER CLICK.
        if (count2 > 0 && count2<=5) { $('#tb2' + count2).remove(); count2 = count2 - 1; }
        if (count2 == 0 || count2 <0) { $(divExp).empty(); 
            $(divExp).remove(); 
            $('#addExp').removeAttr('disabled'); 
            $('#addExp').attr('class', 'bt'); 
            count2 = 0;
        }
    	});

    	$('#removeSkill').click(function() {   // REMOVE ELEMENTS ONE PER CLICK.
        if (count3 > 0 && count3<=5) { $('#tb3' + count3).remove(); count3 = count3 - 1; }
        if (count3 == 0 || count3 <0) { $(divSkill).empty(); 
            $(divSkill).remove(); 
            $('#addSkill').removeAttr('disabled'); 
            $('#addSkill').attr('class', 'bt'); 
            count3 = 0;
        }
    	});

    	

		$('#removeChild').click(function() {   // REMOVE ELEMENTS ONE PER CLICK.
		        if (count4 > 0 && count4 <=10) { 
		        	$('#tb5' + count4).remove();  
					$('#tb4' + count4).remove();
					count4 = count4 - 1;
		        }
		        if (count4 == 0 || count4 <0) { $(divChildren).empty(); $(divChildren2).empty(); 
		            $(divChildren).remove(); 
		            $(divChildren2).remove(); 
		            $('#addChild').removeAttr('disabled'); 
		            $('#addChild').attr('class', 'bt'); 
		            count4 = 0;
		        }
		    	});



    	$("input[name='status']").change(function(){ //Displaying Spouse Label and Textboxes

			   if($(this).val()=="married")
			   {
			      $("#FNspouseName").show();
       			  $("#LNspouseName").show();
       			  $("#MNspouseName").show();
       			  $('#lbl_spouse').show();
       			  $('#td_spouse').show();
			   }
			   else if($(this).val()=="single")
			   {
			   	$('#td_spouse').hide();
			   }
			   else
			   {
			       $("#FNspouseName").hide();
			       $("#MNspouseName").hide(); 
       			   $("#LNspouseName").hide(); 
       			   $('#lbl_spouse').hide();
       			   $('#td_spouse').hide();
			   }

			});

    	//datepicker
		(function() {
		var d = new Date();
		var date_button_val = d.getFullYear()+'-'+(((d.getMonth()+1)<10)?'0'+(d.getMonth()+1):d.getMonth())+'-'+d.getDate();
		DP.gbi('date_button').value = date_button_val;
		DP.gbi('date_position').value = date_button_val;
		DP.gbi('date_no_position').value = date_button_val;
		DP.gbi('date_callback').value = date_button_val;
		myFunction(date_button_val,'date_callback_text');
		})();	

});