
<span>
    Display new 
    <select id="bx_chart_obj" name="bx_chart_obj" class="bx-def-margin-sec-right" onchange="bx_chart_select_graph()" disabled>
        <?php if(is_array($a['bx_repeat:objects'])) for($i=0; $i<count($a['bx_repeat:objects']); $i++){ ?>
            <option value="<?=$a['bx_repeat:objects'][$i]['object'];?>"><?=$a['bx_repeat:objects'][$i]['title'];?></option>
        <?php } else if(is_string($a['bx_repeat:objects'])) echo $a['bx_repeat:objects']; ?>
    </select>
</span>

<span class="bx-def-margin-sec-right" id="bx_chart_date_from_wrp">
    from
    <input class="bx-def-round-corners-with-border" style="width:80px; padding:2px;" id="bx_chart_date_from" name="bx_chart_date_from" type="text" onchange="bx_chart_select_graph()" readonly />
</span>

<span id="bx_chart_date_to_wrp">
    to
    <input class="bx-def-round-corners-with-border" style="width:80px; padding:2px;" id="bx_chart_date_to" name="bx_chart_date_to" type="text" value=""  onchange="bx_chart_select_graph()" readonly />
</span>

<div id="bx_chart_graph" class="bx-def-border bx-def-margin-sec-top" style="height:250px; background-color:#fff;"></div>

<script>

    glDateFormat = 'dd/mm/yy';

    // attach datepicker
    $('#bx_chart_date_from,#bx_chart_date_to').datepicker({
        changeYear: true,
        changeMonth: true,
        dateFormat: glDateFormat
    });

    // set current dates in proper date format
    $('#bx_chart_date_from').datepicker('setDate',  $.datepicker.formatDate(glDateFormat, $.datepicker.parseDate('yy-mm-dd', '<?=$a['from'];?>')));
    $('#bx_chart_date_to').datepicker('setDate',  $.datepicker.formatDate(glDateFormat, $.datepicker.parseDate('yy-mm-dd', '<?=$a['to'];?>')));

</script>

<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script>    

    google.load("visualization", "1", {packages:["corechart"]});
    google.setOnLoadCallback(bx_chart_select_graph);


    function bx_chart_select_graph () {
    
        $('#bx_chart_graph').html('');
        $('#bx_chart_obj').attr('disabled', true);
        bx_loading('bx_chart_graph', true);

        jQuery.getJSON('<?=$a['admin_url'];?>charts.json.php', {
            action: 'get',
            o: $('#bx_chart_obj').val(),
            from: $.datepicker.formatDate('yy-mm-dd', $('#bx_chart_date_from').datepicker('getDate')),
            to: $.datepicker.formatDate('yy-mm-dd', $('#bx_chart_date_to').datepicker('getDate'))
        }, function (oData) {

            $('#bx_chart_obj').attr('disabled', false);
            bx_loading('bx_chart_graph', false);

            if (undefined != oData.error) {

                $('#bx_chart_graph').html('<div class="bx-def-font-large bx-def-padding" style="text-align:center;">' + oData.error + '</div>');

            } else {


                // hide date selector if chart doesn't support date range
                if (oData.hide_date_range)
                    $('#bx_chart_date_from_wrp,#bx_chart_date_to_wrp').fadeOut();
                else
                    $('#bx_chart_date_from_wrp,#bx_chart_date_to_wrp').fadeIn();

                // convert dates
                if (false !== oData.column_date) {
                    for (var i in oData.data) {    
                        var sDate = oData.data[i][oData.column_date];
                        var m = sDate.match(/(\d{4})-(\d{2})-(\d{2})/);
                        if (!m || !m[1] || !m[2] || !m[3])
                            continue;
                        var oDate = new Date(m[1],m[2]-1,m[3]);
                        oData.data[i][oData.column_date] = oDate;
                    }
                } 

                // add data
                var data = new google.visualization.DataTable();                
                for (var i = 0 ; i < oData.data[0].length ; ++i) {
                    var sType = 0 == i ? 'string' : 'number';
                    var sLabel = '';
                    if (false !== oData.column_date && i == oData.column_date)
                        sType = 'datetime'; 
                    else if (false !== oData.column_count && i == oData.column_count)
                        sLabel = oData.title;
                    data.addColumn(sType, sLabel);
                }
                data.addRows(oData.data);

                // define options
                var options = {
                  title: oData.title
                };

                if (undefined != oData.options)
                    options = jQuery.extend(options, oData.options);

                // draw chart
                var chart = new google.visualization[oData.type]($('#bx_chart_graph')[0]);
                chart.draw(data, options);

            }
        });

    }

</script>

