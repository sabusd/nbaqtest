<?php 
/*
Template Name: usaTest
*/
?> <?php get_header(); ?>
<style>

.column-filter-widget {  padding: 5px; }
.column-filter-widget select { display: block;     height: 29px;
    padding-top: 0;
    padding-bottom: 0; }
.column-filter-widgets a.filter-term { display: block; text-decoration: none; padding-left: 10px; font-size: 90%; }
.column-filter-widgets a.filter-term:hover { text-decoration: line-through !important; }
.column-filter-widget-selected-terms { clear:left; }
</style>
   <link href="https://cdn.datatables.net/fixedheader/3.1.2/css/fixedHeader.dataTables.min.css" type="text/css" rel="stylesheet" />
   <link href="https://cdn.datatables.net/responsive/2.1.0/css/responsive.dataTables.min.css" type="text/css" rel="stylesheet" />
<link href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet" />


    <script src="https://code.jquery.com/jquery-1.12.3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/responsive/2.1.0/js/dataTables.responsive.min.js"></script>
  <script src="https://cdn.datatables.net/fixedheader/3.1.2/js/dataTables.fixedHeader.min.js"></script>

  <script src="/../filters.js"></script>

        <table id="example" dir="ltr" class="display dt-center" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>STATE</th>
                <th >University</th>
                <th >MAJOR</th>
                <th >SPECIALTY</th>
                <th>DEGREE</th>
                <th>RESTRICTION</th>
               <th> Coast</th>

            </tr>
        </thead>
     
    </table>
     
 <script>
     
     $(document).ready(function() {
         
         
         
         
   var table= $('#example').DataTable( {
        fixedHeader: true,
        "language": {
            "url": "http://cdn.datatables.net/plug-ins/1.10.11/i18n/Arabic.json"
        },
           responsive:{ 
                details: {
            display: $.fn.dataTable.Responsive.display.childRowImmediate
           }},      
            columnDefs: [

        { responsivePriority: 1, targets: 2 },
        { responsivePriority: 1, targets: 3 }
    



    ],
	    "processing": true,
         "sAjaxSource": '../usaList.json',
         "columns": [
            { "data": "STATE" },
            { "data": "SCHOOL" },
            { "data": "MAJOR" },
            { "data": "SPECIALTY" },
            { "data": "DEGREE" },
                        { "data": "RESTRICTION" },
                          { "data": "Coast" }

        ],
        "sDom": 'W<"clear">lfrtip',
        "oColumnFilterWidgets": {
			"aiExclude": [ 5 ],"bGroupTerms": true
		}
    } );
    


} );
     
 </script>

      
  
            <?php get_footer(); ?>
