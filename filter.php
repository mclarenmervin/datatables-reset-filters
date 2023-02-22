//HTML Code
<button class="dttable_reset_filter">Reset</button>

//jQuery code
<script>
jQuery(document).ready(function($) {
    var table = $('#example_table_id').DataTable({
        pageLength : 15,
    });
    
    $('button.dttable_reset_filter').click(function(){
        // Clear The Search Filter On All Columns
        table.search('').columns().search('').draw();

        // Clear Custom Filter
        $.fn.dataTableExt.afnFiltering.splice(0, $.fn.dataTableExt.afnFiltering.length);
        table.draw();

        // Re-add Custom Filters
        $.fn.dataTableExt.afnFiltering.forEach(function(filter) {
            $.fn.dataTable.ext.search.push(filter);
        });
    });
});
</script>
