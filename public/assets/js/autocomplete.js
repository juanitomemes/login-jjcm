var route ="{{url('autocomplete-student')}}";
	$('#autocomplet_student').typeahead({
		displayText:function(item){
			return item.student_name
		},
		afterSelect:function(item){
			$('#student_id').val(item.id);
		},
	  source: function(term,process){
		return $.get('/autocomplete-student',{term,term},function(data){
		  return process(data);
		});
	  }
	});
