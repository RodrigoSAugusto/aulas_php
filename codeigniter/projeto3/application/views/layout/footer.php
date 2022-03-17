<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- JavaScript para fazer as paradas do Fullcalendar-->
<script type="text/javascript">
  var events = <?php echo json_encode($data) ?>;


  var date = new Date()

  var d = date.getDate(),

    m = date.getMonth(),

    y = date.getFullYear()



  $('#calendar').fullCalendar({

    header: {

      left: 'prev,next today',

      center: 'title',

      right: 'month,agendaWeek,agendaDay'

    },

    buttonText: {

      today: 'today',

      month: 'month',

      week: 'week',

      day: 'day'

    },

    events: events

  })
</script>

<p> Eita Diaxo </p>

</body>

</html>
