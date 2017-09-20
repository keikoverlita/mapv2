/**
 * 
 */
if(typeof(page) == 'undefined') page = null;

$(document).ready(function(){
	/*if(page=='manage_va')
		setInterval(populateRealtimeTable,5000);*/
	//if(page=='manage_va') populateRealtimeTable();
	
	$('select#stat_order_group,select#stat_sc_group,select#tipe_transaksi_order,select#tipe_transaksi_sc').change(function(e){
		stat_order_group = $('select#stat_order_group').val();
		stat_sc_group = $('select#stat_sc_group').val();
		tipe_transaksi_order = $('select#tipe_transaksi_order').val();
		tipe_transaksi_sc = $('select#tipe_transaksi_sc').val();
		
		loc = location.protocol + '//' + location.host + location.pathname;
		if(inArray(e.target.id,['stat_sc_group','tipe_transaksi_sc'])) hash = '#container_status_sc';
		else hash = '';
		
		window.location.replace(loc+'?stat_order_group='+stat_order_group+'&stat_sc_group='+stat_sc_group+'&tipe_transaksi_order='+tipe_transaksi_order+'&tipe_transaksi_sc='+tipe_transaksi_sc+hash);
	});
	/*
	$('select#migrate_sto').change(function(e){
		sto = $('select#migrate_sto').val();
		loc = location.protocol + '//' + location.host + location.pathname;
		window.location.replace(loc+'?sto='+sto);
	});
	
	$('select#stat_fu_group').change(function(e){
		stat_fu_group = $('select#stat_fu_group').val();
		loc = location.protocol + '//' + location.host + location.pathname;
		window.location.replace(loc+'?stat_fu_group='+stat_fu_group);
	});
	
	$('#basic-addon2').click(function(){
		$('input#search').val('').trigger('keyup');;
		$('table tbody').unhighlight();
	});*/
	
	if(inArray(page,['manage_va','track_order'])){
		tableEvents();
		$('#btn-reloadVA').click(populateRealtimeTable);
	}
	
	/*$("div.filter_status input:checkbox").click(function() {
		$('#blocker').removeClass('hidden');
		//$.LoadingOverlay("show");
	    setTimeout(va_status_filter,100);
		//va_status_filter();
		//$.LoadingOverlay("hide");
	});
	
	$('select.sto-filter').change(function(e){
		$('#blocker').removeClass('hidden');
		setTimeout(va_status_filter,100);
	})*/
	
	$('.datepicker').datetimepicker({
		format: 'YYYY-MM-DD',
		maxDate: 'now',
		showTodayButton: true,
		showClear: true
	});
});

modal_id = '#myModal';

function va_status_filter(){
	 var showAll = true;
	    $('table#va_table tbody tr').hide();
	    txt_contains_stat_sc = [];
	    txt_contains_stat = [];
	    $('input[type=checkbox]').each(function () {
	        if ($(this)[0].checked) {
	            showAll = false;
	            var value = $(this).val();
	            var type = $(this).attr('data-type');
	            if(type=='status_message')
	            	txt_contains_stat_sc.push('td[data-'+type+']:contains("'+value+'")');
	            else if(type=='status')
	            	//txt_contains_stat.push('td[data-'+type+']:contains("'+value+'")');
	            	txt_contains_stat.push('td[data-'+type+'="'+value+'"]');
	            //$('td[data-'+type+']:contains("'+value+'")').parent('tr').show();
	        }
	    });
	    
	    filter_sto = $('select.sto-filter').val();
	    if(filter_sto == '') txt_sto = '*';
	    else {
	    	txt_sto = 'td[data-sto="'+filter_sto+'"]';
	    	showAll = false;
	    }
	    
	    if(txt_contains_stat_sc.length==0) txt_contains_stat_sc = '*';
	    else txt_contains_stat_sc = txt_contains_stat_sc.join(',');
	    if(txt_contains_stat.length==0) txt_contains_stat = '*';
	    else txt_contains_stat = txt_contains_stat.join(',');
	    
	    //console.log(txt_contains_stat_sc);
	    selector = $('table#va_table tbody tr')
				    .has(txt_contains_stat_sc)
				    .has(txt_contains_stat)
				    .has(txt_sto);
	    selector.show();
	    
	    length = selector.length;
	    
	    $('span.total-data').html(length);
	    
	    if(showAll){
	        $('table#va_table tbody tr').show();
	    }

		$('#blocker').addClass('hidden');
}

function changeModalTitle(title){
	$(modal_id+' .modal-title').html(title);
}

