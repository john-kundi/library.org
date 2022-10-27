
        
            jQuery(document).ready(function(){
                
                jQuery('#basicTable').DataTable({
                    responsive: true
                });
                
                var shTable = jQuery('#shTable').DataTable({
                    "fnDrawCallback": function(oSettings) {
                        jQuery('#shTable_paginate ul').addClass('pagination-active-dark');
                    },
                    responsive: true
                });
                
                // Show/Hide Columns Dropdown
                jQuery('#shCol').click(function(event){
                    event.stopPropagation();
                });
                
                jQuery('#shCol input').on('click', function() {

                    // Get the column API object
                    var column = shTable.column($(this).val());
 
                    // Toggle the visibility
                    if ($(this).is(':checked'))
                        column.visible(true);
                    else
                        column.visible(false);
                });
                
                var exRowTable = jQuery('#exRowTable').DataTable({
                    responsive: true,
                    "fnDrawCallback": function(oSettings) {
                        jQuery('#exRowTable_paginate ul').addClass('pagination-active-success');
                    },
                    "ajax": "ajax/objects.txt",
                    "columns": [
                        {
                            "class":          'details-control',
                            "orderable":      false,
                            "data":           null,
                            "defaultContent": ''
                        },
                        { "data": "name" },
                        { "data": "position" },
                        { "data": "office" },
                        { "data": "salary" }
                    ],
                    "order": [[1, 'asc']] 
                });
                
                // Add event listener for opening and closing details
                jQuery('#exRowTable tbody').on('click', 'td.details-control', function () {
                    var tr = $(this).closest('tr');
                    var row = exRowTable.row( tr );
             
                    if ( row.child.isShown() ) {
                        // This row is already open - close it
                        row.child.hide();
                        tr.removeClass('shown');
                    }
                    else {
                        // Open this row
                        row.child( format(row.data()) ).show();
                        tr.addClass('shown');
                    }
                });
               
                
                // DataTables Length to Select2
                jQuery('div.dataTables_length select').removeClass('form-control input-sm');
                jQuery('div.dataTables_length select').css({width: '60px'});
                jQuery('div.dataTables_length select').select2({
                    minimumResultsForSearch: -1
                });
    
            });
            
            function format (d) {
                // `d` is the original data object for the row
                return '<table class="table table-bordered nomargin">'+
                    '<tr>'+
                        '<td>Full name:</td>'+
                        '<td>'+d.name+'</td>'+
                    '</tr>'+
                    '<tr>'+
                        '<td>Extension number:</td>'+
                        '<td>'+d.extn+'</td>'+
                    '</tr>'+
                    '<tr>'+
                        '<td>Extra info:</td>'+
                        '<td>And any further details here (images etc)...</td>'+
                    '</tr>'+
                '</table>';
            }
        
        
      
            jQuery(document).ready(function(){
              
                // Basic Form
                jQuery("#basicForm").validate({
                    highlight: function(element) {
                        jQuery(element).closest('.form-group').removeClass('has-success').addClass('has-error');
                    },
                    success: function(element) {
                        jQuery(element).closest('.form-group').removeClass('has-error');
                    }
                });
              
                // Error Message In One Container
                jQuery("#basicForm2").validate({
                    errorLabelContainer: jQuery("#basicForm2 div.errorForm")
                });
              
                // With Checkboxes and Radio Buttons
                
                jQuery('#genderError').attr('for','gender');
                jQuery('#intError').attr('for','int[]');
                
                jQuery("#basicForm3").validate({
                    highlight: function(element) {
                        jQuery(element).closest('.form-group').removeClass('has-success').addClass('has-error');
                    },
                    success: function(element) {
                        jQuery(element).closest('.form-group').removeClass('has-error');
                    }
                });
                
                jQuery("#basicForm4").validate({
                    highlight: function(element) {
                        jQuery(element).closest('.form-group').removeClass('has-success').addClass('has-error');
                    },
                    success: function(element) {
                        jQuery(element).closest('.form-group').removeClass('has-error');
                    },
                    ignore: null
                });
                
                // Validation with select boxes
                jQuery("#flowers, #fruits").select2({
                    minimumResultsForSearch: -1
                });
              
            });
      

       
            jQuery(document).ready(function(){
    
                jQuery('.thmb').hover(function() {
                    var t = jQuery(this);
                    t.find('.ckbox').show();
                    t.find('.fm-group').show();
                }, function() {
      
                    var t = jQuery(this);
                    if(!t.closest('.thmb').hasClass('checked')) {
                        t.find('.ckbox').hide();
                        t.find('.fm-group').hide();
                    }
                });
    
                jQuery('.ckbox').each(function(){
                    var t = jQuery(this);
                    var parent = t.parent();
                    if(t.find('input').is(':checked')) {
                        t.show();
                        parent.find('.fm-group').show();
                        parent.addClass('checked');
                    }
                });
    
    
                jQuery('.ckbox').click(function(){
                    var t = jQuery(this);
                    if(!t.find('input').is(':checked')) {
                        t.closest('.thmb').removeClass('checked');
                        enable_itemopt(false);
                    } else {
                        t.closest('.thmb').addClass('checked');
                        enable_itemopt(true);
                    }
                });
    
                jQuery('#selectAll').click(function() {
                    if(jQuery(this).hasClass('btn-default')) {
                        jQuery('.thmb').each(function() {
                            jQuery(this).find('input').attr('checked',true);
                            jQuery(this).addClass('checked');
                            jQuery(this).find('.ckbox, .fm-group').show();
                        });
                        enable_itemopt(true);
                        jQuery(this).removeClass('btn-default').addClass('btn-primary');
                        jQuery(this).text('Select None');
                    } else {
                        jQuery('.thmb').each(function(){
                            jQuery(this).find('input').attr('checked',false);
                            jQuery(this).removeClass('checked');
                            jQuery(this).find('.ckbox, .fm-group').hide();
                        });
                        enable_itemopt(false);
                        jQuery(this).removeClass('btn-primary').addClass('btn-default');
                        jQuery(this).text('Select All');
                    }
                });
    
                function enable_itemopt(enable) {
                    if(enable) {
                        jQuery('.media-options .btn.disabled').removeClass('disabled').addClass('enabled');
                    } else {
        
                        // check all thumbs if no remaining checks
                        // before we can disabled the options
                        var ch = false;
                        jQuery('.thmb').each(function(){
                            if(jQuery(this).hasClass('checked'))
                                ch = true;
                        });
        
                        if(!ch)
                            jQuery('.media-options .btn.enabled').removeClass('enabled').addClass('disabled');
                    }
                }
    
                jQuery("a[data-rel^='prettyPhoto']").prettyPhoto();
    
            });
      