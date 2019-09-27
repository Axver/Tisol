getPagination('#table-id');
$('#maxRows').trigger('change');
function getPagination (table){

    $('#maxRows').on('change',function(){
        $('.pagination').html('');						// reset pagination div
        var trnum = 0 ;									// reset tr counter
        var maxRows = parseInt($(this).val());			// get Max Rows from select option

        var totalRows = $(table+' tbody tr').length;		// numbers of rows
        $(table+' tr:gt(0)').each(function(){			// each TR in  table and not the header
            trnum++;									// Start Counter
            if (trnum > maxRows ){						// if tr number gt maxRows

                $(this).hide();							// fade it out
            }if (trnum <= maxRows ){$(this).show();}// else fade in Important in case if it ..
        });											//  was fade out to fade it in
        if (totalRows > maxRows){						// if tr total rows gt max rows option
            var pagenum = Math.ceil(totalRows/maxRows);	// ceil total(rows/maxrows) to get ..
            //	numbers of pages
            for (var i = 1; i <= pagenum ;){			// for each page append pagination li
                $('.pagination').append('<li data-page="'+i+'">\
								      <span>'+ i++ +'<span class="sr-only">(current)</span></span>\
								    </li>').show();
            }											// end for i


        } 												// end if row count > max rows
        $('.pagination li:first-child').addClass('active'); // add active class to the first li


        //SHOWING ROWS NUMBER OUT OF TOTAL DEFAULT
        showig_rows_count(maxRows, 1, totalRows);
        //SHOWING ROWS NUMBER OUT OF TOTAL DEFAULT

        $('.pagination li').on('click',function(e){		// on click each page
            e.preventDefault();
            var pageNum = $(this).attr('data-page');	// get it's number
            var trIndex = 0 ;							// reset tr counter
            $('.pagination li').removeClass('active');	// remove active class from all li
            $(this).addClass('active');					// add active class to the clicked


            //SHOWING ROWS NUMBER OUT OF TOTAL
            showig_rows_count(maxRows, pageNum, totalRows);
            //SHOWING ROWS NUMBER OUT OF TOTAL



            $(table+' tr:gt(0)').each(function(){		// each tr in table not the header
                trIndex++;								// tr index counter
                // if tr index gt maxRows*pageNum or lt maxRows*pageNum-maxRows fade if out
                if (trIndex > (maxRows*pageNum) || trIndex <= ((maxRows*pageNum)-maxRows)){
                    $(this).hide();
                }else {$(this).show();} 				//else fade in
            }); 										// end of for each tr in table
        });										// end of on click pagination list
    });
    // end of on select change

    // END OF PAGINATION

}




// SI SETTING
$(function(){
    // Just to append id number for each row
    default_index();

});

//ROWS SHOWING FUNCTION
function showig_rows_count(maxRows, pageNum, totalRows) {
    //Default rows showing
    var end_index = maxRows*pageNum;
    var start_index = ((maxRows*pageNum)- maxRows) + parseFloat(1);
    var string = 'Showing '+ start_index + ' to ' + end_index +' of ' + totalRows + ' entries';
    $('.rows_count').html(string);
}

// CREATING INDEX
function default_index() {
    $('table tr:eq(0)').prepend('<th> ID </th>')

    var id = 0;

    $('table tr:gt(0)').each(function(){
        id++
        $(this).prepend('<td>'+id+'</td>');
    });
}

// All Table search script
function FilterkeyWord_all_table() {

// Count td if you want to search on all table instead of specific column

    var count = $('.table').children('tbody').children('tr:first-child').children('td').length;

    // Declare variables
    var input, filter, table, tr, td, i;
    input = document.getElementById("search_input_all");
    var input_value =     document.getElementById("search_input_all").value;
    filter = input.value.toLowerCase();
    if(input_value !=''){
        table = document.getElementById("table-id");
        tr = table.getElementsByTagName("tr");

        // Loop through all table rows, and hide those who don't match the search query
        for (i = 1; i < tr.length; i++) {

            var flag = 0;

            for(j = 0; j < count; j++){
                td = tr[i].getElementsByTagName("td")[j];
                if (td) {

                    var td_text = td.innerHTML;
                    if (td.innerHTML.toLowerCase().indexOf(filter) > -1) {
                        //var td_text = td.innerHTML;
                        //td.innerHTML = 'shaban';
                        flag = 1;
                    } else {
                        //DO NOTHING
                    }
                }
            }
            if(flag==1){
                tr[i].style.display = "";
            }else {
                tr[i].style.display = "none";
            }
        }
    }else {
        //RESET TABLE
        $('#maxRows').trigger('change');
    }
}