function buildModal(title){
	$(modal_id+' .modal-title').html(title);
	$(modal_id+' .modal-content .modal-body,'+modal_id+' .modal-content .modal-footer').remove();
	$(modal_id+' .modal-content').append('<div class="modal-body"><p class="text-center"><img src="../assets/images/fancybox/fancybox_loading.gif" /></p></div>');
	$(modal_id+' .modal-content').append('<div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></div>');
	$(modal_id).modal('show');
}

function populateModalContent(content){
	$(modal_id+' div.modal-body,'+modal_id+' div.modal-footer').remove();
	$(modal_id+' div.modal-dialog div.modal-content').append(content);
}

function create_form_message(form,type,message){
	//$(form).prepend('<div class="alert alert-'+type+' form-message nomarg-bottom"><a href="#" class="close" data-dismiss="alert">&times;</a>'+message+'</div>');
	$(form+' span.form-notif-success').removeClass('hidden');
	$(form+' span.form-notif-success').fadeIn(300).fadeOut(300).fadeIn(300).fadeOut(300).fadeIn(300).fadeOut(1000);
	//$(form+' span.form-notif-success').addClass('hidden');
}

tabledata = [];
function populateRealtimeTable(){
	$.ajax({
		url : './get_table_data?va_type='+va_type,
		beforeSend : function(){
			$('#btn-reloadVA').addClass('disabled');
			$('#btn-reloadVA span').addClass('fa-spin');
		},
		success : function(data){
			data = JSON.parse(data);
			$.each(data,function(index,value){
				compare_rowdata(value);
			});
			/*setTimeout(function(){
				populateRealtimeTable();
			},2000);*/

			$('#btn-reloadVA').removeClass('disabled');
			$('#btn-reloadVA span').removeClass('fa-spin');
		},
		error : function(){
			location.reload(true);
		}
	});
}

function compare_rowdata(arr_fromserver){
	sc = arr_fromserver['no_sc'];
	str_client = JSON.stringify(tabledata[sc]);
	str_server = JSON.stringify(arr_fromserver);
	/*if(sc == '1218505'){
		//console.log(str_client);
		//console.log(str_server);
		console.log(arr_fromserver);
	}*/

	row_selector = 'tr[data-sc="'+sc+'"]';
	
	if(typeof(tabledata[sc]) != 'undefined'){ //SC AVAILABLE
		if(str_client !== str_server){ //CLIENT DATA NOT MATCHED WITH SERVER
		//if(tabledata[sc] !== arr_fromserver){ 
			/*if(sc == '1214792')
				console.log('different!. SC = '+sc);*/
			$.each(arr_fromserver,function(index,value){
				$(row_selector+' td[data-'+index+']').html(value);
				
				if(index=='status_sc'){
					if(arr_bg_status_sc[value] != undefined)
						color = arr_bg_status_sc[value];
					else color = '';
					$(row_selector+' td[data-status_message]').removeClass().addClass(color);
				}
				else if(index=='status' && status != null){
					if(arr_bg_status[value] != undefined)
						color = arr_bg_status[value];
					else color = '';
					$(row_selector+' td[data-status]').removeClass().addClass(color);
				}
			});
			populateButtonHistory();
			
			tabledata[sc] = arr_fromserver;
		} else{
			/*if(sc == '1214792')
				console.log('sama');*/
		}
	} else { //SC UNAVAILABLE
		tabledata[sc] = arr_fromserver;
		
		if($(row_selector).length == 0){
			highest_num = getTableHighestNum();
			next_num = highest_num + 1;
			txt_add = 	'<tr data-sc="'+sc+'">'+
							'<td class="table-num">'+
								'<span class="num">'+next_num+'</span>'+
								'<button data-sc="'+sc+'" class="btn btn-primary btn-xs btn-edit hidden">'+
									'<span class="fa fa-pencil"></span>'+
								'</button>'+
							'</td>';
			$.each(arr_status_va,function(index,value){
				if(inArray(value,['umur','is_ms2n'])) txt_class=' class="text-center"';
				else txt_class = '';
				
				if(value=='status_message') txt_class = ' class="'+arr_bg_status_sc[arr_fromserver['status_sc']]+' table-col-md"';
				
				if(arr_fromserver[value]!=null) val = arr_fromserver[value];
				else val = '';
				txt_add +=  '<td data-'+value+'="'+arr_fromserver[value]+'"'+txt_class+'>'+val+'</td>';
			});
			
			txt_add += '</tr>';
			
			/*txt_add += '<td class="no-wrap">'+
							'<button data-sc="'+sc+'" class="btn btn-primary btn-sm btn-edit">'+
								'<span class="fa fa-pencil"></span>'+
							'</button> '+
							'<button data-sc="'+sc+'" class="btn btn-warning btn-sm btn-copy" data-clipboard-text="'+arr_fromserver['data_clipboard']+'" title="Copy Data to Clipboard">'+
								'<span class="fa fa-copy"></span>'+
							'</button>'+
						'</td></tr>';*/
			
			$('table#va_table tbody').append(txt_add);
			tableEvents();
		}
	}
}

