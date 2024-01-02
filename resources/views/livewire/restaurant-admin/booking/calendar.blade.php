<div>

    <div id='calendar-container' wire:ignore>

        <div id='calendar'></div>

    </div>

</div>

@push('styles')
    <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.3.1/main.min.css' rel='stylesheet' />

    <style>

        #calendar-container{


        }

        #calendar{

            padding: 10px;

            


            height: 610px;

            border:1px solid #bdbdbd;

        }

    </style>



@endpush

@push('scripts')

    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.3.1/main.min.js'></script>



    <script>
        document.addEventListener('livewire:load', function() {


            var Calendar = FullCalendar.Calendar;
            var calendarEl = document.getElementById('calendar');
            var data =   @this.events;
            var calendar = new Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                events: JSON.parse(data),
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay'
                },
            });
            calendar.render();
        });
    </script>


@endpush