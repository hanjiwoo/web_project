$(document).ready(function() {
    $('#calendar').fullCalendar({
        header:{
            left:'prev,next,today',
            center:'title',
            right:'addEvent',
        },
        defaultDate: '2018-10-01',
        editable: true,
        eventLimit: true, // allow "more" link when too many events
        height: 620,
        events: './load.php',
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
        eventClick:function(event){
            if(confirm("remove?"))
            {
                var id=event.id;
                $.ajax({
                    
                    url:"delete.php",
                    type:"POST",
                    data:{id:id},

                    success:function(){
                        calendar.fullCalendar('refetchEvents');
                        alert("Event removed");
                    }
                })
            }

        }
    });
})