function populateButtonHistory(){
	$('a.btn-history').click(function(){
		sc = $(this).attr('data-sc');
		$.ajax({
			url : '../access/dialog/history_stat',
			type : 'post',
			data : {sc : sc},
			beforeSend : function(){
				buildModal('<span class="fa fa-history"></span> History Status Order SC '+sc);
			},
			success : function(data){
				populateModalContent(data);
			}
		});
	});
}

function getTableHighestNum(){
	var high = Math.max.apply(Math, $('.table-num').map(function(){
        return $(this).text()
	}));
	
	return high;
}

function tableEvents(){
	$('.btn-edit').click(function(){
		data_sc = $(this).attr('data-sc');
		$.ajax({
			url : '../access/dialog/edit_order',
			type : 'post',
			data : {data_sc : data_sc},
			beforeSend : function(){
				buildModal('<span class="fa fa-pencil"></span> Edit Order');
				$('form#edit_order').remove();
			},
			success : function(data){
				$('form#edit_order').remove();
				populateModalContent(data);
				
				$('form#edit_order').submit(function(e){
					e.preventDefault();
					form = $('form#edit_order');
					url = form.attr('action');
					$.ajax({
						url : url,
						type : 'post',
						data : form.serialize(),
						success : function(data){
							create_form_message('form#edit_order','success','Data telah diupdate.');
						}
					});
				});
				
				$('button#btn_update_status_sc').click(function(e){
					data_sc = $(this).attr('data-sc');
					selector = $(this);
					$.ajax({
						url : '../manage/update_status_sc_single',
						type : 'post',
						data : {data_sc : data_sc},
						beforeSend : function(){
							selector.find('span.fa').addClass('fa-spin');
							selector.addClass('disabled');
						},
						success : function(data){
							data = JSON.parse(data);
							data.status_message = $("<div/>").html(data.status_message).text();
							$('form#edit_order textarea[name="status_sc"]').val(data.status_sc);
							$('form#edit_order textarea[name="status_message"]').val(data.status_message);
							
							selector.find('span.fa').removeClass('fa-spin');
							selector.removeClass('disabled');
						}
					});
				});
			}
		});
	});
	
	/*var clipboard = new Clipboard('.btn.btn-copy');
	
	clipboard.on('success', function(e) {
		delayer = 200;
		$(e.trigger).removeClass('btn-warning').addClass('btn-success');
		setTimeout(function(){
			$(e.trigger).removeClass('btn-success').addClass('btn-warning');
			setTimeout(function(){
				$(e.trigger).removeClass('btn-warning').addClass('btn-success');
				setTimeout(function(){ $(e.trigger).removeClass('btn-success').addClass('btn-warning'); },200);
			},200);
		},200);
		var left = $(document).outerWidth() - $(window).width();
		$('body, html').scrollLeft(left);
	});*/

	populateButtonHistory();
	
	/*if(page=='manage_va')
	$('input#search').quicksearch('table tbody tr',{
		onBefore: function(){ $('table tbody').unhighlight(); },
		onAfter: function() {
			$('table tbody').highlight($('input#search').val());
			if($('input#search').val()=='') va_status_filter();
		}
	});
	
	$('table#va_table tbody tr, table#table_track_order tbody tr').click(function(e){
		if($(this).hasClass('bcg-highlight')) 
			$(this).removeClass('bcg-highlight');
		else {
			//$('table#va_table tbody tr, table#table_track_order tbody tr').removeClass('bcg-highlight');
			$('table#va_table tbody tr, table#table_track_order tbody tr').removeAttr('class');
			$(this).addClass('bcg-highlight');
		}
	});*/
	
	 $('#myModal').on('shown.bs.modal', function(e){
	      $(this).modal('handleUpdate'); //Update backdrop on modal show
	      $(this).scrollTop(0); //reset modal to top position
	  });
}

function inArray(needle, haystack) {
    var length = haystack.length;
    for(var i = 0; i < length; i++) {
        if(typeof haystack[i] == 'object') {
            if(arrayCompare(haystack[i], needle)) return true;
        } else {
            if(haystack[i] == needle) return true;
        }
    }
    return false;
}