function showDashboard()
{
    window.location="flight";
}

function dashboardSearch()
{
    let from=$("#from").val();
    let destination=$("#destination").val();
    let date=$("#date").val();
    console.log(from+destination+date);
    if(from===destination)
    {
        alert("Tidak Boleh Sama")
    }
    else
    {
        //Tambahkan data dummy ke tabel
        $('#table-id').find('tr').detach();
        let i=1;
        while (i<=100)
        {
            $("tbody").append("<tr><td>"+i+"</td><td>"+from+"</td><td>"+destination+"</td><td>Garuda Indonesia</td><td>"+date+"</td><td><i style='color:red;' class='fa fa-info'></i></td><td>Rp.1000.000</td><td><button class='btn btn-info'>Buy</button></td></tr>");
            i++;
        }
        showRecommend();
        $('#maxRows').trigger('change');
        // $( "#table-id" ).load( "flight?index.php #table-id" );


    }

}

function hideRecommend()
{
    $(".recommend").hide();
}

function showRecommend()
{
    $(".recommend").show();
}
function searchFlight() {
    let from=$("#from").val();
    let destination=$("#destination").val();
    let date=$("#date").val();



    if(from==destination)
    {
        alert("From and Destination can't be same");
    }
    else
    {
        from=from.split('-');
        destination=destination.split('-');
        // from=from[0].substring(0, from[0].length - 1);
        from=from[0];
        from=from.substring(0, from.length - 1);
        destination=destination[0];
        destination=destination.substring(0, destination.length - 1);
        console.log(from);
        console.log(destination);
        console.log(date);
        window.location="flight/"+from+"/"+destination+"/"+date;

    }
}

$(function() {
    $( '.autocomplete' ).each(function () {
        var apca = new apc('autocomplete', {
            key : '689e66e8e2',
            //secret : 'xxxxxxxxxxxxxxx', // Your API Secret Key: use this if you are not connecting from a web server
            limit : 7
        });

        var dataObj = {
            source: function( request, response ) {
                // make the request
                apca.request( request.term );

                // this builds each line of the autocomplete
                itemObj = function (airport, isChild) {
                    var label;
                    if (isChild) { // format children labels
                        label = '&rdsh;' + airport.iata + ' - ' + airport.name;
                    } else { // format labels
                        label = airport.city;
                        if (airport.state.abbr) {
                            label += ', ' + airport.state.abbr;
                        }
                        label += ', ' + airport.country.name;
                        label += ' (' + airport.iata + ' - ' + airport.name + ')';
                    }
                    return {
                        label: label,
                        value: airport.iata + ' - ' + airport.name,
                        code: airport.iata
                    };
                };

                // this deals with the successful response data
                apca.onSuccess = function (data) {
                    var listAry = [],
                        thisAirport;
                    if (data.status) { // success
                        for (var i = 0, len = data.airports.length; i < len; i++) {
                            thisAirport = data.airports[i];
                            listAry.push(itemObj(thisAirport));
                            if (thisAirport.children) {
                                for (var j = 0, jLen = thisAirport.children.length; j < jLen; j++) {
                                    listAry.push(itemObj(thisAirport.children[j], true));
                                }
                            }
                        }
                        response(listAry);
                    } else { // no results
                        response();
                    }
                };
                apca.onError = function (data) {
                    response();
                    console.log(data.message);
                };
            },
            select: function( event, ui ) {
                // do something for click event
                console.log(ui.item.code);
            }
        }

        // this is necessary to allow html entities to display properly in the jqueryUI labels
        $(this).autocomplete(dataObj).data("ui-autocomplete")._renderItem = function( ul, item) {
            return $('<li></li>').data('item.autocomplete', item ).html( item.label ).appendTo( ul );
        };
    });
});

