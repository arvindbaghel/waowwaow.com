<div class="bx_gsearch_container" id="bx_gsearch<?=$a['suffix'];?>">
    <div class="loading_ajax"><div class="loading_ajax_rotating"></div></div>
</div>
<script type="text/javascript">

bx_loading('bx_gsearch<?=$a['suffix'];?>', true);

google.load('search', '1');

function OnLoad() {
  // Create a search control
  var searchControl = new google.search.SearchControl();

  var webSearch = new google.search.WebSearch()
  webSearch.setSiteRestriction('<?=$a['domain'];?>');
  searchControl.addSearcher(webSearch);

  if (<?=$a['is_image_search'];?>) {
      var imageSearch = new google.search.ImageSearch();
      imageSearch.setSiteRestriction('<?=$a['domain'];?>');
      searchControl.addSearcher(imageSearch);
  }

  // draw in tabbed layout mode
  var drawOptions = new google.search.DrawOptions();
  if (<?=$a['is_tabbed_search'];?>)
    drawOptions.setDrawMode(google.search.SearchControl.DRAW_MODE_TABBED);
  if (<?=$a['separate_search_form'];?>)
    drawOptions.setSearchFormRoot(document.getElementById("bx_gsearch_form<?=$a['suffix'];?>"));

  // tell the searcher to draw itself and tell it where to attach
  searchControl.draw(document.getElementById("bx_gsearch<?=$a['suffix'];?>"), drawOptions);
  searchControl.setNoResultsString ("No Results");

  // execute an inital search
  if ("<?=$a['keyword'];?>".length > 0)
    searchControl.execute("<?=$a['keyword'];?>");
}

google.setOnLoadCallback(OnLoad);

</script>
