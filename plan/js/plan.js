$(document).ready(function() {
    $('#calendar').fullCalendar({
        header:{
            center:'addEvent'
        },
        defaultDate: '2018-10-01',
        editable: true,
        eventLimit: true, // allow "more" link when too many events
        height: 620,
        
        customButtons:{
            addEvent:{
                text:'add event',
                click: function(){   
                    // var date = prompt("날짜를 입력해주세요","YYYY-MM-DD");
                    // date = moment(date);

                    // $('#calendar').fullCalendar('renderEvent', {
                    //     title: "default",
                    //     start: date,  
                    //     allDay: true
                    // });
                    $('#fcModal').modal();
                }
            }
        },
        eventClick:function(event,calEvent,jsEvent,view){
            $("#fcModal").modal();

            // clickEvent();
        }
    });
})
