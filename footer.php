
      <div class="footer">
        <p>&copy; FrxBanque 2014 </p>
      </div>

    </div> <!-- /container -->
 

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	
	<script src="js/jquery.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/bootstrap-datepicker-fr.js"></script> 
<script src="//rawgithub.com/stidges/jquery-searchable/master/dist/jquery.searchable-1.0.0.min.js"></script>
 <script>
 $('.datepicker').datepicker({ autoclose: true, todayHighlight: true ,format:"yyyy-mm-dd", language:"fr"});
 
</script>
<script type="text/javascript">
	$(function () {
    $( '#table' ).searchable({
        striped: true,
        oddRow: { 'background-color': '#f5f5f5' },
        evenRow: { 'background-color': '#fff' },
        searchType: 'fuzzy'
    });
    
    $( '#searchable-container' ).searchable({
        searchField: '#container-search',
        selector: '.row',
        childSelector: '.col-xs-4',
        show: function( elem ) {
            elem.slideDown(100);
        },
        hide: function( elem ) {
            elem.slideUp( 100 );
        }
    })
});	</script>
	
  </body>
</html>
