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