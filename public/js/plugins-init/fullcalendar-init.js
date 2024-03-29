var tanggal = [

]

$.ajax({
    url: '/Calendar',
    type: 'GET',
    success: function(response) {
        // Proses data yang diterima dari server

        $.each(response, function(index, item) {
            if (item) {
              tanggal.push({
                title: item.shift,
                start: item.date,
                color: 'green'
              });
            }
          });


            var calendarEl = document.getElementById('calendar');

            var currentDate = new Date();

            var calendar = new FullCalendar.Calendar(calendarEl, {
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay'
                  },
              initialDate: currentDate,
              selectable: true,
              selectMirror: true,
              select: function(arg) {
                $('#exampleModalCenter').modal('show')
                // console.log('aaa')
                // var title = prompt('Event Title:');
                // if (title) {
                //   calendar.addEvent({
                //     title: title,
                //     start: arg.start,
                //     end: arg.end,
                //     allDay: arg.allDay
                //   })
                // }
                calendar.unselect()
              },
              eventClick: function(arg) {

                // if (confirm('Are you sure you want to delete this event?')) {
                //   arg.event.remove()
                // }
              },
              editable: true,
              dayMaxEvents: true, // allow "more" link when too many events
              events:tanggal,
            });

            calendar.render();

            console.log(tanggal)
        },
        error: function(xhr) {
            // Tangani jika terjadi kesalahan
            console.log(xhr.responseText);
        }
    });
